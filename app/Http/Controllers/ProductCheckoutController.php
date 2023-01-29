<?php

namespace App\Http\Controllers;

use App\Models\Config;
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


            $totalPrice = 0;
            $totalQuantity = 0;

            foreach (session('cart') as $id => $details) {
                $totalPrice += $details['price'] * $details['quantity'];
                $totalQuantity += $details['quantity'];
            }





            $stripe = new StripeClient($config[10]->config_value);
            Stripe::setApiKey("sk_test_51LtUkeIH2i6FoGaEZ3Y90HVXatZKimap3Wsnbw72syI5PFoV9KtEAwGf6788R5LuLnfpCXXq9DOSo7REOtqjG8Vp00FIBEPP38");
            $stripe = new StripeClient($request->stripeToken);
            $charge = Charge::create([
                "amount" =>  $totalPrice,
                "currency" => $config[1]->config_value,
                "source" => "tok_visa",
                "description" => env('APP_NAME'),
            ]);

            $order_Number = 1000;
            $previous_order_Number = Order::orderBy('order_number', 'desc')->first();

            if (isset($previous_order_Number)) {
                $order_Number = $previous_order_Number->order_number + 1;
            }


            $order = new Order();
            $order->order_number = $order_Number;
            $order->quantity = $totalQuantity;
            $order->discount = 0;
            $order->coupon_discount = 0;
            $order->total_price = $totalPrice;
            $order->payment_fee = 0;
            $order->vat = 0;
            $order->grand_total = $totalPrice;
            $order->discount_percentage = 0;
            $order->user_id = Auth::id();
            $order->order_date = now();
            $order->payment_method = "Stripe";
            $order->payment_status = $charge->status == "success" ? true : false;
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
                $prderProducts->created_by = Auth::id();
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
            $transaction->user_id               = Auth::user()->id;
            $transaction->plan_id               = null;
            $transaction->order_id               = $order->id;
            $transaction->desciption            = "from order " . $order->id;
            $transaction->payment_gateway_name  = "Stripe";
            $transaction->transaction_amount    = $charge->amount;
            $transaction->transaction_currency  = $charge->currency;
            $transaction->invoice_details       = json_encode($invoice_details);
            $transaction->payment_status        = "Success";
            $transaction->save();
            //update user
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
        } catch (Exception $error) {
            dd($error);
            Toastr::error(trans('"Something went wrong!'));
            return redirect()->back();
        }
        Toastr::success(trans('Product purchase successfully done!'));
        Session::forget('cart');
        return redirect()->route('user.myorder', ['id' => $order->id]);
    }
}
