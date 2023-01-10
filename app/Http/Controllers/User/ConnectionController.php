<?php
namespace App\Http\Controllers\User;
use App\Models\Connection;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ConnectRequest;
use App\Http\Requests\SendConnectMail;
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
        $data = DB::table('connects')
        ->select('connects.*','users.profile_image as user_image')
        ->orderBy('connects.id','desc')
        ->leftJoin('users','users.id','=','connects.user_id')
        ->where('connects.user_id',Auth::user()->id);

        if($request->search){
            $search = $request->search;
            $search = explode(' ',$search);
            if($search){
                foreach ($search as $key => $value) {
                    $data->where("connects.name", "like", "%$value%");
                }
            }
        }

        $data = $data->paginate(10);
        return view('user.connections.index', compact('data'));
    }

    public function getView(Request $request,$email,$id)
    {
        $row = DB::table('connects')
        ->select('connects.*','users.profile_image')
        ->where('connects.email',$email)->where('connects.id',$id)
        ->leftJoin('users','users.id','=','connects.user_id')
        ->first();

        return view('user.connections.view', compact('row'));
    }
    public function getEdit(Request $request,$id)
    {
        $row = DB::table('connects')
        ->select('connects.*')
        ->where('connects.id',$id)
        ->leftJoin('users','users.id','=','connects.user_id')
        ->first();

        return view('user.connections.edit', compact('row'));
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
        if(!empty($connection->profile_image)){
            $profile_image = str_replace(' ', '%20', public_path($connection->profile_image));
            $vcard->addPhoto($profile_image);
        }
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
                $connection->profile_image  = $image_name;
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


    // public function sendConnectEmail(SendConnectMailRequest $request,$id)
    public function sendConnectEmail(Request $request,$id)
    {
        try {

            // "email" => "midul@gmail.com"
            // "subject" => "asas"
            // "message" => "asas"
            $connection   = Connection::find($id);

        } catch (\Exception $e) {
            dd($e->getMessage());
            Toastr::error('Something wrong! Please try again', 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        Toastr::success('Email successfully sent', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

}
