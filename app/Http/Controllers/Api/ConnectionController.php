<?php

namespace App\Http\Controllers\Api;


use App\Http\Requests\ConnectRequest;
use App\Mail\SendConnectMail;
use App\Models\BusinessCard;
use App\Models\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ConnectionController extends ResponceController
{
    protected $businessCard, $settings;
    public function __construct(
        BusinessCard $businessCard
    ) {
        $this->businessCard  = $businessCard;
        $this->settings = getSetting();
    }
    public function getIndex(Request $request)
    {

        $paginate = isset($request->paginate) ? $request->paginate : 10;

        $form_date      = '';
        $to_date        = '';
        if (!empty($request->daterange)) {
            $date = explode("-", $request->daterange);
            $form_date = trim($date[0]);
            $to_date = trim($date[1]);
        }

        $discroption = [
            'datetange' => 'datetange formate yyyy/mm/dd - yyyy/mm/dd',
            'search' => [
                'name',
                'email',
                'company'
            ]
        ];
        $keyword = $request->search;
        $data = Connection::orderBy('connects.id', 'desc')

            ->where('connects.user_id', Auth::guard('api')->user()->id);
        if (isset($keyword)) {
            $data->where(function ($query) use ($keyword) {
                $query->where('connects.name', 'like', '%' . $keyword . '%')
                    ->orWhere('connects.email', 'like', '%' . $keyword . '%')
                    ->orWhere('connects.company_name', 'like', '%' . $keyword . '%')
                    ->orWhere('connects.phone', 'like', '%' . $keyword . '%');
            });
        }
        if (!empty($form_date) && !empty($to_date)) {
            $form_date = date('Y/m/d', strtotime($form_date));
            $to_date = date('Y/m/d', strtotime($to_date));
            if ($form_date == $to_date) {
                $data = $data->whereDate('connects.created_at', $form_date);
            } else {
                $data = $data->whereBetween('connects.created_at', [$form_date, $to_date]);
            }
        }
        $data = $data->paginate($paginate)->withQueryString();
        return $this->sendResponse(200, "CRM", $data, true, $discroption);
    }

    public function getView($id)
    {
        $row =  Connection::select('connects.*')
            ->where('connects.id', $id)
            ->first();

        return $this->sendResponse(200, "CRM Details", $row, true);
    }


    public function putUpdate(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name'          => 'required|string|max:124',
            'email'         => 'required|email|max:150',
            'phone'         => 'required|max:20',
            'title'         => 'nullable|string|max:124',
            'company_name'  => 'nullable|string|max:124',
            'message'       => 'required|string|max:1024',
            'profile_pic'   => 'nullable'
        ]);


        if ($validator->fails()) {
            return $this->sendError(200, $validator->errors()->first());
        }


        DB::beginTransaction();
        try {
            $connection   = Connection::find($id);
            if ($request->has('profile_pic') && !empty($request->profile_pic)) {

                $image_name =  $this->uploadBase64FileToPublic($request->profile_pic, 'crm');
                $connection->profile_image  = $image_name;
            }

            $connection->name       = $request->name;
            $connection->email      = $request->email;
            $connection->phone      = $request->phone;
            $connection->title      = $request->title;
            $connection->company_name = $request->company_name;
            $connection->message    = $request->message;
            $connection->updated_at = date("Y-m-d H:i:s");
            $connection->updated_by = Auth::guard('api')->user()->id;
            $connection->save();
        } catch (\Exception $e) {

            DB::rollback();
            $message = 'Something wrong! Please try again';
            return $this->sendError('Exception Error', $message);
        }
        DB::commit();
        $message = 'Information updated';
        return $this->sendResponse(200, $message, $connection);
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'subject' => 'required|max:60',
            'message' => 'required',
            'email' => 'required|email',
        ]);


        if ($validator->fails()) {
            return $this->sendError(200, $validator->errors()->first());
        }


        try {
            $connection   = Connection::findOrFail($request->id);
            $data['subject'] = $request->subject;
            $data['message'] = $request->message;

            // if (isset($connection->email)) {
            //     Mail::to($connection->email)->send(new SendConnectMail($data));
            // } else {
            //     Mail::to($request->email)->send(new SendConnectMail($data));
            // }

            Mail::to($request->email)->send(new SendConnectMail($data));
        } catch (\Exception $e) {


            $message = 'Something wrong! Please try again';

            return $this->sendError("Exception Error", $message);
        }
        $message = 'Email successfully sent';
        // return redirect()->back();
        return $this->sendResponse(200, $message, []);
    }
}
