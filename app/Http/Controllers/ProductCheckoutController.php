<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Gateway;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Stripe\StripeClient;

class ProductCheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function checkOut()
    {
        $user = User::find(Auth::id());
        $config = Config::all();
        $gateways = Gateway::where('status', 1)->get();
        $products = Session::get('cart');



        return view('pages.product_checkout.product_checkout', compact('user', 'config', 'gateways', 'products'));
    }


    public function orderCheckOut(Request $request)
    {
        try {

            $config = DB::table('config')->get();
            $userData = Auth::user();


            // $stripe = new StripeClient($config[10]->config_value);
            Stripe::setApiKey("sk_test_51LtUkeIH2i6FoGaEZ3Y90HVXatZKimap3Wsnbw72syI5PFoV9KtEAwGf6788R5LuLnfpCXXq9DOSo7REOtqjG8Vp00FIBEPP38");


            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source'  => $request->stripeToken
            ));
            Charge::create([
                "amount" =>  100,
                "currency" => "USD",
                'customer' => $customer,
                "description" => env('APP_NAME')
            ]);



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

            $invoice_details['invoice_amount']              = null;
            $invoice_details['subtotal']                    = null;
            $invoice_details['tax_amount']                  = null;

            $transaction = new Transaction();
            $transaction->invoice_number        = uniqid();
            $transaction->transaction_date      = date('Y-m-d H:i:s');
            $transaction->transaction_id        = null;
            $transaction->user_id               = Auth::user()->id;
            $transaction->plan_id               = null;
            $transaction->desciption            = null;
            $transaction->payment_gateway_name  = "Stripe";
            $transaction->transaction_amount    = null;
            $transaction->transaction_currency  = null;
            $transaction->invoice_details       = json_encode($invoice_details);
            $transaction->payment_status        = "Success";
            $transaction->save();
            //update user
            DB::table('users')->where('id', $userData->id)->update([
                'plan_id'               => null,
                'stripe_data'           => json_encode(null),
                'stripe_customer_id'    => $customer_id,
                'plan_details'          => json_encode(null),
                'plan_activation_date'  => null,
                'plan_validity'         => null,
                'billing_name'          => $request->billing_name,
                'billing_address'       => $request->billing_address,
                'billing_city'          => $request->billing_city,
                'billing_state'         => $request->billing_state,
                'billing_zipcode'       => $request->billing_zipcode,
                'billing_country'       => $request->billing_country,
                'billing_phone'         => $request->billing_phone,
                'billing_email'         => $request->billing_email,
            ]);
        } catch (Exception $error) {
            dd($error);
            Toastr::error(trans('"Something went wrong!'), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        Mail::to($request->billing_email)->send(new \App\Mail\SendEmailInvoice($transaction));
        Toastr::success(trans('Plan subscription successfully done!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('user.invoice', $transaction->invoice_number);
    }
}
