<?php
namespace App\Http\Controllers\User;
use App\Models\Connection;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

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
        $data = DB::table('connects')->orderBy('id','desc')
        ->where('user_id',Auth::user()->id);

        if($request->search){
            $search = $request->search;
            $search = explode(' ',$search);
            if($search){
                foreach ($search as $key => $value) {
                    $data->where("name", "like", "%$value%");
                }
            }
        }

        $data = $data->paginate(10);
        return view('user.connections.index', compact('data'));
    }

    public function getConnectionDetails(Request $request,$email,$id)
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
        ->select('connects.*','users.profile_image')
        ->where('connects.id',$id)
        ->leftJoin('users','users.id','=','connects.user_id')
        ->first();

        return view('user.connections.edit', compact('row'));
    }
    public function getDownloadVcf(Request $request,$id)
    {
        $photo = '';
        $business_card = BusinessCard::query()->where('card_id', $id)->first();
            $vcard = new VCard();
                if(!empty($card->card_url)){
                    $vcard_url = URL::to('/') . "/" . $card->card_url;
                    $vcard->addURL($vcard_url);
                }
                // define variables
                if(!empty($card->title2)){
                    $lastname = $card->title2;
                }else{
                    $lastname = '';
                }
                $firstname = $card->title;
                $additional = '';
                $prefix = '';
                $suffix = '';
                $tel = $card->ccode . $card->phone_number;
                $url = $card->company_websitelink;
                $company = $card->company_name;
                $whatsapp = '';
                $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
                $vcard->addEmail($card->card_email ?? Auth::user()->email);
                if(!empty($card->bio)){
                $vcard->addNote($card->bio);
                }
                if(!empty($tel)){
                    $vcard->addPhoneNumber($tel,'HOME');
                }
                if($card->designation){
                    $vcard->addRole($card->designation);
                    $vcard->addJobtitle($card->designation);
                }
                if(!empty($company)){
                    $vcard->addCompany($company);
                }
                if(!empty($card->dob))
                {
                    $vcard->addBirthday ($card->dob);
                }

                if(!empty($card->logo)){
                    $logo = str_replace(' ', '%20', public_path($card->logo));
                    $vcard->addLogo($logo);
                }
                if(!empty($card->profile)){
                    $profile = str_replace(' ', '%20', public_path($card->profile));
                    $vcard->addPhoto($profile);
                }
                if(!empty($contacts) && count($contacts) > 0){
                    foreach ($contacts as $key => $contact) {

                        if ($contact->type=='link'){
                            $vcard->addURL ($contact->content,$contact->label);
                        }
                        elseif ($contact->type=='email'){
                            $vcard->addEmail ( $contact->content,$contact->label);
                        }elseif ($contact->type=='phone'){
                            $vcard->addPhoneNumber($contact->content,$contact->label);
                        }
                        elseif ($contact->type=='address'){
                            $vcard->addAddress($contact->content,$contact->label);
                        }
                        elseif ($contact->type=='date'){
                            $vcard->addBirthday ($contact->content);
                        }
                        else{
                            $vcard->addURL($contact->content,$contact->label);
                        }
                    }




            return Response::make($vcard->getOutput(), 200, $vcard->getHeaders(true));
        }
    }



    public function putUpdate(Request $request,$id)
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

}
