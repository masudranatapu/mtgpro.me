<?php

namespace App\Http\Controllers\User;

use DB;
use App\Models\User;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use Stripe\StripeClient;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TransectionRequest;

class CheckoutController extends Controller
{
    protected $businesscard;
    public function __construct(
        BusinessCard $businesscard
        )
    {
        $this->businesscard  = $businesscard;
    }


    // public function __construct()
    // {
        /** PayPal api context **/
        // $paypal_configuration = DB::table('config')->get();
        // $this->apiContext = new ApiContext(new OAuthTokenCredential($paypal_configuration[4]->config_value, $paypal_configuration[5]->config_value));
        // $this->apiContext->setConfig(array(
        //     'mode' => $paypal_configuration[3]->config_value,
        //     'http.ConnectionTimeOut' => 30,
        //     'log.LogEnabled' => true,
        //     'log.FileName' => storage_path() . '/logs/paypal.log',
        //     'log.LogLevel' => 'DEBUG',
        // ));
    // }

    public function checkout(Request $request)
    {
        $config         = DB::table('config')->get();
        $data = [];
        $planId = $request->plan_id;
        $is_yearly = $request->is_yearly;
        $plan = DB::table('plans')->where('id', $planId)->where('status',1)->first();
        if(empty($plan)){
            abort(404);
        }
        $user = DB::table('users')->where('id',Auth::user()->id)->first();
        $payment_data = json_decode($user->stripe_data);
        $term_days = $plan->validity;
        $plan_validity = \Carbon\Carbon::now();
        $plan_validity->addDays($term_days);
        if($plan) {
            if($plan->is_free==1 && !empty($payment_data->id)){
               $stripe = new \Stripe\StripeClient($config[10]->config_value);
                //Check subscription
                $check_subscription = $stripe->subscriptions->retrieve(
                    $payment_data->id,
                    []
                  );
                  if($check_subscription->status=='active'){
                    //Unsubscription Stripe
                    $stripe = $stripe->subscriptions->cancel(
                        $payment_data->id,
                        []
                    );
                  }
                $this->businesscard->updateDataByCuurentPlan($plan->id);
                User::where('id', Auth::user()->id)->update([
                    'plan_id' => $plan->id,
                    'paid_with' => NULL,
                    'term' => $term_days,
                    'plan_validity' => $plan_validity,
                    'plan_activation_date' => now(),
                    'plan_details' => json_encode($plan),
                    'stripe_data' => NULL,
                    'paypal_data' => NULL,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
                return redirect()->route('user.plans');
            }elseif($plan->is_free==1){
                $this->businesscard->updateDataByCuurentPlan($plan->id);
                User::where('id', Auth::user()->id)->update([
                    'plan_id' => $plan->id,
                    'paid_with' => 0,
                    'term' => $term_days,
                    'plan_validity' => $plan_validity,
                    'plan_activation_date' => now(),
                    'plan_details' => json_encode($plan)
                ]);
                return redirect()->route('user.plans');
            }else{
                $plan->is_yearly = $is_yearly;
                $gateways = DB::table('gateways')->where('status', 1)->get();

                return view('user.plan.checkout', compact('plan', 'gateways','user','config'));
            }
        }else {
            Toastr::error(trans('Please select your plan'), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->route('user.plans');
        }

    }


    public function postTransection(Request $request){

        dd($request->all());

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        //Itemized information (Optional) Lets you specify item wise information

        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(17);

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $details = new Details();
        $details->setShipping(1)
            ->setTax(2)
            ->setSubtotal(17);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(20)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $baseUrl = URL::to('/');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl")
            ->setCancelUrl("$baseUrl");

        $payment = new Payment();


        $payment->setIntent("order")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
        //For Sample Purposes Only.

        $request = clone $payment;

        try {
            $paymentdetail = $payment->create($this->apiContext);
            // dd($paymentdetail);
            // echo '<pre>';
            // print_r($paymentdetail);
            // echo '</pre>';
            // die('inside try ');
        } catch (Exception $ex) {
            //NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY

            // ResultPrinter::printError("Created Payment Order Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            // die('Inside catch');
        }
        //Get redirect url
        //The API response provides the url that you must redirect the buyer to. Retrieve the url from the $payment->getApprovalLink() method

        $approvalUrl = $payment->getApprovalLink();

        if(isset($approvalUrl)) {
            return Redirect::away($approvalUrl);
        }
        dd($approvalUrl);
        //NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY

        //  ResultPrinter::printResult("Created Payment Order Using PayPal. Please visit the URL to Approve.", "Payment", "<a href='$approvalUrl' >$approvalUrl</a>", $request, $payment);

        return $payment;

    }



    public function stripeCheckout(Request $request)
    {
        dd($request->all());
    }
}
