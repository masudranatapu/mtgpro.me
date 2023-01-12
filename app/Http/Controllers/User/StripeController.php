<?php
namespace App\Http\Controllers\User;
use DB;
use Auth;
use App\User;
use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\Plan;
use Stripe\StripeClient;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class StripeController extends Controller
{

    protected $businesscard;

    public function __construct(
        BusinessCard $businesscard
        )
    {
        $this->businesscard  = $businesscard;
    }


    public function webhook()
    {
        return Auth::user();
    }

    public function stripeCheckout(Request $request)
    {

        // dd($request->all());
        try {
            $planId = $request->plan_id;
            $config = DB::table('config')->get();
            $plan_details = Plan::where('id', $planId)->where('status', 1)->first();

            if ($plan_details->stripe_plan_id == null) {
                Toastr::error(trans('Stripe payment is not available for this plan. \n Please contact with admin'), 'Error', ["positionClass" => "toast-top-center"]);
                return redirect()->back();
            }
                $userData = Auth::user();

                $price_id = $plan_details->stripe_plan_id;

                $stripe = new StripeClient($config[10]->config_value);

                if ($userData->stripe_customer_id == null) {
                    //Create new stripe customer
                    $stripe_customer = $stripe->customers->create([
                        'name' => $userData->name,
                        'email' => $userData->email,
                        'source' => $request->stripeToken
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
                    if(!empty($payment_data)){
                        $stripe->subscriptions->cancel(
                            $payment_data->id,
                            []
                          );
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

                if($request->is_yearly==1){
                    $price_id = $plan_details->stripe_plan_id_yearly;
                }
                else{
                    $price_id = $plan_details->stripe_plan_id;
                }

                 //Create new Subscription
                 $subscription = $stripe->subscriptions->create([
                    'customer' => $customer_id,
                    'items' => [[
                        'price' => $price_id,
                    ]],
                ]);
                // dd($subscription);
                $activation_date = Carbon::parse($subscription->current_period_start)->format('Y-m-d H:i:s');
                if($request->is_yearly==1){
                    $plan_price = $plan_details->plan_price_yearly;
                    $plan_validity = Carbon::parse($subscription->current_period_end)->format('Y-m-d H:i:s');
                    // $plan_validity = Carbon::parse($subscription->start_date)->addDays(31);
                }
                else{
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
                $transaction->save();
                //update user
                DB::table('users')->where('id',$userData->id)->update([
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
                Toastr::error(trans('"Something went wrong!'), 'Error', ["positionClass" => "toast-top-center"]);
                return redirect()->back();
            }
            Mail::to($request->billing_email)->send(new \App\Mail\SendEmailInvoice($transaction));
            Toastr::success(trans('Plan subscription successfully done!'), 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.invoice',$transaction->invoice_number);

    }




//    public function stripeToken(Request $request)
//    {
//        $stripe = new StripeClient('sk_test_51L5UFzIY8R27Jx6M9JghugsndjalSWLKBdGr6lvAu08ladRJG0jRDJ7CTic0IRxUDKpCibBaOhUOHR97OYrOYqa900z3vy6iU9');
//        $userData = Auth::user();
//        $price_id = 'price_1L6zMLIY8R27Jx6MiSYRljBa';
//
//
//    }

    public function stripePaymentStatus(Request $request, $paymentId)
    {

        dd($paymentId);
//        dd($request->all(), $paymentId);
        if (!$paymentId) {
            return view('errors.404');
        } else {
            $orderId = $paymentId;
            $config = DB::table('config')->get();
            $stripe = new StripeClient($config[10]->config_value);

            $plan = Plan::query()
                ->where('id', '=', $request->get('plan'))
                ->first();

            try {
//                $stripePlan = $stripe->plans->retrieve($plan->stripe_plan, []);
//                $payment = $stripe->paymentIntents->retrieve($paymentId, []);
                $setupIntent = $stripe->setupIntents->retrieve($paymentId, []);
                $user = $request->user();
                $paymentMethod = $setupIntent->payment_method;

                Stripe::setApiKey($config[10]->config_value);

                $subscriptions = $user->subscriptions(Str::slug($plan->plan_name))->active()->get();
                foreach ($subscriptions as $subscription) {
                    $subscription->cancelNow();
                }

                $user->createOrGetStripeCustomer();
                $user->updateDefaultPaymentMethod($paymentMethod);
                $user->newSubscription(Str::slug($plan->plan_name), $plan->stripe_plan)
                    ->create($paymentMethod, [
                        'email' => $user->email,
                    ]);
                $payment = new \stdClass();
                $payment->status = "succeeded";
            } catch (\Exception $e) {
//                dd($e);
                $payment = new \stdClass();
                $payment->status = "error";
            }

            if ($payment->status == "succeeded") {

                $transaction_details = Transaction::where('transaction_id', $orderId)->where('status', 1)->first();
                $user_details = User::find(Auth::user()->id);

                $plan_data = Plan::where('plan_id', $transaction_details->plan_id)->first();
                $term_days = $plan_data->validity;

                if ($user_details->plan_validity == "") {

                    $plan_validity = Carbon::now();
                    $plan_validity->addDays($term_days);

                    $invoice_count = Transaction::where("invoice_prefix", $config[15]->config_value)->count();
                    $invoice_number = $invoice_count + 1;

                    Transaction::where('transaction_id', $orderId)->update([
                        'transaction_id' => $paymentId,
                        'invoice_prefix' => $config[15]->config_value,
                        'invoice_number' => $invoice_number,
                        'payment_status' => 'SUCCESS',
                    ]);

                    User::where('user_id', Auth::user()->user_id)->update([
                        'plan_id' => $transaction_details->plan_id,
                        'paid_with' => 0,
                        'term' => $term_days,
                        'plan_validity' => $plan_validity,
                        'plan_activation_date' => now(),
                        'plan_details' => $plan_data
                    ]);

                    $encode = json_decode($transaction_details['invoice_details'], true);
                    $details = [
                        'from_billing_name' => $encode['from_billing_name'],
                        'from_billing_email' => $encode['from_billing_email'],
                        'from_billing_address' => $encode['from_billing_address'],
                        'from_billing_city' => $encode['from_billing_city'],
                        'from_billing_state' => $encode['from_billing_state'],
                        'from_billing_country' => $encode['from_billing_country'],
                        'from_billing_zipcode' => $encode['from_billing_zipcode'],
                        'gobiz_transaction_id' => $transaction_details->gobiz_transaction_id,
                        'to_billing_name' => $encode['to_billing_name'],
                        'invoice_currency' => $transaction_details->transaction_currency,
                        'subtotal' => $encode['subtotal'],
                        'tax_amount' => $encode['tax_amount'],
                        'invoice_amount' => $encode['invoice_amount'],
                        'invoice_id' => $config[15]->config_value . $invoice_number,
                        'invoice_date' => $transaction_details->created_at,
                        'description' => $transaction_details->desciption,
                        'email_heading' => $config[27]->config_value,
                        'email_footer' => $config[28]->config_value,
                    ];

                    try {
                        Mail::to($encode['to_billing_email'])->send(new \App\Mail\SendEmailInvoice($details));
                    } catch (\Exception $e) {

                    }

                    alert()->success(trans('Plan subscription success!'));
                    return redirect()->route('user.plans');
                } else {

                    $message = "";

                    if ($user_details->plan_id == $transaction_details->plan_id) {

                        // Check if plan validity is expired or not.
                        $plan_validity = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $user_details->plan_validity);
                        $current_date = Carbon::now();
                        $remaining_days = $current_date->diffInDays($plan_validity, false);

                        if ($remaining_days > 0) {
                            $plan_validity = Carbon::parse($user_details->plan_validity);
                            $plan_validity->addDays($term_days);
                            $message = "Plan subscribed successfully!";
                        } else {
                            $plan_validity = Carbon::now();
                            $plan_validity->addDays($term_days);
                            $message = "Plan subscribed successfully!";
                        }
                    } else {

                        // Making all cards inactive, For Plan change
                        BusinessCard::where('user_id', Auth::user()->user_id)->update([
                            'card_status' => 'inactive',
                        ]);

                        $plan_validity = Carbon::now();
                        $plan_validity->addDays($term_days);
                        $message = "Plan subscribed successfully!";
                    }

                    $invoice_count = Transaction::where("invoice_prefix", $config[15]->config_value)->count();
                    $invoice_number = $invoice_count + 1;

                    Transaction::where('transaction_id', $orderId)->update([
                        'transaction_id' => $paymentId,
                        'invoice_prefix' => $config[15]->config_value,
                        'invoice_number' => $invoice_number,
                        'payment_status' => 'SUCCESS',
                    ]);

                    User::where('user_id', Auth::user()->user_id)->update([
                        'plan_id' => $transaction_details->plan_id,
                        'term' => $term_days,
                        'plan_validity' => $plan_validity,
                        'plan_activation_date' => now(),
                        'plan_details' => $plan_data
                    ]);

                    $encode = json_decode($transaction_details['invoice_details'], true);
                    $details = [
                        'from_billing_name' => $encode['from_billing_name'],
                        'from_billing_email' => $encode['from_billing_email'],
                        'from_billing_address' => $encode['from_billing_address'],
                        'from_billing_city' => $encode['from_billing_city'],
                        'from_billing_state' => $encode['from_billing_state'],
                        'from_billing_country' => $encode['from_billing_country'],
                        'from_billing_zipcode' => $encode['from_billing_zipcode'],
                        'gobiz_transaction_id' => $transaction_details->gobiz_transaction_id,
                        'to_billing_name' => $encode['to_billing_name'],
                        'invoice_currency' => $transaction_details->transaction_currency,
                        'subtotal' => $encode['subtotal'],
                        'tax_amount' => $encode['tax_amount'],
                        'invoice_amount' => $encode['invoice_amount'],
                        'invoice_id' => $config[15]->config_value . $invoice_number,
                        'invoice_date' => $transaction_details->created_at,
                        'description' => $transaction_details->desciption,
                        'email_heading' => $config[27]->config_value,
                        'email_footer' => $config[28]->config_value,
                    ];
                    try {


                        Mail::to($encode['to_billing_email'])->send(new \App\Mail\SendEmailInvoice($details));
                    } catch (\Exception $e) {
                    }
                    alert()->success($message);
                    return redirect()->route('user.plans');
                }
            } else {

                Transaction::where('transaction_id', $orderId)->update([
                    'transaction_id' => $paymentId,
                    'payment_status' => 'FAILED',
                ]);

                alert()->error(trans("Something went wrong!"));
                return redirect()->route('user.plans');
            }
        }
    }





//    private function createStripePlan($config, $plan_details): string
//    {
//        $stripe = new StripeClient($config[10]->config_value);
//
//        try {
//            $product = $stripe->products->create([
//                'name' => $plan_details->plan_name
//            ]);
//
//            $plan = $stripe->plans->create([
//                'amount' => $plan_details->plan_price * 100,
//                'currency' => 'usd',
//                'interval' => 'month',
//                'product' => $product->id,
//            ]);
//
//            $planStripeData['plan_id'] = $plan->id;
//            $plan_details->stripe_data = json_encode($planStripeData);
//            $plan_details->stripe_plan = $plan->id;
//            $plan_details->name = $plan_details->plan_name;
//            $plan_details->slug = Str::slug($plan_details->plan_name);
//            $plan_details->save();
//
//            return $plan->id;
//        } catch (\Exception $e) {
//        }
//
//        return '';
//    }
}
