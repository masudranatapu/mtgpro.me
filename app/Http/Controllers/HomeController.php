<?php
namespace App\Http\Controllers;

use Share;
use App\Mail\ConnectMail;
use App\Mail\SendContact;
use App\Models\SocialIcon;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ConnectRequest;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function getIndex()
    {
        return view('index');
    }

    public function getPrivacyPolicy()
    {
        $page = DB::table('custom_pages')->where('url_slug','privacy-policy')->first();
        return view('pages.common',compact('page'));
    }

    public function getTermsCondition()
    {
        $page = DB::table('custom_pages')->where('url_slug','terms-and-conditions')->first();
        return view('pages.common',compact('page'));
    }

    public function getConnect(ConnectRequest $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $data['name' ]         = $request->name;
            // $data['title']      = $request->title;
            $data['email']         = $request->email;
            $data['phone']         = $request->phone;
            $data['title']         = $request->job_title;
            $data['company_name']  = $request->company;
            $data['message']       = $request->note;
            $card = BusinessCard::where('id', $request->card_id)->first();
            // if(Auth::user()){
            //     $user_id =  Auth::id();
            //     if($card->user_id == $user_id){
            //         Toastr::error('Not possible to send message to your card');
            //         return redirect()->back();
            //     }
            // }
            $data['card_id'] = $card->id;
            $data['user_id'] = $card->user_id;
            $connect = DB::table('connects')->insert($data);
            $data['card_id'] = $card->card_id;
        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollback();
            Toastr::error('Something wrong ! please try again');
            return redirect()->back();
        }
        DB::commit();
        if ($connect) {
            Mail::to($card->card_email)->send(new ConnectMail($data));
        }
        Toastr::success('Connection send successfully');
        return redirect()->back();

    }


    public function getPreview($cardurl)
    {
        $cardinfo = BusinessCard::select('business_cards.*','plans.plan_name','plans.hide_branding')->where('card_url', $cardurl)
        ->leftJoin('users','users.id','business_cards.user_id')
        ->leftJoin('plans','plans.id','users.plan_id')
        ->first();
        if($cardinfo){
            $icons = SocialIcon::orderBy('order_id','desc')->get();
            $url = url($cardinfo->card_url);
            $shareComponent = Share::page($url,'Hello! This is my vCard.',)->facebook()->twitter()->linkedin()->telegram()->whatsapp();
            // dd($shareComponent);
            if($cardinfo->status == 0){
                Toastr::warning('This card is not active now');
                return redirect()->back();
            }
            if($cardinfo->status == 2){
                Toastr::warning('This card has been deleted');
                return redirect()->back();
            }
            $carddetails = DB::table('business_fields')
            ->select('business_fields.*')
            // ->leftJoin('social_icon','social_icon.id','=','business_fields.icon_id')
            ->where('business_fields.card_id', $cardinfo->id)
            ->where('business_fields.status',1)->orderBy('business_fields.position','ASC')->get();
            return view('card_preview', compact('cardinfo', 'icons', 'shareComponent','carddetails'));
        }else{

            Toastr::warning('This card is not available please create your desired card');
            return redirect()->route('user.card.create');
        }
    }


    public function getPage($slug){
       $data = DB::table('custom_pages')->where('url_slug',$slug)->first();
       if(empty($data)){
        abort(404);
       }
        return view('pages.index',compact('data'));
    }

    public function downloadVcard(Request $request, $id)
    {
        $photo = '';
        $business_card = BusinessCard::query()->where('card_id', $id)->first();
        if ($business_card == null) {
            return view('errors.404');
        } else {
            $card = DB::table('business_cards')->select(
                'business_cards.id','business_cards.profile',
                'business_cards.card_url','business_cards.title',
                'business_cards.title2','business_cards.sub_title',
                'business_cards.description','business_cards.company_name',
                'business_cards.company_websitelink',
                'business_cards.ccode',
                'business_cards.phone_number',
                'business_cards.card_email',
                'business_cards.logo',
                'business_cards.designation',
                'business_fields.content',
                'users.dob'
                )
                ->where('business_cards.card_id', $id)
                ->leftJoin('users', 'business_cards.user_id', '=', 'users.id')
                ->leftJoin('business_fields','business_cards.id','=','business_fields.card_id')
                ->first();
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
                $email = $card->card_email;
                $tel = $card->ccode . $card->phone_number;
                $url = $card->company_websitelink;
                $company = $card->company_name;
                $designation = $card->designation;
                $whatsapp = '';
                // add personal data
                $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
                $vcard->addEmail($email);
                if(!empty($tel)){
                    $vcard->addPhoneNumber($tel,'HOME');
                }
                if(!empty($company)){
                    $vcard->addCompany($company);
                }
                if(!empty($card->dob))
                {
                    $vcard->addBirthday ($card->dob);
                }
                if($card->designation){
                    $vcard->addRole($card->designation);
                    $vcard->addJobtitle($card->designation);
                }
                if(!empty($card->logo)){
                    $logo = str_replace(' ', '%20', public_path($card->logo));
                    $vcard->addLogo($logo);
                }
                if(!empty($card->profile)){
                    $profile = str_replace(' ', '%20', public_path($card->profile));
                    $vcard->addPhoto($profile);
                }
                if(isset($card->content)){
                    $card_fields = $card->content;
                    $arr_card_fields = json_decode($card_fields,true);
                    // dd($arr_card_fields);
                    if(isset($arr_card_fields['facebook'])){
                        $vcard->addURL ($arr_card_fields['facebook'][0],'Facebook');
                    }
                    if(isset($arr_card_fields['twitter'])){
                        $vcard->addURL ($arr_card_fields['twitter'][0],'Twitter');
                    }
                    if(isset($arr_card_fields['linkedin'])){
                        $vcard->addURL ($arr_card_fields['linkedin'][0],'Linkedin');
                    }
                    if(isset($arr_card_fields['pinterest'])){
                        $vcard->addURL ($arr_card_fields['pinterest'][0],'Pinterest');
                    }
                    if(isset($arr_card_fields['whatsapp'])){
                        $vcard->addPhoneNumber($arr_card_fields['whatsapp'][0], 'Whatsapp');
                    }
                    if(isset($arr_card_fields['instagram'])){
                        $vcard->addURL($arr_card_fields['instagram'][0], 'Instagram');
                    }
                    if(isset($arr_card_fields['phone'])){
                        $vcard->addPhoneNumber($arr_card_fields['phone'][0], 'Phone');
                    }
                    if(isset($arr_card_fields['address'])){
                        $vcard->addAddress($arr_card_fields['address'][0]);
                    }
                    if(isset($arr_card_fields['text'])){
                        $vcard->addPhoneNumber($arr_card_fields['text'][0]);
                    }
                }
                $vcard->addURL (URL::to('/'),'Created With '.$this->settings->site_name);
                $vcard->addURL ($url,$this->settings->site_name.' URL');
            // $vcard->addLabel('street, worktown, workpostcode Belgium');

            return Response::make($vcard->getOutput(), 200, $vcard->getHeaders(true));
            // return $vcard->download();
        }
    }

    public function getQRImage($id)
    {
        $data = BusinessCard::where('card_id', $id)->first();
        if(empty($data)){
            abort(404);
        }
        $qr_name = $data->title.'_'.$data->title2.'_qr_';
        $base_name = preg_replace('/\..+$/', '', $qr_name);
        $base_name = explode(' ',$base_name);
        $base_name = implode('_',$base_name);
        $base_name = Str::lower($base_name);
        $file_name = $base_name.uniqid().".".'png';
        $path = public_path('assets/uploads/qr-code/');
        $file_path = $path.$file_name;
        $image = \QrCode::format('png')
        ->merge(public_path('assets/img/logo/qrlogo.png'), 0.2, true)
        ->size(800)->color(74, 74, 74, 80)->generate(url($data->card_url), $file_path);
        return Response::download($file_path);
    }


    public function sendCardMail(Request $request, $id)
    {
        $card = BusinessCard::where('id', $id)->first();
        $card_url = url($card->card_url);
        $name = $request->name ?? $card->title . ' ' . $card->title2;
        $comment = $request->comment ?? '';
        Mail::to($request->email)->send(new SendCard($card_url, $name, $comment));
        if($request->ajax()){
            return response()->json(['status'=> 1,'message' => 'Card send successfully!'], 200);
        }
        Toastr::success(trans('Card send successfully!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();

    }


    public function postContact(Request $request){
        $data               = [];
        $data['name']       = $request->name;
        $data['email']      = $request->email;
        $data['phone_no']   = $request->phone_no;
        $data['subject']    = $request->subject;
        $data['your_message'] = $request->your_message;
        Mail::to($this->settings->support_email)->send(new SendContact($data));
        Toastr::success(trans('Message Successfully Send!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function subscribe(Request $request){
        $data               = [];
        $data['email']      = $request->email;
        DB::table('subscribers')->insert([
            'email'=>$request->email,
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        // Mail::to($this->settings->address)->send(new SendContact($data));
        Toastr::success(trans('You have successfully subscribed!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function getBlog(){


        return view('pages.blog');
    }
    public function getBlogDetails(){


        return view('pages.blog_details');
    }


    public function rss()
    {

    return response()->view('rss.index')->header('Content-Type', 'application/xml');
    }

    public function getAboutUs(){
        $page = DB::table('custom_pages')->where('url_slug','about')->first();
        return view('pages.common',compact('page'));
    }

    public function getContact(){
        $page = DB::table('custom_pages')->where('url_slug','contact-us')->first();
        return view('pages.common',compact('page'));
    }

    public function getdDataDeletion(){
        $page = DB::table('custom_pages')->where('url_slug','data-deletion-instructions')->first();

        return view('pages.common',compact('page'));
    }

    public function getHelp(){
        $page = DB::table('custom_pages')->where('url_slug','help')->first();

        return view('pages.common',compact('page'));
    }

    public function getTutorials(){
        $page = DB::table('custom_pages')->where('url_slug','tutorials')->first();

        return view('pages.common',compact('page'));
    }






}
