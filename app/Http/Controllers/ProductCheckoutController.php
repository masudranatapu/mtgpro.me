<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotifyMail;
use App\Mail\AllMail;
use App\Mail\SendEmailInvoiceAdmin;
use App\Models\Config;
use App\Models\EmailTemplate;
use App\Models\Gateway;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Stripe\StripeClient;

class ProductCheckoutController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function checkout()
    {
        $user = User::find(Auth::id());
        $config = Config::all();
        $gateways = Gateway::where('status', 1)->get();
        $products = Session::get('cart');
        return view('shop.product_checkout', compact('user', 'config', 'gateways', 'products'));
    }


    public function orderCheckout(Request $request)
    {
        try {


            $config = DB::table('config')->get();

            $userData = Auth::user();

            $settings =  getSetting();

            $totalPrice = 0;
            $totalQuantity = 0;
            $shipingTotal = 0;
            if (session()->has('cart')) {
                # code...
                foreach (session('cart') as $id => $details) {
                    $totalPrice += $details['price'] * $details['quantity'];
                    $totalQuantity += $details['quantity'];
                    $shipingTotal += $details['shipping_cost'];
                }
                $vat = ($totalPrice * $config[25]->config_value) / 100;

                if (session()->has('coupon')) {
                    if (session('coupon')->discount_type == '0') {

                        $totalPrice = $totalPrice - session('coupon')->amount;
                    } elseif (session('coupon')->discount_type == '1') {

                        $totalPrice = $totalPrice - ($totalPrice * session('coupon')->amount) / 100;
                    }
                }

                if (!session()->has('shiping')) {
                    $shipingTotal = 0;
                }

                // $stripe = new StripeClient($config[10]->config_value);
                Stripe::setApiKey($config[10]->config_value);
                // $stripe = new StripeClient($request->stripeToken);
                $charge = Charge::create([
                    "amount"        =>  $totalPrice + $shipingTotal + $vat,
                    "currency"      => $config[1]->config_value,
                    "source"        => "tok_visa",
                    "description"   => env('APP_NAME'),
                ]);



                if($userData) {
                    DB::table('users')->where('id', $userData->id)->update([
                        'billing_name'          => $request->billing_name,
                        'billing_address'       => $request->billing_address,
                        'billing_city'          => $request->billing_city,
                        'billing_state'         => $request->billing_state,
                        'billing_zipcode'       => $request->billing_zipcode,
                        'billing_country'       => $request->billing_country,
                        'billing_phone'         => $request->billing_phone,
                        'billing_email'         => $request->billing_email,
                    ]);
                }else {

                    $plan = DB::table('plans')->where('is_free', 1)->where('status', 1)->latest()->first();

                    $username =  uniqid().$request->billing_name;
                    $term_days                  = $plan->validity;

                    $newuser = DB::table('users')->insertGetId([

                        'name'                  => $request->billing_name,
                        'email'                 => $request->billing_email,
                        'username'              => $username,
                        'role_id'               => 2,
                        'user_type'             => 2,
                        'password'              => Hash::make('password'),
                        'billing_name'          => $request->billing_name,
                        'billing_address'       => $request->billing_address,
                        'billing_city'          => $request->billing_city,
                        'billing_state'         => $request->billing_state,
                        'billing_zipcode'       => $request->billing_zipcode,
                        'billing_country'       => $request->billing_country,
                        'billing_phone'         => $request->billing_phone,
                        'billing_email'         => $request->billing_email,

                        'plan_id'               => $plan->id,
                        'plan_details'          => json_encode($plan),
                        'plan_validity'         => Carbon::now()->addDays($plan->validity),
                        'plan_activation_date'  => Carbon::now(),
                        'term'                  => $term_days,

                    ]);

                }

                $order_Number = uniqid();

                $order = new Order();
                $order->order_number = $order_Number;
                $order->quantity = $totalQuantity;

                if (session()->has('coupon')) {
                    $order->coupon_discount = session('coupon')->amount;
                    $order->coupon_id = session('coupon')->id;
                } else {
                    $order->coupon_discount = 0;
                    $order->coupon_id = null;
                }

                $order->total_price = $totalPrice;
                $order->payment_fee = 0;
                $order->vat = $vat;
                $order->shipping_cost = $shipingTotal;
                $order->grand_total = $totalPrice + $shipingTotal + $vat;

                if (session()->has('coupon')) {
                    if (session('coupon')->discount_type == '1') {
                        $order->discount_percentage = session('coupon')->amount;
                        $order->discount = ($totalPrice * session('coupon')->amount) / 100;
                    } elseif (session('coupon')->discount_type == '0') {
                        $order->discount = session('coupon')->amount;
                    }
                }

                $order->user_id = $userData->id ?? $newuser;
                $order->order_date = now();
                $order->payment_method = "Stripe";
                $order->payment_status = $charge->status == "succeeded" ? true : false;
                $order->status = 1;
                $order->type = "Product purchase";
                $order->save();

                foreach (session('cart') as $id => $details) {

                    $prderProducts = new OrderDetails();
                    $prderProducts->order_id = $order->id;
                    $prderProducts->product_id = $id;
                    $prderProducts->quantity = $details['quantity'];
                    $prderProducts->unit_price = $details['price'];
                    $prderProducts->free_credit = 0;
                    $prderProducts->created_by = $userData->id ?? $newuser;
                    $prderProducts->updated_at = now();
                    $prderProducts->save();
                }


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
                $invoice_details['billing_address_two']         = $request->billing_address_two;
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

                $invoice_details['invoice_amount']              = $charge->balance_transaction;
                $invoice_details['subtotal']                    = $charge->balance_transaction;
                $invoice_details['tax_amount']                  = 0;

                $transaction = new Transaction();
                $transaction->invoice_number        = uniqid();
                $transaction->transaction_date      = date('Y-m-d H:i:s');
                $transaction->transaction_id        = $charge->balance_transaction;
                $transaction->user_id               = $userData->id ?? $newuser;
                $transaction->order_id              = $order->id;
                $transaction->desciption            = "from order " . $order->id;
                $transaction->payment_gateway_name  = "Stripe";
                $transaction->transaction_amount    = $charge->amount;
                $transaction->transaction_currency  = $charge->currency;
                $transaction->invoice_details       = json_encode($invoice_details);
                $transaction->payment_status        = "Success";
                $transaction->created_at            = Carbon::now();
                $transaction->save();
                //update user
            } else {
                Toastr::error(trans('No Product In the cart'));
                return redirect()->route('home');
            }
        } catch (Exception $error) {
            dd($error);
            Toastr::error(trans('"Something went wrong!'));
            return redirect()->back();
        }

        Toastr::success(trans('Product purchase successfully done!'));
        Session::forget('cart');
        if (session()->has('coupon')) {
            Session::forget('coupon');
        }

        Mail::to($request->billing_email)->send(new \App\Mail\ProductOrderInvoice($transaction, $order));
        [$content, $subject] = $this->productPurchaseMail($transaction);
        Mail::to($request->billing_email)->send(new AllMail($content, $subject));


        $adminNotifySubject = "Product purchase notification";
        $adminNotifyContent = $request->billing_name . " has purchased products.";

        Mail::to($settings->support_email)->send(new AdminNotifyMail($adminNotifySubject, $adminNotifyContent));
        Mail::to($settings->support_email)->send(new SendEmailInvoiceAdmin($transaction, $order));

        if($userData) {
            return redirect()->route('user.orders.invoice', ['id' => $order->id]);
        }else {
            return redirect()->route('guest.orders.invoice', ['id' => $order->id]);
        }
    }


    public function productPurchaseMail(Transaction $transaction)
    {
        $user = User::find($transaction->user_id);
        $setting = Config::first();


        $tempete = EmailTemplate::where('slug', 'product-purchase')->first();

        $content = $tempete->body;

        $content = preg_replace("/{{site_title}}/", $setting->config_value, $content);


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
