<?php

namespace App\Http\Controllers\Api;

use App\Helpers\CountryHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConnectRequest;
use App\Http\Requests\SupportMailRequest;
use App\Mail\AllMail;
use App\Mail\CreditReportMail;
use App\Mail\QuickReportMail;
use App\Mail\SupportMail;
use App\Models\BusinessCard;
use App\Models\Currency;
use App\Models\HistoryCardBrowsing;
use App\Models\HistoryCardDownload;
use App\Models\HistoryQrDownload;
use App\Models\Plan;
use App\Models\SocialIcon;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends ResponceController
{

    private $settings;
    private $user;
    protected $plan;
    protected $businessCard;
    public function __construct(
        User $user,
        Plan $plan,
        BusinessCard $businessCard

    ) {
        $this->user = $user;
        $this->plan         = $plan;
        $this->settings = getSetting();
        $this->businessCard  = $businessCard;
    }
    public function getSettings()
    {
        $settings = getSetting();
        return $this->sendResponse(200, "Settings", $settings, true, []);
    }

    public function getSocialIcons()
    {
        $social_icon    = SocialIcon::all();

        return $this->sendResponse(200, 'Social Icons', $social_icon, true, []);
    }

    public function getPreview($cardurl)
    {
        $user = DB::table('users')->where('username', $cardurl)->first();




        if (!isset($user)) {
            $cardinfo = BusinessCard::select('business_cards.*', 'plans.plan_name', 'plans.hide_branding', 'users.connection_title')
                ->where('business_cards.card_url', $cardurl)
                ->leftJoin('users', 'users.id', 'business_cards.user_id')
                ->leftJoin('plans', 'plans.id', 'users.plan_id')
                ->first();
        } else {
            //by username
            $cardinfo = BusinessCard::select('business_cards.*', 'plans.plan_name', 'plans.hide_branding', 'users.connection_title')
                ->where('business_cards.id', $user->active_card_id)
                ->leftJoin('users', 'users.id', 'business_cards.user_id')
                ->leftJoin('plans', 'plans.id', 'users.plan_id')
                ->first();

            $location                   = $this->user->getLocation();



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
                if (Auth::guard('api')->user()) {
                    $new_history['name']        = Auth::guard('api')->user()->name;
                    $new_history['email']       = Auth::guard('api')->user()->email;
                    $new_history['mobile']      = Auth::guard('api')->user()->mobile;
                    $new_history['username']    = Auth::guard('api')->user()->username;
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
            if (Auth::guard('api')->user() && ($cardinfo->user_id == Auth::guard('api')->id())) {

                // if($cardinfo->status == 0){
                //     Toastr::warning('This card is not active now');
                //     return redirect()->route('home');
                // }
                if ($cardinfo->status == 2) {

                    return $this->sendError('Exception Error', 'This card is not available');
                }
            }
            return $this->sendResponse(200, "User Card Revirw", $cardinfo, true, []);
        } else {


            return $this->sendError('Exception Error', 'This card is not available please create your desired card');
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
            if (Auth::guard('api')->user()) {
                $new_history['name']        = Auth::guard('api')->user()->name;
                $new_history['email']       = Auth::guard('api')->user()->email;
                $new_history['mobile']      = Auth::guard('api')->user()->mobile;
                $new_history['username']    = Auth::guard('api')->user()->username;
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

    public function getInsights(Request $request)
    {
        $user_id = Auth::guard('api')->id();
        $userCards = BusinessCard::where('user_id', Auth::guard('api')->id())->pluck('id')->toArray();

        $data = [];
        $data['total_connect'] = DB::table('connects')->where('user_id', $user_id)->count();
        $data['total_card_view'] = HistoryCardBrowsing::with('hasCard')->whereIn('card_id', $userCards)->count();
        $data['total_contact_download'] = HistoryCardDownload::whereIn('card_id', $userCards)->count();
        $data['total_qrcode_download'] = HistoryQrDownload::whereIn('card_id', $userCards)->count();
        $data['total_card'] = DB::table('business_cards')->where('user_id', $user_id)->count();
        $data['current_plan'] = DB::table('users')->select('plans.plan_name')->join('plans', 'users.plan_id', '=', 'plans.id')->where('users.id', Auth::user()->id)->first();

        $total_card_share = 0;

        return $this->sendResponse(200, "User Insights", $data, true, []);
    }
    public function viewHistory()
    {

        $userCards = BusinessCard::where('user_id', Auth::guard('api')->id())->pluck('id')->toArray();
        $histories = HistoryCardBrowsing::with('hasCard')->whereIn('card_id', $userCards)->paginate(10);
        return $this->sendResponse(200, "User Insights View History", $histories, true, []);
    }

    public function downloadHistory()
    {
        $userCards = BusinessCard::where('user_id', Auth::guard('api')->id())->pluck('id')->toArray();
        $histories = HistoryCardDownload::whereIn('card_id', $userCards)->paginate(10);
        return $this->sendResponse(200, "User Insights Download History", $histories, true, []);
    }


    public function qrdownloadHistory()
    {
        $userCards = BusinessCard::where('user_id', Auth::guard('api')->id())->pluck('id')->toArray();
        $histories = HistoryQrDownload::whereIn('card_id', $userCards)->paginate(10);
        return $this->sendResponse(200, "User Insights Qr-Code Download History", $histories, true, []);
    }

    public function sendSupportMail(Request $request)
    {
        $rules = [
            'subject'              => 'required',
            'message'              => 'required',

        ];
        $validate = Validator::make($request->all(), $rules, [
            'subject.required' => 'Please enter your subject',
            'message.required'      => 'Please enter your message'
        ]);

        if ($validate->fails()) {
            return $this->sendError("Validation Error", $validate->errors()->first());
        }


        DB::beginTransaction();
        try {
            $settings =  getSetting();
            $data = [];
            $data['subject'] = $request->subject;
            $data['message'] = $request->message;
            $data['email'] = Auth::guard('api')->user()->email;
            $data['username'] = Auth::guard('api')->user()->name;
            Mail::to($settings->support_email)->send(new SupportMail($data));
        } catch (\Exception $e) {
            DB::rollback();
            return $this->sendError('Exception Error', 'Something wrong! Please try again');
        }
        DB::commit();
        return $this->sendResponse(200, 'Thank you for your feedback', [], true);
    }

    public function planList()
    {

        $getPlans =  $this->plan->where('status', true)->get();

        $plans = null;

        foreach ($getPlans as $plan) {
            $plans[] = [
                "id" => $plan->id,
                "plan_type" => $plan->plan_type,
                "plan_id" => $plan->plan_id,
                "plan_name" => $plan->plan_name,
                "plan_description" => $plan->plan_description,
                "is_free" => $plan->is_free,
                "plan_price_monthly" => $plan->plan_price_monthly,
                "plan_price_yearly" => $plan->plan_price_yearly,
                "plan_price" => $plan->plan_price,
                "discount_percentage" => $plan->discount_percentage,
                "validity" => $plan->validity,
                "no_of_vcards" => $plan->no_of_vcards,
                "no_of_services" => $plan->no_of_services,
                "no_of_galleries" => $plan->no_of_galleries,
                "no_of_features" => $plan->no_of_features,
                "no_of_payments" => $plan->no_of_payments,
                "personalized_link" => $plan->personalized_link,
                "hide_branding" => $plan->hide_branding,
                "free_setup" => $plan->free_setup,
                "free_support" => $plan->free_support,
                "recommended" => $plan->recommended,
                "is_watermark_enabled" => $plan->is_watermark_enabled,
                "features" => (array)json_decode($plan->features, true),
                "plans_type" => $plan->plans_type,
                "name" => $plan->name,
                "slug" => $plan->slug,
                "stripe_plan_id" => $plan->stripe_plan_id,
                "stripe_data" => json_decode(trim($plan->stripe_data), true),
                "stripe_plan_id_yearly" => $plan->stripe_plan_id_yearly,
                "paypal_plan_id" => $plan->paypal_plan_id,
                "paypal_plan_data" => $plan->paypal_plan_data,
                "cost" => $plan->cost,
                "status" => $plan->status,
                "shareable" => $plan->shareable,
                "created_at" => $plan->created_at,
                "updated_at" => $plan->updated_at,
                "is_vcard" => $plan->is_vcard,
                "is_whatsapp_store" => $plan->is_whatsapp_store,
                "is_email_signature" => $plan->is_email_signature,
                "is_qr_code" => $plan->is_qr_code,
                "is_yearly_plan" => $plan->is_yearly_plan,
                "free_marketing_material" => $plan->free_marketing_material,
            ];
        }

        return $this->sendResponse(200, 'ALl Plan', $plans, true, []);
    }

    public function getConnect(Request $request)
    {
        $rules = [
            'card_id'     => 'required|string|max:124',
            'name'        => 'required|string|max:124',
            'email'       => 'required|email|max:150',
            'phone'       => 'required|max:20',
            'title'       => 'nullable|string|max:124',
            'company_name' => 'nullable|string|max:124',
            'message'     => 'required|string|max:1024',
        ];
        $validate = Validator::make($request->all(), $rules);

        if ($validate->fails()) {
            return $this->sendError("Validation Error", $validate->errors()->first());
        }

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
                return $this->sendError("Unknown Card", "Not possible to send message to your card !");
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
            DB::rollback();
            return $this->sendError('Exception Error', 'Something wrong ! please try again');
        }
        $user = DB::table('users')->where('id', $card->user_id)->first();

        if (!empty($connect) && $user->is_notify == 1) {

            [$message, $subject] = $this->getConnectMail($card, $request->all());
            Mail::to($card->card_email)->send(new AllMail($message, $subject));
        }
        return $this->sendResponse(200, 'Something wrong ! please try again', $data, true, []);
    }

    public function clountyList()
    {
        $countries = CountryHelper::CountryCodes();

        return $this->sendResponse(200, "All Country", $countries, true, []);
    }


    public function quickReport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "card_id"               => "required",
            "contact_name"          => "required|max:124|string",
            "contact_email"         => "required|max:124|string",
            "contact_phone"         => "required|max:124|string",
            "purpose"               => "required|max:124|string",
            "price"                 => "required|max:9999999999|integer",
            "down_amount"           => "nullable|max:9999999999|integer",
            "property_type"         => "required|string|max:124",
            "location"              => "required|string|max:512",
            "company"               => "required_if:purpose,Refinance",
            "agent"                 => "required|string|max:1",
            "occupation"            => "required|string|max:512",
            "current_employer"      => "required|string|max:512",
            "annual_income"         => "required|string|max:512",
            "credit_score"          => "required|string|max:512",
            // "contact_infomation"    => "required|string|max:1024",

        ]);

        $discription = [
            'purpose' => [
                'Purchase', 'Refinance'
            ],
            'price' => 'Must be integer',
            'down_amount' => 'Must be integer',
            'property_type' => [
                'Single Family House', '2+ Unit House', 'Conodo / Co-Op'
            ],
            'location' => "Must be string",
            'agent' => 'must be 1 or 0',
            'occupation' => 'must be stringg',
            'credit_score' => 'must be integer',
            'contact_name' => 'must be string',
            'contact_email' => 'must be string',
            'contact_phone' => 'must be string',
        ];


        if ($validator->fails()) {
            return $this->sendError('Validation Error',  $validator->errors()->first(), 200, $discription);
        }


        DB::beginTransaction();
        try {
            $data['name']               = $request->contact_name;
            $data['email']              = trim($request->contact_email);
            $data['phone']              = $request->contact_phone;
            $data['purpose']            = $request->purpose;
            $data['price']              = $request->price;
            $data['down_amount']        = $request->down_amount;
            $data['property_type']      = $request->property_type;
            $data['location']           = $request->location;
            $data['company_name']       = $request->company ?? null;
            $data['agent']              = $request->agent;
            $data['occupation']         = $request->occupation;
            $data['current_employer']   = $request->current_employer;
            $data['annual_income']      = $request->annual_income;
            $data['credit_score']       = $request->credit_score;
            // $data['contact_infomation'] = $request->contact_infomation;
            $data['query_type']         = 3;

            $card = BusinessCard::findOrFail($request->card_id);
            if (Auth::guard('api')->user() && $card->user_id == Auth::guard('api')->user()->id) {
                $message = trans('Not possible to send application to your card !');
                return $this->sendError('Invalid Error', $message);
            } elseif (!empty(Auth::user())) {
                $data['connect_user_id']    = Auth::guard('api')->user()->id;
                $data['profile_image']      = Auth::guard('api')->user()->profile_image;
            } else {
                $data['connect_user_id'] = NULL;
            }

            $data['card_id']        = $card->id;
            $data['created_at']     = now();
            $data['user_id']        = $card->user_id;
            $connect = DB::table('connects')->insert($data);
            $data['card_id'] = $card->card_id;
        } catch (Exception $th) {
            DB::rollback();

            $message = trans('Something wrong ! please try again');
            // return $this->sendError('Exception Error', $message);
            return $this->sendError('Exception Error', $th->getMessage());
        }
        DB::commit();
        $user = DB::table('users')->where('id', $card->user_id)->first();
        // DB::commit();
        if (!empty($connect) && $user->is_notify == 1) {
            Mail::to($user->email)->send(new QuickReportMail($data, $user));
        }

        $message = trans('Your loan application send successfully');
        return $this->sendResponse(200, $message, description: $discription);
    }


    public function creditReport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "card_id"                   => "required",
            "name"                      => "required",
            "applicant_name"            => "required",
            "social_security_number"    => "required",
            "date_of_birth"             => "required|date",
            "current_street"            => "required",
            "current_city"              => "required",
            "current_state"             => "required",
            "current_date"              => "required",
            "prior_address"             => "required",
            "prior_city"                => "required",
            "prior_state"               => "required",
            "prior_start_date"          => "required|date",
            "prior_end_date"            => "required|date",
            "license"                   => "required",
            "license_state"             => "required",
            "signature"                 => "required",
            "signature_date"            => "required|date",
        ]);

        if ($validator->fails()) {
            return $this->sendError('Exception Error', $validator->errors()->first());
        }


        DB::beginTransaction();
        try {
            $data['name']                      = $request->name;
            $data['applicant_name']            = $request->applicant_name;
            $data['social_security_number']    = $request->social_security_number;
            $data['date_of_birth']             = $request->date_of_birth;
            $data['current_street']            = $request->current_street;
            $data['current_city']              = $request->current_city;
            $data['current_state']             = $request->current_state;
            $data['current_date']              = $request->current_date;
            $data['prior_address']             = $request->prior_address;
            $data['prior_city']                = $request->prior_city;
            $data['prior_state']               = $request->prior_state;
            $data['prior_start_date']          = $request->prior_start_date;
            $data['prior_end_date']            = $request->prior_end_date;
            $data['license']                   = $request->license;
            $data['license_state']             = $request->license_state;
            $data['signature']                 = $request->signature;
            $data['signature_date']            = $request->signature_date;
            $data['query_type']                = 2;

            $card = BusinessCard::findOrFail($request->card_id);
            if (Auth::user() && $card->user_id == Auth::user()->id) {
                $message = trans('Not possible to send message to your card !');
                return $this->sendError('Invalid Error', $message);
            } elseif (!empty(Auth::user())) {
                $data['connect_user_id']    = Auth::user()->id;
                $data['profile_image']      = Auth::user()->profile_image;
                $data['email']              = Auth::user()->email;
            } else {
                $data['connect_user_id'] = NULL;
            }

            $data['card_id']        = $card->id;
            $data['created_at']     = now();
            $data['user_id']        = $card->user_id;
            $connect = DB::table('connects')->insert($data);
            $data['card_id'] = $card->card_id;
        } catch (Exception $th) {
            DB::rollback();
            $message = trans('Something wrong ! please try again');
            return $this->sendError('Exception Error', $message);
        }
        DB::commit();
        $user = DB::table('users')->where('id', $card->user_id)->first();
        if (!empty($connect) && $user->is_notify == 1) {
            Mail::to($user->email)->send(new CreditReportMail($data, $user));
        }

        $message = ('Credit report authorization send successfully');

        return $this->sendResponse(200, $message);
    }
}
