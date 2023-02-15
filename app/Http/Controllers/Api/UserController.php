<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\AllMail;
use App\Models\BusinessCard;
use App\Models\BusinessField;
use App\Models\Config;
use App\Models\EmailTemplate;
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
