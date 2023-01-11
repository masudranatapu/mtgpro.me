<?php
namespace App\Http\Controllers;
use Str;
use QrCode;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\User;
use App\Models\Review;
use App\Models\Currency;
use App\Mail\ConnectMail;
use App\Mail\SendContact;
use App\Models\SocialIcon;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ConnectRequest;
use Illuminate\Support\Facades\Response;


class HomeController extends Controller
{
    private $filename;

    public function __construct()
    {

        $this->settings = getSetting();
    }

    public function getIndex()
    {
        $data = [];
        $plans = Plan::where('status',1)->get();
        $currency = Currency::where('is_default', 1)->first();
        $faqs = Faq::orderBy('order_id', 'DESC')->get();
        $reviews = Review::where('status', 1)->orderBy('order_id', 'DESC')->get();
        $home_page = DB::table('pages')->where('page_name','home')->get();

        // dd($home_page);
        $home_data = [];
        if($home_page){
            foreach ($home_page as $key => $value) {
                $home_data[$value->section_name][$value->section_title] = $value->section_content;
            }
        }

        return view('index',compact('plans','currency', 'faqs', 'reviews','home_data'));
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
            $data['email']         = trim($request->email);
            $data['phone']         = $request->phone;
            $data['title']         = $request->title;
            $data['company_name']  = $request->company_name;
            $data['message']       = $request->message;
            $find_user = DB::table('users')->where('email',$request->email)->first();
            $card = BusinessCard::findOrFail($request->card_id);

            if(Auth::user() && $card->user_id == Auth::user()->id){
                // Toastr::error(trans('Not possible to send message to your card !'), 'Error', ["positionClass" => "toast-top-right"]);
                // return redirect()->back();
                return response()->json([
                    'status' => 0,
                    'msg'=> trans('Not possible to send message to your card !')
                ]);
            }elseif (!empty(Auth::user())) {
                $data['connect_user_id'] = Auth::user()->id;
                $data['profile_image']   = Auth::user()->profile_image;
            }elseif (!empty($find_user)) {
                $data['connect_user_id'] = $find_user->id;
                $data['profile_image']   = $find_user->profile_image;
            }else{
                $data['connect_user_id'] = NULL;
            }
            $data['card_id'] = $card->id;
            $data['created_at']  =date("Y-m-d H:i:s");
            $data['user_id'] = $card->user_id;
            $connect = DB::table('connects')->insert($data);
            $data['card_id'] = $card->card_id;
        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollback();

            // Toastr::error(trans('Something wrong ! please try again'), 'Error', ["positionClass" => "toast-top-right"]);
            // return redirect()->back();
            return response()->json([
                'status' => 0,
                'msg'=> trans('Something wrong ! please try again')
            ]);
        }
        DB::commit();
        if ($connect) {
            Mail::to($card->card_email)->send(new ConnectMail($data));
        }
        // Toastr::success(trans('Connection send successfully'), 'Success', ["positionClass" => "toast-top-right"]);
        // return redirect()->back();
        return response()->json([
            'status' => 1,
            'msg'=> trans('Connection send successfully')
        ]);

    }


    public function getPreview($cardurl)
    {
        if(!checkPackage()){
            return redirect()->route('user.plans');
        }
        $cardinfo = BusinessCard::with('business_card_fields')->select('business_cards.*','plans.plan_name','plans.hide_branding')
        ->where('card_url', $cardurl)
        ->leftJoin('users','users.id','business_cards.user_id')
        ->leftJoin('plans','plans.id','users.plan_id')
        ->first();

        if($cardinfo){
            DB::table('business_cards')->where('id',$cardinfo->id)->increment('total_hit', 1);
            $user = User::find($cardinfo->user_id);


            // dd(DB::table('business_cards')->where('id',$cardinfo->id)->increment('total_hit', 1));
            // $icons = SocialIcon::orderBy('order_id','desc')->get();
            $url = url($cardinfo->card_url);
            if($cardinfo->status == 0){
                Toastr::warning('This card is not active now');
                return redirect()->back();
            }
            if($cardinfo->status == 2){
                Toastr::warning('This card has been deleted');
                return redirect()->back();
            }
            // $carddetails = DB::table('business_fields')
            // ->select('business_fields.*')
            // // ->leftJoin('social_icon','social_icon.id','=','business_fields.icon_id')
            // ->where('business_fields.card_id', $cardinfo->id)
            // ->where('business_fields.status',1)
            // ->orderBy('business_fields.position','ASC')
            // ->get();

            return view('card_preview', compact('cardinfo','user'));
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
                'business_cards.bio',
                'users.dob'
                )
                ->where('business_cards.card_id', $id)
                ->leftJoin('users', 'business_cards.user_id', '=', 'users.id')
                ->first();
            $contacts = DB::table('business_fields as bf')
            ->select('bf.type','bf.label','bf.icon_image','bf.content','bf.position')
            ->where('bf.card_id',$card->id)
            ->where('bf.status',1)
            ->orderBy('bf.position','ASC')
            ->get();
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

                if(!empty($card->logo) && file_exists(public_path($card->logo))){
                    $logo = str_replace(' ', '%20', public_path($card->logo));
                    $vcard->addLogo($logo);
                }
                if(!empty($card->profile) && file_exists(public_path($card->profile))){
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
                }
                // save vcard on disk
                // $path = public_path('assets/vcard/');
                // $vcard->setSavePath($path);
                // $vcard->save();
                // $file_name =  $vcard->getFilename();
                // $file_extension = $vcard->getFileExtension();
                // $final_name =$file_name.'.'.$file_extension;
                // return response()->json([
                // 'status' => 1,
                // 'file_path' => 'assets/vcard/'.$final_name,
                // 'file_name'=>$final_name
                // ]);
                // return 'assets/vcard/'.$final_name;

                // return Response::download($path, $final_name, $headers);
                // return response()->download($path.$final_name);

            // // 5. return the vcard
            // return $response;

            DB::table('business_cards')->where('card_id',$id)->increment('total_vcf_download', 1);

            return Response::make($vcard->getOutput(), 200, $vcard->getHeaders(true));
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

        if (isFreePlan($data->user_id)) {
            $image = QrCode::format('png')
            ->merge(public_path('assets/img/logo/qrlogo.jpg'), 0.2, true)
            ->size(800)->color(74, 74, 74, 80)->generate(url($data->card_url), $file_path);
        }

        elseif (!empty($data->logo)) {
            $image = QrCode::format('png')
            ->merge(public_path($data->logo), 0.2, true)
            ->size(800)->color(74, 74, 74, 80)->generate(url($data->card_url), $file_path);
        }
        else{
            $image = QrCode::format('png')
            ->size(800)->color(74, 74, 74, 80)
            ->generate(url($data->card_url), $file_path);
        }

        DB::table('business_cards')->where('card_id',$id)->increment('total_qr_download', 1);

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
        Toastr::success(trans('Card send successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
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
        Toastr::success(trans('Message Successfully Send!'), 'Success', ["positionClass" => "toast-top-center"]);
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
        Toastr::success(trans('You have successfully subscribed!'), 'Success', ["positionClass" => "toast-top-center"]);
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
