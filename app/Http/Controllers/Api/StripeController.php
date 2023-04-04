<?php

namespace App\Http\Controllers\Api;

use App\Helpers\CountryHelper;
use App\Http\Controllers\Controller;
use App\Mail\AdminNotifyMail;
use App\Mail\AllMail;
use App\Models\BusinessCard;
use App\Models\Config;
use App\Models\EmailTemplate;
use App\Models\Plan;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;


class StripeController extends ResponceController
{
    protected $businesscard;
    public function __construct(
        BusinessCard $businesscard
    ) {
        $this->businesscard  = $businesscard;
    }

    public function stripeCheckout(Request $request)
    {

        $monthYear = explode("/", $request->date);





        $validate = Validator::make($request->all(), [
            'card_number' => 'required',
            'date' => 'required| date_format:m/y',
            'cvc' => 'required|numeric|min:3',
            'plan_id' => 'required',
            'billing_name' => 'required',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_state' => 'required',
            'billing_zipcode' => 'required',
            'billing_country' => 'required',
            'billing_phone' => 'required',
            'billing_email' => 'required',
            'is_yearly' => 'required'

        ]);
        $config = DB::table('config')->get();

        if ($validate->fails()) {
            return $this->sendError('Validation Error', $validate->errors()->first(), 200);
        }

        try {


            $stripe = new \Stripe\StripeClient(
                $config[10]->config_value
            );

            $stripeToken = $stripe->tokens->create([
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => $monthYear[0],
                    'exp_year' => $monthYear[1],
                    'cvc' => $request->cvc,
                ],
            ]);
        } catch (CardException $c) {
            return $this->sendError('Validation Error', $c->getMessage(), 200);
        }

        try {
            $planId = $request->plan_id;
            $config = DB::table('config')->get();
            $plan_details = Plan::where('id', $planId)->where('status', 1)->first();

            if ($plan_details->stripe_plan_id == null) {
                trans('Stripe payment is not available for this plan. \n Please contact with admin');
                return $this->sendError(200, trans('Stripe payment is not available for this plan. \n Please contact with admin'), 200);
            }
            $userData = Auth::guard('api')->user();
            $settings =  getSetting();

            $price_id = $plan_details->stripe_plan_id;

            $stripe = new StripeClient($config[10]->config_value);

            if ($userData->stripe_customer_id == null) {
                //Create new stripe customer
                $stripe_customer = $stripe->customers->create([
                    'name' => $userData->name,
                    'email' => $userData->email,
                    'source' => $stripeToken['id']
                ]);
                $customer_id = $stripe_customer->id;

                // //Create new Subscription
                // $subscription = $stripe->subscriptions->create([
                //     'customer' => $customer_id,
                //     'items' => [[
                //         'price' => $price_id,
                //     ]],
                // ]);

            } else {
                //Find Existing Customer
                $stripe_customer = $stripe->customers->retrieve(
                    $userData->stripe_customer_id,
                    []
                );
                $customer_id = $stripe_customer->id;
                // $exiating_subscription = json_decode($userData->stripe_data);
                //Update existing subscription
                // $subscription = $stripe->subscriptions->retrieve($exiating_subscription->id);
                //Unsubscription Stripe
                $payment_data = json_decode($userData->stripe_data);
                if (!empty($payment_data)) {
                    // $stripe->subscriptions->cancel(
                    //     $payment_data->id,
                    //     []
                    // );
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
                // $_subscription = \Stripe\Subscription::retrieve($payment_data->id);
                // $_subscription->cancel();
                // $stripe = $stripe->subscriptions->cancel(
                //     $payment_data->id,
                //     []
                //   );
                // $stripe->plans->retrieve(
                //     'price_1MPLF0BIRmXVjgUGWPX9RAyt',
                //     []
                //   );

                // $stripe->subscriptions->update(
                // $subscription->id,
                // [
                //     'cancel_at_period_end' => false,
                //     'proration_behavior' => 'create_prorations',
                //     'items' => [
                //     [
                //         'id' => $subscription->items->data[0]->id,
                //         'price' => $price_id,
                //     ],
                //     ],
                // ]
                // );
            }

            if ($request->is_yearly == 1) {
                $price_id = $plan_details->stripe_plan_id_yearly;
            } else {
                $price_id = $plan_details->stripe_plan_id;
            }
            $stripe = new StripeClient($config[10]->config_value);
            //Create new Subscription
            $subscription = $stripe->subscriptions->create([
                'customer' => $customer_id,
                'items' => [[
                    'price' => $price_id,
                ]],
            ]);
            // dd($subscription);
            $activation_date = Carbon::parse($subscription->current_period_start)->format('Y-m-d H:i:s');
            if ($request->is_yearly == 1) {
                $plan_price = $plan_details->plan_price_yearly;
                $plan_validity = Carbon::parse($subscription->current_period_end)->format('Y-m-d H:i:s');
                // $plan_validity = Carbon::parse($subscription->start_date)->addDays(31);
            } else {
                $plan_price = $plan_details->plan_price_monthly;
                $plan_validity = Carbon::parse($subscription->current_period_end)->format('Y-m-d H:i:s');
                // $plan_validity = Carbon::parse($subscription->start_date)->addYears(1);
            }

            $amountToBePaid = ((int)($plan_price) * (int)($config[25]->config_value) / 100) + (int)($plan_price);
            $invoice_details = [];
            $tax_amount = (int)($plan_price) * (int)($config[25]->config_value) / 100;

            $invoice_details['from_billing_name']           = $config[16]->config_value;
            $invoice_details['from_billing_address']        = $config[19]->config_value;
            $invoice_details['from_billing_city']           = $config[20]->config_value;
            $invoice_details['from_billing_state']          = $config[21]->config_value;
            $invoice_details['from_billing_zipcode']        = $config[22]->config_value;
            $invoice_details['from_billing_country']        = $config[23]->config_value;
            $invoice_details['from_vat_number']             = $config[26]->config_value;
            $invoice_details['from_billing_phone']          = $config[18]->config_value;
            $invoice_details['from_billing_email']          = $config[17]->config_value;


            $invoice_details['to_billing_name']             = $request->billing_name;
            $invoice_details['to_billing_address']          = $request->billing_address;
            $invoice_details['to_billing_city']             = $request->billing_city;
            $invoice_details['to_billing_state']            = $request->billing_state;
            $invoice_details['to_billing_zipcode']          = $request->billing_zipcode;
            $invoice_details['to_billing_country']          = $request->billing_country;
            $invoice_details['to_billing_phone']            = $request->billing_phone;
            $invoice_details['to_billing_email']            = $request->billing_email;
            $invoice_details['to_vat_number']               = $request->vat_number;

            $invoice_details['tax_name']                    = $config[24]->config_value;
            $invoice_details['tax_type']                    = $config[14]->config_value;
            $invoice_details['tax_value']                   = $config[25]->config_value;

            $invoice_details['invoice_amount']              = $amountToBePaid;
            $invoice_details['subtotal']                    = $plan_price;
            $invoice_details['tax_amount']                  = $tax_amount;

            $transaction = new Transaction();
            $transaction->invoice_number        = uniqid();
            $transaction->transaction_date      = date('Y-m-d H:i:s');
            $transaction->transaction_id        = $subscription->id;
            $transaction->user_id               = Auth::user()->id;
            $transaction->plan_id               = $plan_details->id;
            $transaction->desciption            = $plan_details->plan_name . " Plan";
            $transaction->payment_gateway_name  = "Stripe";
            $transaction->transaction_amount    = $amountToBePaid;
            $transaction->transaction_currency = $subscription->currency;
            $transaction->invoice_details       = json_encode($invoice_details);
            $transaction->payment_status        = "Success";
            $transaction->created_at = Auth::id();
            $transaction->save();
            //update user
            DB::table('users')->where('id', $userData->id)->update([
                'plan_id'               => $plan_details->id,
                'stripe_data'           => json_encode($subscription),
                'stripe_customer_id'    => $customer_id,
                'plan_details'          => json_encode($plan_details),
                'plan_activation_date'  => $activation_date,
                'plan_validity'         => $plan_validity,
                'billing_name'          => $request->billing_name,
                'billing_address'       => $request->billing_address,
                'billing_city'          => $request->billing_city,
                'billing_state'         => $request->billing_state,
                'billing_zipcode'       => $request->billing_zipcode,
                'billing_country'       => $request->billing_country,
                'billing_phone'         => $request->billing_phone,
                'billing_email'         => $request->billing_email,
            ]);
            $this->businesscard->updateDataByCuurentPlan($plan_details->id);
        } catch (Exception $error) {

            return $this->sendError(200, trans('"Something went wrong!'), 200);
        }
        Mail::to($request->billing_email)->send(new \App\Mail\SendEmailInvoice($transaction));
        [$content, $subject] = $this->planPurchaseMail($transaction);
        Mail::to($request->billing_email)->send(new AllMail($content, $subject));





        $adminNotifySubject = "Plan purchase notification";
        $adminNotifyContent = $request->billing_name . " purchase a plan.";
        $plan = Plan::find($transaction->plan_id);
        Mail::to($settings->support_email)->send(new AdminNotifyMail($adminNotifySubject, $adminNotifyContent, $transaction));


        return $this->sendResponse(200, trans('Plan subscription successfully done!'), $transaction, true, []);
    }

    public function planPurchaseMail(Transaction $transaction)
    {
        $user = User::find($transaction->user_id);
        $setting = Config::first();

        $plan = Plan::find($transaction->plan_id);
        $palnFeatures = json_decode($plan->features);
        $config = Config::where('config_key', 'currency')->first('config_value');
        $symbles = CountryHelper::CurrencySymbol();
        $symble = $symbles[$config->config_value];

        $html = "<ol>";
        for ($i = 0; $i < count($palnFeatures); $i++) {

            $palnFeature = $palnFeatures[$i];
            $html .= "<li>" . $palnFeature . "</li>";
        }
        $html .= "</ol>";



        $tempete = EmailTemplate::where('slug', 'plan-purchase')->first();

        $content = $tempete->body;
        $genarelSetting = Setting::first();

        $imagePath = public_path($genarelSetting->site_logo);
        $ext = pathinfo($imagePath, PATHINFO_EXTENSION);

        $imgbinary = fread(fopen($imagePath, "r"), filesize($imagePath));

        $base64 = 'data:image/' . $ext . ';base64,' . base64_encode($imgbinary);


        $imageBase = '<a href="' . route('home') . '"><img src="' . $base64 . '" alt="mtgprto" style="width:30%" ></a>';
        $siteTitle = '<a href="' . route('home') . '">' . $setting->config_value . '</a>';


        $content = preg_replace("/{{site_title}}/", $siteTitle, $content);
        $content = preg_replace("/{{site_logo}}/", $imageBase, $content);


        if (isset($plan->plan_name)) {
            $content = preg_replace("/{{plan_name}}/", $plan->plan_name, $content);
        }
        if (isset($plan->plan_description)) {
            $content = preg_replace("/{{plan_description}}/", $plan->plan_description, $content);
        }


        if (isset($plan->plan_price_monthly) || isset($plan->plan_price_yearly)) {

            $content = preg_replace("/{{currency}}/", $symble, $content);
        }
        if (isset($plan->plan_price_monthly)) {

            $content = preg_replace("/{{plan_price_monthly}}/", $plan->plan_price_monthly, $content);
        }

        if (isset($plan->plan_price_yearly)) {

            $content = preg_replace("/{{plan_price_yearly}}/", $plan->plan_price_yearly, $content);
        }

        if (isset($plan->no_of_vcards)) {
            $content = preg_replace("/{{number_of_cards}}/", $plan->no_of_vcards, $content);
        }
        if (isset($plan->features)) {
            $content = preg_replace("/{{plan_feature}}/", $html, $content);
        }


        if (isset($user->username)) {

            $content = preg_replace("/{{user_name}}/", $user->username, $content);
        }

        if (isset($transaction->transaction_amount)) {
            $content = preg_replace("/{{order_cost}}/", $transaction->transaction_amount, $content);
        }
        if (isset($transaction->transaction_id)) {

            $content = preg_replace("/{{transaction_number}}/", $transaction->transaction_id, $content);
        }
        if (isset($transaction->payment_status)) {

            $content = preg_replace("/{{order_status}}/", $transaction->payment_status, $content);
        }

        return [$content, $tempete->subject];
    }
}
