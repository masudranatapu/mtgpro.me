<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\AllMail;
use App\Models\BusinessCard;
use App\Models\BusinessField;
use App\Models\EmailTemplate;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Stripe\StripeClient;

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
}
