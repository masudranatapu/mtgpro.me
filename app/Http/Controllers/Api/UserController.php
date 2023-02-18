<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\AllMail;
use App\Models\BusinessCard;
use App\Models\BusinessField;
use App\Models\Config;
use App\Models\EmailTemplate;
use App\Models\Transaction;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Stripe\StripeClient;
use Throwable;

class UserController extends ResponceController
{
    protected $settings;
    protected $businessCard;
    public function __construct(
        BusinessCard $businessCard
    ) {
        $this->settings = getSetting();
        $this->businessCard  = $businessCard;
    }
    public function passwordReset()
    {
        $data = [];
        DB::begintransaction();
        try {
            $token = Str::random(60);
            $check = User::where('email', Auth::guard('api')->user()->email)->first();
            if (empty($check) || $check->count() == 0) {
                return response()->json(['status' => 0, 'message' => 'User account not found ! !'], 401);
            }
            $check->token               = $token;
            $check->is_token_active     = 1;
            $check->token_expire_at    = \Carbon\Carbon::now()->addMinute(60)->format('Y-m-d H:i:s');
            $check->save();
            $link = URL::to('/') . '/user/password/password-reset/' . $token . '?email=' . Auth::guard('api')->user()->email;
            $data['subject'] = 'Reset Password Notification from ' . $this->settings->site_name;
            $data['user'] = $check;
            $data['link'] = $link;
            // Mail::to(Auth::guard('api')->user()->email)->send(new ResetEmail($data));
            [$content, $subject] = $this->passwordResetMail($check, $link);

            Mail::to(Auth::guard('api')->user()->email)->send(new AllMail($content, $subject));
        } catch (Exception $e) {

            DB::rollback();
            return $this->sendError('Excepton Error', 'Something went wrong please try again !', 200);
        }
        DB::commit();
        return $this->sendResponse(200, 'We have e-mailed your password reset link!', [], true, []);
    }



    public function postDeletionRequest(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'confirm' => 'required',
        ]);

        if ($validate->fails()) {
            return $this->sendError('Validation Error', $validate->errors()->first(), 200);
        }



        $config = DB::table('config')->get();

        DB::beginTransaction();
        try {
            $data = [];
            if ($request->confirm == 'delete') {
                $stripe = new StripeClient($config[10]->config_value);
                $user_cards = BusinessCard::where('user_id', Auth::user()->id)->get();
                foreach ($user_cards as $key => $value) {
                    BusinessField::where('card_id', $value->id)->update([
                        'status' => 2,
                    ]);
                }
                BusinessCard::where('user_id', Auth::user()->id)->update([
                    'status' => 2,
                    'deleted_at' => date('Y-m-d H:i:s'),
                    'deleted_by' => Auth::user()->id
                ]);
                $user = User::find(Auth::user()->id);
                if (!empty($user->stripe_customer_id)) {
                    //Find Existing Customer
                    $stripe_customer = $stripe->customers->retrieve(
                        $user->stripe_customer_id,
                        []
                    );
                    $customer_id = $stripe_customer->id;
                    if (!empty($customer_id)) {

                        $payment_data = json_decode($user->stripe_data);
                        if (!empty($payment_data)) {
                            //Check subscription
                            $check_subscription = $stripe->subscriptions->retrieve(
                                $payment_data->id,
                                []
                            );
                            if ($check_subscription->status == 'active') {
                                //Unsubscription Stripe
                                $stripe = $stripe->subscriptions->cancel(
                                    $payment_data->id,
                                    []
                                );
                            }
                        }
                        $stripe = new StripeClient($config[10]->config_value);
                        $stripe->customers->delete(
                            $customer_id,
                            []
                        );
                    }
                }

                $user_email = $user->email;
                $user->status = 2;
                $user->email = Auth::user()->id . '-' . $user_email;
                $user->deleted_at = date("Y-m-d H:i:s");
                $user->deleted_by  = Auth::user()->id;

                $user->save();
                Auth::logout();
                // Mail::to($user_email)->send(new AccountDeletion($data));
                [$content, $subject] = $this->accountDeletionMail();

                Mail::to($user_email)->send(new AllMail($content, $subject));
            } else {
                return $this->sendError('Excepton Error', 'Please type `delete` for account deletion', 200);
            }
        } catch (Exception $e) {

            DB::rollback();

            return $this->sendError('Excepton Error', 'Something wrong! Please try again', 200);
        }
        DB::commit();
        return $this->sendResponse(200, 'Your account has been deleted', [], true, []);
    }


    public function putNitificationStatus(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'current_val' => 'required'
        ]);

        if ($validate->fails()) {
            return $this->sendError('Validation Error', $validate->errors()->first(), 200);
        }


        DB::beginTransaction();
        try {
            DB::table('users')->where('id', Auth::guard('api')->user()->id)->update(['is_notify' => $request->current_val]);
        } catch (\Throwable $th) {
            DB::rollback();
            return $this->sendError('Excepton Error', 'Something wrong! Please try again', 200);
        }
        DB::commit();
        return $this->sendResponse(200, 'Successfully updated', [], true, []);
    }




    public function getConnect(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "job_title" => 'required',
            "company_name" => 'required',
            "message" => 'required',
            "card_id" => 'required',
        ]);


        if ($validate->fails()) {
            return  $this->sendError("Validation Error", $validate->errors()->first(), 200);
        }



        DB::beginTransaction();
        try {
            $data['name']         = $request->name;
            $data['email']         = trim($request->email);
            $data['phone']         = $request->phone;
            $data['title']         = $request->job_title;
            $data['company_name']  = $request->company_name;
            $data['message']       = $request->message;
            $find_user = DB::table('users')->where('email', $request->email)->first();
            $card = BusinessCard::findOrFail($request->card_id);



            if (Auth::user() && $card->user_id == Auth::guard('api')->user()->id) {

                return $this->sendError('Same User Error', trans('Not possible to send message to your card !'), 200);
            } elseif (!empty(Auth::user())) {
                $data['connect_user_id'] = Auth::guard('api')->user()->id;
                $data['profile_image']   = Auth::guard('api')->user()->profile_image;
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
        } catch (Exception $th) {
            dd($th);
            DB::rollback();
            return  $this->sendError(trans('Something wrong ! please try again'));
        }
        $user = DB::table('users')->where('id', $card->user_id)->first();

        if (!empty($connect) && $user->is_notify == 1) {
            // Mail::to($card->card_email)->send(new ConnectMail($data));
            [$message, $subject] = $this->getConnectMail($card, $request->all());
            Mail::to($card->card_email)->send(new AllMail($message, $subject));

            [$message, $subject] = $this->getConnectMailCC($request->all());
            Mail::to($card->card_email)->send(new AllMail($message, $subject));
        }

        return $this->sendResponse(200, trans('Connection send successfully'), [], true, []);
    }



    public function passwordResetMail(User $user, $link)
    {


        $mailTemplate = EmailTemplate::where('slug', 'password-reset')->first();
        $content = $mailTemplate->body;


        if (isset($user)) {

            $content = preg_replace("/{{name}}/", $user->name, $content);
        }
        if (isset($link)) {

            $content = preg_replace("/{{link}}/", $link, $content);
        }

        return [$content, $mailTemplate->subject];
    }

    public function accountDeletionMail()
    {
        $mailTemplate = EmailTemplate::where('slug', 'account-delatation')->first();
        return [$mailTemplate->body, $mailTemplate->subject];
    }
    public function userBillingInfo()
    {
        $user = Auth::user();
        $data = [
            "billing_zipcode" => $user->billing_zipcode,
            "billing_country" => $user->billing_country,
            "billing_email" => $user->billing_email,
        ];

        return $this->sendResponse(200, 'User Billing info', $data, true);
    }
    public function userBillingInfoUpdate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'billing_zipcode' => 'required',
            'billing_country' => 'required',
            'billing_email' => 'required',
        ]);


        if ($validate->fails()) {
            return  $this->sendError("Validation Error", $validate->errors()->first(), 200);
        }


        $user = User::find(Auth::id());

        $user->billing_zipcode = $request->billing_zipcode;
        $user->billing_country = $request->billing_country;
        $user->billing_email = $request->billing_email;
        $user->save();

        return $this->sendResponse(200, 'User Billing info', $user, true);
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
            $mailcontent = preg_replace("/{{title}}/", $senderData['job_title'], $mailcontent);
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



    public function userplan()
    {
        $userPlan = User::find(Auth::guard('api')->id());


        $planDetails = json_decode($userPlan->plan_details, true);
        $data = [
            "id" => $planDetails['id'],
            "plan_type" => $planDetails['plan_type'],
            "plan_id" => $planDetails['plan_id'],
            "plan_name" => $planDetails['plan_name'],
            "plan_description" => $planDetails['plan_description'],
            "is_free" => $planDetails['is_free'],
            "plan_price_monthly" => $planDetails['plan_price_monthly'],
            "plan_price_yearly" => $planDetails['plan_price_yearly'],
            "plan_price" => $planDetails['plan_price'],
            "discount_percentage" => $planDetails['discount_percentage'],
            "validity" => $planDetails['validity'],
            "no_of_vcards" => $planDetails['no_of_vcards'],
            "no_of_services" => $planDetails['no_of_services'],
            "no_of_galleries" => $planDetails['no_of_galleries'],
            "no_of_features" => $planDetails['no_of_features'],
            "no_of_payments" => $planDetails['no_of_payments'],
            "personalized_link" => $planDetails['personalized_link'],
            "hide_branding" => $planDetails['hide_branding'],
            "free_setup" => $planDetails['free_setup'],
            "free_support" => $planDetails['free_support'],
            "recommended" => $planDetails['recommended'],
            "is_watermark_enabled" => $planDetails['is_watermark_enabled'],
            "features" => json_decode($planDetails['features'], true),
            "plans_type" => $planDetails['plans_type'],
            "name" => $planDetails['name'],
            "slug" => $planDetails['slug'],
            "stripe_plan_id" => $planDetails['stripe_plan_id'],
            "stripe_data" => json_decode($planDetails['stripe_data']),
            "stripe_plan_id_yearly" => $planDetails['stripe_plan_id_yearly'],
            "paypal_plan_id" => $planDetails['paypal_plan_id'],
            "paypal_plan_data" => $planDetails['paypal_plan_data'],
            "cost" => $planDetails['cost'],
            "status" => $planDetails['status'],
            "shareable" => $planDetails['shareable'],
            "created_at" => $planDetails['created_at'],
            "updated_at" => $planDetails['updated_at'],
            "is_vcard" => $planDetails['is_vcard'],
            "is_whatsapp_store" => $planDetails['is_whatsapp_store'],
            "is_email_signature" => $planDetails['is_email_signature'],
            "is_qr_code" => $planDetails['is_qr_code'],
            "is_yearly_plan" => $planDetails['is_yearly_plan'],
            "free_marketing_material" => $planDetails['free_marketing_material'],
            "package_type" => $userPlan->plan_duration,
            "remaining_days" => $userPlan->remainng_days
        ];

        return $this->sendResponse(200, "User Current Plans", $data, true);
    }

    public function userProfile()
    {
        $user = Auth::guard('api')->user();
        return $this->sendResponse(200, "User profile data", $user, true);
    }

    public function profileUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "profile_pic" => 'sometimes',
            "email" => 'required|email',
            "connection_title" => 'required|string',
            "user_disclaimer" => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError("Validation Error", $validator->errors()->first());
        }


        DB::beginTransaction();
        try {
            $user  = User::find(Auth::user()->id);
            if ($request->has('profile_pic') && !empty($request->profile_pic[0])) {
                $file_name = $this->businessCard->formatName($request->name);
                if ($request->has('profile_pic')) {

                    $profile_image = $this->uploadBase64FileToPublic($request->profile_pic, 'profilePic');
                    $user->profile_image = asset($profile_image);
                }
            }

            if ($request->connection_title) {
                $user->connection_title = $request->connection_title;
            } else {
                $user->connection_title = 'Share your info back with ' . $user->name;
            }

            $user->email = $request->email;
            $user->updated_at   = date("Y-m-d H:i:s");
            $user->user_disclaimer   = $request->user_disclaimer;

            // dd($user);
            $user->save();
        } catch (\Exception $e) {
            DB::rollback();
            return $this->sendError("Exception Error", "Something wrong! Please try again");
        }
        DB::commit();

        $data = [
            "id" => $user->id,
            "name" => $user->name,
            "lname" => $user->lname,
            "email" => $user->email,
            "username" => $user->username,
            "billing_country_code" => $user->billing_country_code,
            "role_id" => $user->role_id,
            "user_type" => $user->user_type,
            "email_verified_at" => $user->email_verified_at,
            "email_verified" => $user->email_verified,
            "auth_type" => $user->auth_type,
            "profile_image" => $user->profile_image,
            "plan_id" => $user->plan_id,
            "term" => $user->term,
            "plan_validity" => $user->plan_validity,
            "plan_activation_date" => $user->plan_activation_date,
            "billing_name" => $user->billing_name,
            "type" => $user->type,
            "vat_number" => $user->vat_number,
            "billing_address" => $user->billing_address,
            "billing_city" => $user->billing_city,
            "billing_state" => $user->billing_state,
            "billing_zipcode" => $user->billing_zipcode,
            "billing_country" => $user->billing_country,
            "billing_phone" => $user->billing_phone,
            "billing_email" => $user->billing_email,
            "status" => $user->status,
            "paypal_plan_id" => $user->paypal_plan_id,
            "paypal_data" => $user->paypal_data,
            "stripe_data" => $user->stripe_data,
            "stripe_customer_id" => $user->stripe_customer_id,
            "created_at" => $user->created_at,
            "updated_at" => $user->updated_at,
            "trial_ends_at" => $user->trial_ends_at,
            "paid_with" => $user->paid_with,
            "gender" => $user->gender,
            "country_code" => $user->country_code,
            "ccode" => $user->ccode,
            "phone" => $user->phone,
            "avatar" => $user->avatar,
            "provider" => $user->provider,
            "social_id" => $user->social_id,
            "dob" => $user->dob,
            "designation" => $user->designation,
            "company_name" => $user->company_name,
            "company_websitelink" => $user->company_websitelink,
            "token" => $user->token,
            "token_expire_at" => $user->token_expire_at,
            "is_token_active" => $user->is_token_active,
            "deleted_at" => $user->deleted_at,
            "deleted_by" => $user->deleted_by,
            "active_card_id" => $user->active_card_id,
            "connection_title" => $user->connection_title,
            "is_notify" => $user->is_notify,
            "user_disclaimer" => $user->user_disclaimer,

        ];
        return $this->sendResponse(200, "User information updated successfull", $data, true, []);
    }

    public function userInvoice(Request $request)
    {
        $paginate = 10;
        if (isset($request->paginate)) {
            $paginate = $request->paginate;
        }
        $transaction = Transaction::where('user_id', Auth::guard('api')->user()->id)->orderBy('id', 'DESC')->paginate($paginate);

        return $this->sendResponse(200, "User Invoice", $transaction, true, []);
    }
}
