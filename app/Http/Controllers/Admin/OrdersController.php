<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

use App\Http\Controllers\Controller;
use App\Mail\AllMail;
use App\Models\Config;
use App\Models\EmailTemplate;
use App\Models\Order;
use App\Models\ProductOrders;
use App\Models\Setting;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function index()
    {

        $productOrders = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name as user_name')
            ->orderBy('id', 'desc')->get();

        return view('admin.orders.index', compact('productOrders'));
    }

    public function edit($id)
    {

        $productOrder = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name as user_name')
            ->where('orders.id', $id)
            ->first();

        $trnasection = Transaction::where('order_id', $id)->first('invoice_details');

        $trnasectionDetail = json_decode($trnasection->invoice_details, true);





        return view('admin.orders.edit', compact('productOrder', 'trnasectionDetail'));
    }

    public function update(Request $request, $id)
    {

        DB::beginTransaction();

        $this->validate($request, [
            'order_number'  => 'required',
            'quantity'      => 'required',
            'discount'      => 'required',
            'total_price'   => 'required',
            'payment_fee'   => 'required',
            'grand_total'   => 'required',
            'user_id'       => 'nullable',
            'order_date'    => 'required',
            'payment_method'  => 'required',
            // 'payment_status'  => 'required',
            'type'           => 'required',
        ]);

        try {
            $config = DB::table('config')->get();

            $productOrder = Order::find($id);

            $productOrder->order_number = $request->order_number;
            $productOrder->quantity =       $request->quantity;
            $productOrder->discount =       $request->discount;
            $productOrder->total_price =    $request->total_price;
            $productOrder->payment_fee =    $request->payment_fee;
            $productOrder->grand_total =    $request->grand_total;
            $productOrder->user_id =        $request->user_id;
            $productOrder->order_date =     date('Y-m-d', strtotime($request->order_date));
            $productOrder->payment_method = $request->payment_method;
            // $productOrder->payment_status = $request->payment_status;
            $productOrder->type = $request->type;
            $productOrder->save();

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

            $invoice_details['invoice_amount']              = $productOrder->total_price;
            $invoice_details['subtotal']                    = $productOrder->total_price;
            $invoice_details['tax_amount']                  = 0;


            $trnasection = Transaction::where('order_id', $id)->first();
            $trnasection->invoice_details = json_encode($invoice_details);
            $trnasection->save();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error(trans('Data not Updated !'), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.orders.edit', $id);
        }
        DB::commit();
        Toastr::success(trans('Data Successfully Updatd !'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.orders');
    }


    public function invoice($id)
    {
        $order = Order::find($id);
        return view('admin.orders.invoice', compact('order'));
    }

    public function statusChange(Request $request, Order $order)
    {

        $order->status = $request->status;
        $order->save();
        Toastr::success(trans('Order Status Chanage Successfully'), 'Success');

        $user = User::find($order->user_id);

        [$content, $subject] = $this->orderStatusChangeMail($order);
        Log::alert($content);
        Mail::to($user->email)->send(new AllMail($content, $subject));
        return redirect()->back();
    }


    public function orderStatusChangeMail(Order $order)
    {
        $order->load('transaction');
        $status = "";

        if (isset($order)) {
            if ($order->status = 1) {
                $status = "on The Way";
            } else if ($order->status = 2) {
                $status = "Deliverd";
            }

            $user = User::find($order->user_id);

            $tempete = EmailTemplate::where('slug', 'order-status-change')->first();

            $content = $tempete->body;

            $setting = Config::first();

            $genarelSetting = Setting::first();

            $imagePath = public_path($genarelSetting->site_logo);
            $ext = pathinfo($imagePath, PATHINFO_EXTENSION);

            $imgbinary = fread(fopen($imagePath, "r"), filesize($imagePath));

            $base64 = 'data:image/' . $ext . ';base64,' . base64_encode($imgbinary);


            $imageBase = '<a href="' . route('home') . '"><img src="' . $base64 . '" alt="mtgprto" style="width:30%;" ></a>';
            $siteTitle = '<a href="' . route('home') . '">' . $setting->config_value . '</a>';


            $content = preg_replace("/{{site_name}}/", $siteTitle, $content);
            $content = preg_replace("/{{site_logo}}/", $imageBase, $content);


            if (isset($user->username)) {

                $content = preg_replace("/{{user_name}}/", $user->username, $content);
            }

            if (isset($order->order_number)) {

                $content = preg_replace("/{{order_number}}/", $order->order_number, $content);
            }
            if (isset($order->status)) {

                $content = preg_replace("/{{order_status}}/", $status, $content);
            }
        }
        return [$content, $tempete->subject];
    }
}
