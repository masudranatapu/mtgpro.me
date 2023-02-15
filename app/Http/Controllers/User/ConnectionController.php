<?php
namespace App\Http\Controllers\User;
use App\Models\Connection;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use App\Mail\SendConnectMail;
use JeroenDesloovere\VCard\VCard;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ConnectRequest;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\SendConnectMailRequest;

class ConnectionController extends Controller
{

    protected $businessCard;
    public function __construct(
        BusinessCard $businessCard
        )
        {
            $this->businessCard  = $businessCard;
            $this->settings = getSetting();
        }

    public function getIndex(Request $request)
    {
        $form_date      = '';
        $to_date        = '';
        if(!empty($request->daterange)){
            $date = explode("-",$request->daterange);
            $form_date = trim($date[0]);
            $to_date = trim($date[1]);
        }
        $keyword = $request->search;
        $data = DB::table('connects')
        ->select('connects.*','users.profile_image as user_image')
        ->orderBy('connects.id','desc')
        ->leftJoin('users','users.id','=','connects.user_id')
        ->where('connects.user_id',Auth::user()->id);
        if(isset($keyword)){
            $data->where(function ($query) use($keyword) {
                $query->where('connects.name', 'like', '%' .$keyword. '%')
                   ->orWhere('connects.email', 'like', '%' .$keyword. '%')
                   ->orWhere('connects.company_name', 'like','%'.$keyword. '%')
                   ->orWhere('connects.phone', 'like', '%' .$keyword. '%');
              });
        }
        if(!empty($form_date) && !empty($to_date)){
            $form_date = date('Y/m/d', strtotime($form_date));
            $to_date = date('Y/m/d', strtotime($to_date));
            if($form_date==$to_date){
                $data = $data->whereDate('connects.created_at', $form_date);
            }
            else{
                $data = $data->whereBetween('connects.created_at', [$form_date,$to_date]);
            }
        }
        $data = $data->paginate(20);
        return view('user.crm.index', compact('data'));
    }

    public function getView(Request $request,$email,$id)
    {
        $row = DB::table('connects')
        ->select('connects.*','users.profile_image')
        ->where('connects.email',$email)->where('connects.id',$id)
        ->leftJoin('users','users.id','=','connects.user_id')
        ->first();

        return view('user.crm.view', compact('row'));
    }
    public function getEdit(Request $request,$id)
    {
        $row = DB::table('connects')
        ->select('connects.*')
        ->where('connects.id',$id)
        ->leftJoin('users','users.id','=','connects.user_id')
        ->first();

        return view('user.crm.edit', compact('row'));
    }
    public function getDownloadVcf(Request $request,$id)
    {
        $photo = '';
        $connection = Connection::findOrFail($id);
        $vcard = new VCard();
        $lastname = '';
        $firstname = $connection->name;
        $additional = '';
        $prefix = '';
        $suffix = '';
        $company = $connection->company_name;
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
        $vcard->addEmail($connection->email);
        if(!empty($connection->phone)){
            $vcard->addPhoneNumber($connection->phone,'HOME');
        }
        if($connection->title){
            $vcard->addJobtitle($connection->title);
        }
        if(!empty($company)){
            $vcard->addCompany($connection->company_name);
        }

        // if(!empty($connection->profile_image)){
        //     // $profile_image = str_replace(' ', '%20', public_path($connection->profile_image));
        //     $vcard->addPhoto($connection->profile_image);
        // }
        return Response::make($vcard->getOutput(), 200, $vcard->getHeaders(true));
    }

    public function putUpdate(ConnectRequest $request,$id)
    {
        DB::beginTransaction();
        try {
            $connection   = Connection::find($id);
            if($request->has('profile_pic') && !empty($request->profile_pic[0]))
            {
                $file_name = $this->businessCard->formatName($request->name);
                $output = $request->profile_pic;
                $output = json_decode($output, TRUE);
                if(isset($output) && isset($output['output']) && isset($output['output']['image'])){
                    $image = $output['output']['image'];
                    if(isset($image))
                    {
                        $image_name =  $this->businessCard->uploadBase64ToImage($image,$file_name,'jpg');
                    }
                }
                $connection->profile_image  = asset($image_name);
            }
            $connection->name       = $request->name;
            $connection->email      = $request->email;
            $connection->phone      = $request->phone;
            $connection->title      = $request->title;
            $connection->company_name = $request->company_name;
            $connection->message    = $request->message;
            $connection->updated_at = date("Y-m-d H:i:s");
            $connection->updated_by = Auth::user()->id;
            $connection->update();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success('Payment information updated', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function sendConnectReplyEmail(SendConnectMailRequest $request,$id)
    {
        try {
            $connection   = Connection::findOrFail($id);
            $data['subject'] = $request->subject;
            $data['message'] = $request->message;
            Mail::to($connection->email)->send(new SendConnectMail($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            // return redirect()->back();
            return response()->json([
                'status' => 0,
                'msg'=> trans('Something wrong! Please try again'),
            ]);
        }
        // Toastr::success('Email successfully sent', 'Success', ["positionClass" => "toast-top-center"]);
        // return redirect()->back();
        return response()->json([
            'status' => 1,
            'msg'=> trans('Email successfully sent'),
        ]);
    }

    public function getExportCsv(Request $request)
        {
            $data = [];
            $path = '';
            $connects = '';
            $connect_id = $request->connect_id;
            $fileName   = 'contacts_'.uniqid().'.csv';
            $path = public_path('assets/vcard/');
            if (isset($connect_id)) {
                $connects = DB::table('connects')->whereIn('id',$connect_id)->get();
                if(empty($connects)){
                    return response()->json([
                        'status' => 0,
                        'redirect_url'   => '',
                        'msg'=> trans('Please select at least one record'),
                    ]);
                }
            }
            $file = fopen($path.$fileName, 'w');
            $columns = array('Name', 'Email', 'Phone', 'Title', 'Image','Company Name');
            fputcsv($file, $columns);
            $data = [];
            if (!empty($connects)) {
                foreach ($connects as $connect) {
                    $data['Name']  = $connect->name;
                    $data['Email']    = $connect->email;
                    $data['Phone']    = $connect->phone;
                    $data['Title']  = $connect->title;
                    $data['Image']  = $connect->profile_image;
                    $data['Company Name']  = $connect->company_name;
                    fputcsv($file, array($data['Name'], $data['Email'], $data['Phone'], $data['Title'], $data['Image'], $data['Company Name']));
                }
            }
            if(!empty($fileName) && file_exists(($path.$fileName))) {
                $data = route('user.crm.download-csv',$fileName);
            }
            return response()->json([
                'status' => 1,
                'redirect_url'   => $data,
                'msg'=> trans('Successfully generate'),
            ]);
        }

        public function getDownloadCsv($nameFile) {
            $path = public_path('assets/vcard');
            return response()->download($path.'/'.$nameFile);
        }

}
