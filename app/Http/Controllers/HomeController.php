<?php

namespace App\Http\Controllers;

use illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\senderData;
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
use App\Mail\AllMail;
use App\Mail\SendCard;
use App\Models\Config;
use App\Models\EmailTemplate;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    private $filename;
    private $settings;
    private $user;
    public function __construct(
        User $user
    ) {
        $this->user = $user;
        $this->settings = getSetting();
    }

    public function getIndex()
    {
        $data = [];
        $plans = Plan::where('status', 1)->get();
        $currency = Currency::where('is_default', 1)->first();
        $faqs = Faq::orderBy('order_id', 'DESC')->get();
        $reviews = Review::where('status', 1)->orderBy('order_id', 'DESC')->get();
        $home_page = DB::table('pages')->where('page_name', 'home')->get();

        // dd($home_page);
        $home_data = [];
        if ($home_page) {
            foreach ($home_page as $key => $value) {
                $home_data[$value->section_name][$value->section_title] = $value->section_content;
            }
        }

        return view('index', compact('plans', 'currency', 'faqs', 'reviews', 'home_data'));
    }


    public function getPrivacyPolicy()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'privacy-policy')->first();
        return view('pages.common', compact('page'));
    }

    public function getDisclaimer()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'disclaimer')->first();
        return view('pages.common', compact('page'));
    }

    public function getTermsCondition()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'terms-and-conditions')->first();
        return view('pages.common', compact('page'));
    }

    public function getConnect(ConnectRequest $request)
    {
        DB::beginTransaction();
        try {
            $data['name']         = $request->name;
            $data['email']         = trim($request->email);
            $data['phone']         = $request->phone;
            $data['title']         = $request->title;
            $data['company_name']  = $request->company_name;
            $data['message']       = $request->message;
            $find_user = DB::table('users')->where('email', $request->email)->first();
            $card = BusinessCard::findOrFail($request->card_id);

            if (Auth::user() && $card->user_id == Auth::user()->id) {
                // Toastr::error(trans('Not possible to send message to your card !'), 'Error', ["positionClass" => "toast-top-right"]);
                // return redirect()->back();
                return response()->json([
                    'status' => 0,
                    'msg' => trans('Not possible to send message to your card !')
                ]);
            } elseif (!empty(Auth::user())) {
                $data['connect_user_id'] = Auth::user()->id;
                $data['profile_image']   = Auth::user()->profile_image;
            } elseif (!empty($find_user)) {
                $data['connect_user_id'] = $find_user->id;
                $data['profile_image']   = $find_user->profile_image;
            } else {
                $data['connect_user_id'] = NULL;
            }
            $data['card_id'] = $card->id;
            $data['created_at']  = date("Y/m/d H:i:s");
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
                'msg' => trans('Something wrong ! please try again')
            ]);
        }
        $user = DB::table('users')->where('id', $card->user_id)->first();
        // DB::commit();
        if (!empty($connect) && $user->is_notify == 1) {
            // Mail::to($card->card_email)->send(new ConnectMail($data));
            [$message, $subject] = $this->getConnectMail($card, $request->all());
            Mail::to($card->card_email)->send(new AllMail($message, $subject));

            [$message, $subject] = $this->getConnectMailCC($request->all());
            Mail::to($card->card_email)->send(new AllMail($message, $subject));
        }
        // Toastr::success(trans('Connection send successfully'), 'Success', ["positionClass" => "toast-top-right"]);
        // return redirect()->back();
        return response()->json([
            'status' => 1,
            'msg' => trans('Connection send successfully')
        ]);
    }


    public function getPreview($cardurl)
    {
        $user = DB::table('users')->where('username', $cardurl)->first();

        if ($user == null) {
            $cardinfo = BusinessCard::select('business_cards.*', 'plans.plan_name', 'plans.hide_branding', 'users.connection_title')
                ->where('business_cards.card_url', $cardurl)
                ->leftJoin('users', 'users.id', 'business_cards.user_id')
                ->leftJoin('plans', 'plans.id', 'users.plan_id')
                ->first();
            if ($cardinfo == null) {
                return redirect()->route('user.card.create');
            }
        } else {
            //by username
            $cardinfo = BusinessCard::select('business_cards.*', 'plans.plan_name', 'plans.hide_branding', 'users.connection_title')
                ->where('business_cards.id', $user->active_card_id)
                ->leftJoin('users', 'users.id', 'business_cards.user_id')
                ->leftJoin('plans', 'plans.id', 'users.plan_id')
                ->first();

            $location                   = $this->user->getLocation();

            // dd($location);

            //browsing history
            if ($cardinfo) {
                $brwInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']));

                // dd($_SERVER['HTTP_USER_AGENT']);
                $new_history['ip_address'] = $_SERVER['REMOTE_ADDR'];
                $new_history['user_agent'] = $this->user->getBrowser();
                // dd($location->timezone);
                if ($brwInfo) {

                    $new_history['city']            = $brwInfo['geoplugin_city'];
                    $new_history['region']          = $brwInfo['geoplugin_region'];
                    $new_history['region_code']     = $brwInfo['geoplugin_regionCode'];
                    $new_history['region_name']     = $brwInfo['geoplugin_regionName'];
                    $new_history['area_code']       = $brwInfo['geoplugin_areaCode'];
                    $new_history['country_code']    = $brwInfo['geoplugin_countryCode'];
                    $new_history['country_name']    = $brwInfo['geoplugin_countryName'];
                    $new_history['continent_name']  = $brwInfo['geoplugin_continentName'];
                    $new_history['timezone']        = $brwInfo['geoplugin_timezone'];
                    $new_history['created_at']      = date('Y-m-d H:i:s');
                }
                $new_history['card_id'] = $cardinfo->id;
                if (Auth::guard('web')->user()) {
                    $new_history['name']        = Auth::guard('web')->user()->name;
                    $new_history['email']       = Auth::guard('web')->user()->email;
                    $new_history['mobile']      = Auth::guard('web')->user()->mobile;
                    $new_history['username']    = Auth::guard('web')->user()->username;
                }

                $history = DB::table('history_card_browsing')
                    ->select('id', 'counter')
                    ->where(['card_id' => $cardinfo->id, 'ip_address' => $_SERVER['REMOTE_ADDR']])
                    ->first();

                if ($history) {
                    $counter = $history->counter + 1;
                    DB::table('history_card_browsing')->where('id', $history->id)->update(
                        [
                            'counter' => $counter,
                            'modified_at' => date('Y-m-d H:i:s')
                        ]
                    );
                } else {
                    DB::table('history_card_browsing')->insert($new_history);
                }
            }
            //end browsing history

        }

        if ($cardinfo) {

            // if(checkPackageValidity($cardinfo->user_id) == false){

            //     dd(checkPackageValidity($cardinfo->user_id));

            // }
            $cardinfo->contacts = DB::table('business_fields')
                ->leftJoin('social_icon as si', 'si.id', '=', 'business_fields.icon_id')
                ->select('business_fields.*', 'si.icon_title', 'si.icon_name', 'si.icon_color', 'si.main_link', 'si.is_paid')
                ->where('business_fields.card_id', $cardinfo->id)
                ->where('business_fields.status', 1)
                ->orderBy('business_fields.position', 'ASC')
                ->get();




            $user = User::find($cardinfo->user_id);
            $url = url($cardinfo->card_url);
            if (Auth::user() && ($cardinfo->user_id == Auth::id())) {
            } else {
                // if($cardinfo->status == 0){
                //     Toastr::warning('This card is not active now');
                //     return redirect()->route('home');
                // }
                if ($cardinfo->status == 2) {
                    Toastr::warning('This card is not available');
                    return redirect()->route('home');
                }
            }
            return view('card_preview', compact('cardinfo', 'user'));
        } else {

            Toastr::warning('This card is not available please create your desired card');
            return redirect()->route('user.card.create');
        }
    }


    public function getPage($slug)
    {
        $data = DB::table('custom_pages')->where('url_slug', $slug)->first();
        if (empty($data)) {
            abort(404);
        }
        return view('pages.index', compact('data'));
    }

    public function downloadVcard(Request $request, $id)
    {
        $photo = '';
        $business_card = BusinessCard::query()->where('card_id', $id)->first();
        if ($business_card == null) {
            return view('errors.404');
        } else {
            $card = DB::table('business_cards')->select(
                'business_cards.id',
                'business_cards.profile',
                'business_cards.card_url',
                'business_cards.title',
                'business_cards.title2',
                'business_cards.sub_title',
                'business_cards.description',
                'business_cards.company_name',
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
                ->select('bf.type', 'bf.label', 'bf.icon_image', 'bf.content', 'bf.position')
                ->where('bf.card_id', $card->id)
                ->where('bf.status', 1)
                ->orderBy('bf.position', 'ASC')
                ->get();
            $vcard = new VCard();
            if (!empty($card->card_url)) {
                $vcard_url = URL::to($card->card_url);
                $vcard->addURL($vcard_url);
            }
            // define variables
            if (!empty($card->title2)) {
                $lastname = $card->title2;
            } else {
                $lastname = '';
            }
            $firstname = $card->title;
            $additional = '';
            $prefix = '';
            $suffix = '';
            $url = $card->company_websitelink;
            $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
            $vcard->addEmail($card->card_email ?? Auth::user()->email);

            if (!empty($card->bio)) {
                $vcard->addNote($card->bio);
            }
            if (!empty($card->phone_number)) {
                $vcard->addPhoneNumber($card->phone_number, 'HOME');
            }

            if ($card->designation) {
                $vcard->addRole($card->designation);
                $vcard->addJobtitle($card->designation);
            }
            if (!empty($card->company_name)) {
                $vcard->addCompany($card->company_name);
            }
            if (!empty($card->dob)) {
                $vcard->addBirthday($card->dob);
            }

            if (!empty($card->profile) && file_exists(public_path($card->profile))) {
                $profile = str_replace(' ', '%20', public_path($card->profile));
                $vcard->addPhoto($profile);
            }
            // if(!empty($card->logo) && file_exists(public_path($card->logo))){
            //     $logo = str_replace(' ', '%20', public_path($card->logo));
            //     $vcard->addLogo($logo);
            // }

            if (!empty($contacts) && count($contacts) > 0) {
                //link,mail,mobile,number,text,username,file,address,app
                foreach ($contacts as $key => $contact) {
                    if ($contact->type == 'link') {
                        $vcard->addURL($contact->content, $contact->label);
                    } elseif ($contact->type == 'mail') {
                        $vcard->addEmail($contact->content, $contact->label);
                    } elseif ($contact->type == 'mobile') {
                        $vcard->addPhoneNumber($contact->content, $contact->label);
                    } elseif ($contact->type == 'number') {
                        $vcard->addPhoneNumber($contact->content, $contact->label);
                    } elseif ($contact->type == 'address') {
                        $vcard->addAddress($contact->content, $contact->label);
                    } elseif ($contact->type == 'date') {
                        $vcard->addBirthday($contact->content);
                    } elseif ($contact->type == 'username') {
                        $vcard->addURL($contact->content, $contact->label);
                    } else {
                    }
                }
            }



            //browsing history
            if ($vcard) {
                $brwInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']));
                $new_history['ip_address'] = $_SERVER['REMOTE_ADDR'];
                $new_history['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

                if ($brwInfo) {
                    $new_history['city']            = $brwInfo['geoplugin_city'];
                    $new_history['region']          = $brwInfo['geoplugin_region'];
                    $new_history['region_code']     = $brwInfo['geoplugin_regionCode'];
                    $new_history['region_name']     = $brwInfo['geoplugin_regionName'];
                    $new_history['area_code']       = $brwInfo['geoplugin_areaCode'];
                    $new_history['country_code']    = $brwInfo['geoplugin_countryCode'];
                    $new_history['country_name']    = $brwInfo['geoplugin_countryName'];
                    $new_history['continent_name']  = $brwInfo['geoplugin_continentName'];
                    $new_history['timezone']        = $brwInfo['geoplugin_timezone'];
                    $new_history['created_at']      = $brwInfo['geoplugin_timezone'];
                }
                $new_history['card_id'] = $card->id;
                if (Auth::guard('web')->user()) {
                    $new_history['name']        = Auth::guard('web')->user()->name;
                    $new_history['email']       = Auth::guard('web')->user()->email;
                    $new_history['mobile']      = Auth::guard('web')->user()->mobile;
                    $new_history['username']    = Auth::guard('web')->user()->username;
                }

                $history = DB::table('history_card_downloads')
                    ->select('id', 'counter')
                    ->where(['card_id' => $card->id, 'ip_address' => $_SERVER['REMOTE_ADDR']])
                    ->first();

                if ($history) {
                    $counter = $history->counter + 1;
                    DB::table('history_card_downloads')->where('id', $history->id)->update(['counter' => $counter]);
                } else {
                    DB::table('history_card_downloads')->insert($new_history);
                }
            }
            //end browsing history

            // DB::table('business_cards')->where('card_id', $id)->increment('total_vcf_download', 1);
            return Response::make($vcard->getOutput(), 200, $vcard->getHeaders(true));
        }
    }

    public function getQRImage($id)
    {
        $data = BusinessCard::where('card_id', $id)->first();

        $user_plan = getPlan($data->user_id);
        if (empty($data)) {
            abort(404);
        }
        $qr_name = $data->title . '_' . $data->title2 . '_qr_';
        $base_name = preg_replace('/\..+$/', '', $qr_name);
        $base_name = explode(' ', $base_name);
        $base_name = implode('_', $base_name);
        $base_name = Str::lower($base_name);
        $file_name = $base_name . uniqid() . "." . 'png';
        $path = public_path('assets/uploads/qr-code/');
        $file_path = $path . $file_name;

        if ($data->user->active_card_id == $data->id) {
            $card_url = $data->user->username;
        } else {
            $card_url = $data->card_url;
        }

        if (isFreePlan($data->user_id)) {
            $image = QrCode::format('png')
                ->merge(public_path('assets/img/logo/qrlogo.jpg'), 0.2, true)
                ->size(800)->color(74, 74, 74, 80)->generate(url($card_url), $file_path);
        } elseif (!empty($data->logo)  && $user_plan->is_qr_code == 1) {
            $image = QrCode::format('png')
                ->merge(public_path($data->logo), 0.2, true)
                ->size(800)->color(74, 74, 74, 80)->generate(url($card_url), $file_path);
        } else {
            $image = QrCode::format('png')
                ->size(800)->color(74, 74, 74, 80)
                ->generate(url($card_url), $file_path);
        }

        // DB::table('business_cards')->where('card_id', $id)->increment('total_qr_download', 1);


        //browsing history
        if ($data) {
            $brwInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']));
            $new_history['ip_address'] = $_SERVER['REMOTE_ADDR'];
            $new_history['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

            if ($brwInfo) {
                $new_history['city']            = $brwInfo['geoplugin_city'];
                $new_history['region']          = $brwInfo['geoplugin_region'];
                $new_history['region_code']     = $brwInfo['geoplugin_regionCode'];
                $new_history['region_name']     = $brwInfo['geoplugin_regionName'];
                $new_history['area_code']       = $brwInfo['geoplugin_areaCode'];
                $new_history['country_code']    = $brwInfo['geoplugin_countryCode'];
                $new_history['country_name']    = $brwInfo['geoplugin_countryName'];
                $new_history['continent_name']  = $brwInfo['geoplugin_continentName'];
                $new_history['timezone']        = $brwInfo['geoplugin_timezone'];
                $new_history['created_at']      = $brwInfo['geoplugin_timezone'];
            }
            $new_history['card_id'] = $data->id;
            if (Auth::guard('web')->user()) {
                $new_history['name']        = Auth::guard('web')->user()->name;
                $new_history['email']       = Auth::guard('web')->user()->email;
                $new_history['mobile']      = Auth::guard('web')->user()->mobile;
                $new_history['username']    = Auth::guard('web')->user()->username;
            }

            $history = DB::table('history_qr_downloads')
                ->select('id', 'counter')
                ->where(['card_id' => $data->id, 'ip_address' => $_SERVER['REMOTE_ADDR']])
                ->first();

            if ($history) {
                $counter = $history->counter + 1;
                DB::table('history_qr_downloads')->where('id', $history->id)->update(['counter' => $counter]);
            } else {
                DB::table('history_qr_downloads')->insert($new_history);
            }
        }
        //end browsing history

        return Response::download($file_path);
    }


    public function sendCardMail(Request $request, $id)
    {
        $card = BusinessCard::where('id', $id)->first();
        $card_url = url($card->card_url);
        $name = $request->name ?? $card->title . ' ' . $card->title2;
        $comment = $request->comment ?? '';
        Mail::to($request->email)->send(new SendCard($card_url, $name, $comment));
        if ($request->ajax()) {
            return response()->json(['status' => 1, 'message' => 'Card send successfully!'], 200);
        }
        Toastr::success(trans('Card send successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function contactUs(Request $request)
    {
        $data               = [];
        $data['name']       = $request->name;
        $data['email']      = $request->email;
        $data['phone_no']   = $request->phone_no;
        $data['subject']    = $request->subject;
        $data['your_message'] = $request->your_message;
        Mail::to($this->settings->support_email)->send(new SendContact($data));
        Toastr::success(trans('Thank you for your feedback'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }


    /*

    public function subscribe(Request $request)
    {
        $data               = [];
        $data['email']      = $request->email;
        DB::table('subscribers')->insert([
            'email' => $request->email,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        Mail::to($this->settings->address)->send(new SendContact($data));
        Toastr::success(trans('You have successfully subscribed!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    */

    public function getBlog()
    {
        return view('pages.blog');
    }

    public function getBlogDetails()
    {
        return view('pages.blog_details');
    }


    public function rss()
    {
        return response()->view('rss.index')->header('Content-Type', 'application/xml');
    }

    public function getAboutUs()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'about')->first();
        return view('pages.common', compact('page'));
    }

    public function getContact()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'contact-us')->first();
        return view('pages.common', compact('page'));
    }

    public function getdDataDeletion()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'data-deletion-instructions')->first();

        return view('pages.common', compact('page'));
    }

    public function getHelp()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'help')->first();

        return view('pages.common', compact('page'));
    }

    public function getTutorials()
    {
        $page = DB::table('custom_pages')->where('url_slug', 'tutorials')->first();

        return view('pages.common', compact('page'));
    }


    public function getPricing()
    {
        $plans = DB::table('plans')->where('status', 1)->get();
        $currency = Currency::where('is_default', 1)->first();

        return view('pages.plans', compact('plans', 'currency'));
    }


    public function shopPage()
    {
        $products = Product::paginate(12);

        return view('shop.index', compact('products'));
    }

    public function shopDetails(Product $product)
    {
        $product->load('hasImages');
        return view('shop.details', compact('product'));
    }




    public function getConnectMail($owner, $senderData)
    {


        $mailMesssage = EmailTemplate::where('slug', 'contact-query-mail-to-card-owner')->first();
        $mailcontent =     $mailMesssage->body;


        if (isset($owner)) {
            $user = User::find($owner->user_id);
            $mailcontent = preg_replace("/{{owner}}/", $user->name, $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{name}}/", $senderData['name'], $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{email}}/", $senderData['email'], $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{phone}}/", $senderData['phone'], $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{title}}/", $senderData['title'], $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{company_name}}/", $senderData['company_name'], $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{message}}/", $senderData['message'], $mailcontent);
        }
        return [$mailcontent, $mailMesssage->subject];
    }

    public function getConnectMailCC($senderData)
    {
        $mailMesssage = EmailTemplate::where('slug', 'send-connect-to-visitors-cc-subscriber')->first();
        $mailcontent =     $mailMesssage->body;
        $setting = Config::first();




        if ($senderData) {
            $mailcontent = preg_replace("/{{user_name}}/", $senderData['name'], $mailcontent);
        }

        if ($senderData) {
            $mailcontent = preg_replace("/{{site_title}}/", $setting->config_value, $mailcontent);
        }

        return [$mailcontent, $mailMesssage->subject];
    }
}
