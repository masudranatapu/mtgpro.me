<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CountryHelper;
use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\BusinessCard;
use App\Models\Config;
use Illuminate\Http\Request;
use App\Models\BusinessField;
use App\Mail\SendEmailInvoice;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Mail\AllMail;
use App\Models\EmailTemplate;
use App\Models\Order;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */

    public function users(Request $request)
    {
        $users = User::where('user_type', '2')->orderBy('created_at', 'desc')->where('status', '!=', 2);
        if ($request->date) {
            $users->whereDate('created_at', '=', date('Y-m-d', strtotime($request->date)));
        }
        $users = $users->orderBy('users.name', 'ASC')->get();
        $settings = Setting::where('status', 1)->first();
        $config = DB::table('config')->get();

        return view('admin.users.users', compact('users', 'settings', 'config'));
    }

    // View User
    public function viewUser(Request $request, $id)
    {
        $user_details = User::where('id', $id)->first();
        if ($user_details == null) {
            return view('errors.404');
        } else {
            $user_cards = BusinessCard::where('user_id', $id)->where('status', '!=', 2)->orderBy('card_url', 'asc')->get();
            $settings = Setting::where('status', 1)->first();
            return view('admin.users.view-user', compact('user_details', 'user_cards', 'settings'));
        }
    }

    // Edit User
    public function editUser(Request $request, $id)
    {
        $user_details = User::where('id', $id)->first();
        $settings = Setting::where('status', 1)->first();
        if ($user_details == null) {
            return view('errors.404');
        } else {
            return view('admin.users.edit-user', compact('user_details', 'settings'));
        }
    }


    // Update User
    public function updateUser(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'full_name' => 'required',
                'email' => 'required'
            ]);
            $user = User::where('id', $request->user_id)->first();
            $user->email = $request->email;
            $user->name = $request->full_name;
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->plan_validity = $request->plan_validity;
            if (isset($request->no_of_vcards)) {
                $plan_details = json_decode($user->plan_details);
                $plan_array = [];
                foreach ($plan_details as $key => $value) {
                    if ($key == 'no_of_vcards') {
                        $plan_array[$key] = $request->no_of_vcards;
                    } else {
                        $plan_array[$key] = $value;
                    }
                }
                $user->plan_details = json_encode($plan_array);
            }
            $user->billing_address = $request->billing_address;
            $user->billing_city = $request->billing_city;
            $user->billing_state = $request->billing_state;
            $user->billing_zipcode = $request->billing_zipcode;
            $user->billing_country = $request->billing_country;
            $user->phone = $request->phone;
            $user->designation = $request->designation;
            $user->company_name = $request->company_name;
            $user->company_websitelink = $request->company_websitelink;
            $user->status = $request->status;
            $user->user_type = $request->user_type;
            $user->update();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::error(trans('User not updated!'), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.users');
        }
        DB::commit();
        Toastr::success(trans('User updated Successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.users');
    }

    // Change user plan
    public function ChangeUserPlan(Request $request, $id)
    {
        $user_details = User::where('id', $id)->first();
        $plans = Plan::latest()->get();
        $settings = Setting::where('status', 1)->first();
        $config = DB::table('config')->get();
        if ($plans == null) {
            return view('errors.404');
        } else {
            return view('admin.users.change-plan', compact('user_details', 'plans', 'settings', 'config'));
        }
    }

    // Upgrade user plan
    public function UpdateUserPlan(Request $request)
    {
        $config = DB::table('config')->get();
        $user_details = User::where('id', $request->user_id)->first();
        // dd($user_details);
        $plan_data = Plan::where('plan_id', $request->plan_id)->first();
        $term_days = $plan_data->validity;

        $amountToBePaid = ((int)($plan_data->plan_price) * (int)($config[25]->config_value) / 100) + (int)($plan_data->plan_price);

        if (!empty($user_details) && $user_details->plan_validity == "") {

            $plan_validity = Carbon::now();
            $plan_validity->addDays($term_days);

            $invoice_count = Transaction::where("invoice_prefix", $config[15]->config_value)->count();
            $invoice_number = $invoice_count + 1;

            $gobiz_transaction_id = uniqid();

            $invoice_details = [];

            $invoice_details['from_billing_name'] = $config[16]->config_value;
            $invoice_details['from_billing_address'] = $config[19]->config_value;
            $invoice_details['from_billing_city'] = $config[20]->config_value;
            $invoice_details['from_billing_state'] = $config[21]->config_value;
            $invoice_details['from_billing_zipcode'] = $config[22]->config_value;
            $invoice_details['from_billing_country'] = $config[23]->config_value;
            $invoice_details['from_vat_number'] = $config[26]->config_value;
            $invoice_details['from_billing_phone'] = $config[18]->config_value;
            $invoice_details['from_billing_email'] = $config[17]->config_value;
            $invoice_details['to_billing_name'] = $user_details->billing_name;
            $invoice_details['to_billing_address'] = $user_details->billing_address;
            $invoice_details['to_billing_city'] = $user_details->billing_city;
            $invoice_details['to_billing_state'] = $user_details->billing_state;
            $invoice_details['to_billing_zipcode'] = $user_details->billing_zipcode;
            $invoice_details['to_billing_country'] = $user_details->billing_country;
            $invoice_details['to_billing_phone'] = $user_details->billing_phone;
            $invoice_details['to_billing_email'] = $user_details->billing_email;
            $invoice_details['to_vat_number'] = $user_details->vat_number;
            $invoice_details['tax_name'] = $config[24]->config_value;
            $invoice_details['tax_type'] = $config[14]->config_value;
            $invoice_details['tax_value'] = $config[25]->config_value;
            $invoice_details['invoice_amount'] = $amountToBePaid;
            $invoice_details['subtotal'] = $plan_data->plan_price;
            $invoice_details['tax_amount'] = (int)($plan_data->plan_price) * (int)($config[25]->config_value) / 100;

            // If order is created from stripe
            $transaction = new Transaction();
            $transaction->gobiz_transaction_id = $gobiz_transaction_id;
            $transaction->transaction_date = now();
            $transaction->transaction_id = "";
            $transaction->user_id = $user_details->id;
            $transaction->plan_id = $plan_data->id;
            $transaction->desciption = $plan_data->plan_price . " Plan";
            $transaction->payment_gateway_name = "Offline";
            $transaction->transaction_amount = $amountToBePaid;
            $transaction->invoice_prefix = $config[15]->config_value;
            $transaction->invoice_number = $invoice_number;
            $transaction->transaction_currency = $config[1]->config_value;
            $transaction->invoice_details = json_encode($invoice_details);
            $transaction->payment_status = "SUCCESS";
            $transaction->created_at = Auth::id();
            $transaction->save();

            User::where('id', $user_details->id)->update([
                'plan_id' => $plan_data->id,
                'term' => $term_days,
                'plan_validity' => $plan_validity,
                'plan_activation_date' => now(),
                'plan_details' => $plan_data
            ]);

            $details = [
                'from_billing_name' => $config[16]->config_value,
                'from_billing_email' => $config[17]->config_value,
                'from_billing_address' => $config[19]->config_value,
                'from_billing_city' => $config[20]->config_value,
                'from_billing_state' => $config[21]->config_value,
                'from_billing_country' => $config[23]->config_value,
                'from_billing_zipcode' => $config[22]->config_value,
                'gobiz_transaction_id' => $gobiz_transaction_id,
                'to_billing_name' => $user_details->billing_name,
                'invoice_currency' => $config[1]->config_value,
                'invoice_amount' => $plan_data->plan_price,
                'invoice_id' => $config[15]->config_value . $invoice_number,
                'invoice_date' => Carbon::now(),
                'description' => $plan_data->plan_name . ' plan Upgrade',
                'email_heading' => $config[27]->config_value,
                'email_footer' => $config[28]->config_value,
            ];

            try {

                // Mail::to($user_details->email)->send(new SendEmailInvoice($details));
                [$content, $subject] = $this->changeUserPalnMail($user_details, $plan_data);

                Mail::to($user_details->email)->send(new AllMail($content, $subject));
            } catch (\Exception $e) {
                dd($e);
            }
            Toastr::success(trans('Plan changed success!'), 'Title', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.users');

        } else {

            $message = "";
            if ($user_details->plan_id == $request->plan_id) {



                // Check if plan validity is expired or not.
                // $plan_validity = Carbon::createFromFormat('Y-m-d H:s:i', $user_details->plan_validity);
                $plan_validity = date('Y-m-d H:s:i', strtotime($user_details->plan_validity));

                $current_date = Carbon::now();
                $remaining_days = $current_date->diffInDays($plan_validity, false);

                if ($remaining_days > 0) {
                    $plan_validity = Carbon::parse($user_details->plan_validity);
                    $plan_validity->addDays($term_days);
                    $message = "Plan changed successfully!";
                } else {
                    $plan_validity = Carbon::now();
                    $plan_validity->addDays($term_days);
                    $message = "Plan changed successfully!";
                }
            } else {

                // Making all cards inactive, For Plan change
                BusinessCard::where('user_id', $user_details->user_id)->update([
                    'status' => '0',
                ]);

                $plan_validity = Carbon::now();
                $plan_validity->addDays($term_days);
                $message = "Plan changed successfully!";
            }

            $invoice_count = Transaction::where("invoice_prefix", $config[15]->config_value)->count();
            $invoice_number = $invoice_count + 1;

            $gobiz_transaction_id = uniqid();

            $invoice_details = [];

            $invoice_details['from_billing_name'] = $config[16]->config_value;
            $invoice_details['from_billing_address'] = $config[19]->config_value;
            $invoice_details['from_billing_city'] = $config[20]->config_value;
            $invoice_details['from_billing_state'] = $config[21]->config_value;
            $invoice_details['from_billing_zipcode'] = $config[22]->config_value;
            $invoice_details['from_billing_country'] = $config[23]->config_value;
            $invoice_details['from_vat_number'] = $config[26]->config_value;
            $invoice_details['from_billing_phone'] = $config[18]->config_value;
            $invoice_details['from_billing_email'] = $config[17]->config_value;
            $invoice_details['to_billing_name'] = $user_details->billing_name;
            $invoice_details['to_billing_address'] = $user_details->billing_address;
            $invoice_details['to_billing_city'] = $user_details->billing_city;
            $invoice_details['to_billing_state'] = $user_details->billing_state;
            $invoice_details['to_billing_zipcode'] = $user_details->billing_zipcode;
            $invoice_details['to_billing_country'] = $user_details->billing_country;
            $invoice_details['to_billing_phone'] = $user_details->billing_phone;
            $invoice_details['to_billing_email'] = $user_details->billing_email;
            $invoice_details['to_vat_number'] = $user_details->vat_number;
            $invoice_details['tax_name'] = $config[24]->config_value;
            $invoice_details['tax_type'] = $config[14]->config_value;
            $invoice_details['tax_value'] = $config[25]->config_value;
            $invoice_details['invoice_amount'] = $amountToBePaid;
            $invoice_details['subtotal'] = $plan_data->plan_price;
            $invoice_details['tax_amount'] = (int)($plan_data->plan_price) * (int)($config[25]->config_value) / 100;

            // If order is created from stripe
            $transaction = new Transaction();
            $transaction->gobiz_transaction_id = $gobiz_transaction_id;
            $transaction->transaction_date = now();
            $transaction->transaction_id = "";
            $transaction->user_id = $user_details->id;
            $transaction->plan_id = $plan_data->id;
            $transaction->desciption = $plan_data->plan_name . " Plan";
            $transaction->payment_gateway_name = "Offline";
            $transaction->transaction_amount = $amountToBePaid;
            $transaction->invoice_prefix = $config[15]->config_value;
            $transaction->invoice_number = $invoice_number;
            $transaction->transaction_currency = $config[1]->config_value;
            $transaction->invoice_details = json_encode($invoice_details);
            $transaction->payment_status = "SUCCESS";
            $transaction->created_at = Auth::id();
            $transaction->save();

            User::where('id', $user_details->id)->update([
                'plan_id' => $plan_data->id,
                'term' => $term_days,
                'plan_validity' => $plan_validity,
                'plan_activation_date' => now(),
                'plan_details' => $plan_data
            ]);

            $details = [
                'from_billing_name' => $config[16]->config_value,
                'from_billing_email' => $config[17]->config_value,
                'from_billing_address' => $config[19]->config_value,
                'from_billing_city' => $config[20]->config_value,
                'from_billing_state' => $config[21]->config_value,
                'from_billing_country' => $config[23]->config_value,
                'from_billing_zipcode' => $config[22]->config_value,
                'gobiz_transaction_id' => $gobiz_transaction_id,
                'to_billing_name' => $user_details->billing_name,
                'invoice_currency' => $config[1]->config_value,
                'invoice_amount' => $plan_data->plan_price,
                'invoice_id' => $config[15]->config_value . $invoice_number,
                'invoice_date' => Carbon::now(),
                'description' => $plan_data->plan_name . ' plan Upgrade',
                'email_heading' => $config[27]->config_value,
                'email_footer' => $config[28]->config_value,
            ];

            try {
                [$content, $subject] = $this->changeUserPalnMail($user_details, $plan_data);

                Mail::to($user_details->email)->send(new AllMail($content, $subject));

                // Mail::to($user_details->email)->send(new SendEmailInvoice($details));
            } catch (\Exception $e) {
                dd($e);
            }
            Toastr::success($message);
            return redirect()->route('admin.change.user.plan', $request->user_id);
        }
    }

    // Update status
    public function updateStatus(Request $request)
    {
        $user_details = User::where('id', $request->query('id'))->first();
        if ($user_details->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        User::where('id', $request->query('id'))->update(['status' => $status]);
        Toastr::success(trans('User Status Updated Successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.users');
    }

    // Delete User
    public function deleteUser(Request $request)
    {
        $user = User::where('id', $request->query('id'))->first();

        if ($user->status == 2) {
            //Need to delete permanently with others data
            $user_cards = BusinessCard::where('user_id', $user->id)->get();
            foreach ($user_cards as $key => $value) {
                BusinessField::where('card_id', $value->id)->delete();
            }
            Transaction::where('user_id', $user->id)->delete();
            BusinessCard::where('user_id', $user->id)->delete();
            User::where('id', $user->id)->delete();
        } else {
            //Need to change users and users card move to deleted
            $user_cards = BusinessCard::where('user_id', $user->id)->get();
            foreach ($user_cards as $key => $value) {
                BusinessField::where('card_id', $value->id)->update([
                    'status' => 2,
                ]);
            }
            BusinessCard::where('user_id', $user->id)->update([
                'status' => 2,
                'deleted_at' => date('Y-m-d H:i:s'),
                'deleted_by' => Auth::user()->id
            ]);
            DB::table('users')->where('id', $user->id)->update([
                'email' => $user->id . '-' . $user->email,
                'status' => 2,
                'deleted_at' => date('Y-m-d H:i:s'),
                'deleted_by' => Auth::user()->id
            ]);

            Order::where('user_id', $user->id)->delete();
        }
        Toastr::success(trans('User deleted Successfully!!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.users');
    }

    // Login As User
    public function authAs(Request $request, $id)
    {
        $user_details = User::where('id', $id)->where('status', 1)->first();
        if (isset($user_details)) {
            Auth::loginUsingId($user_details->id);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('admin.users')->with('info', 'User account was not found!');
        }
    }

    public function getTrashList()
    {
        $users = User::where('user_type', '2')->orderBy('deleted_at', 'desc')->where('status', 2)->get();

        $settings = Setting::where('status', 1)->first();
        $config = DB::table('config')->get();
        return view('admin.users.trash-user', compact('users', 'settings', 'config'));
    }



    public function activeStatus(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if (empty($user)) {
            Toastr::error(trans('Account not found !'), 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        $trim_email = trim($user->email, $user->id . '-');
        $check_exist = User::where('email', $trim_email)->where('id', '!=', $user->id)->first();
        if (!empty($check_exist)) {
            Toastr::error(trans('Already have an account by this email address !'), 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }
        $user_cards = BusinessCard::where('user_id', $id)->get();
        foreach ($user_cards as $key => $value) {
            BusinessField::where('card_id', $value->id)->where('status', 2)->update([
                'status' => 1,
            ]);
        }
        BusinessCard::where('user_id', $id)->where('status', 2)->update([
            'status' => 1,
            'deleted_at' => NULL,
            'deleted_by' => NULL
        ]);
        DB::table('users')->where('id', $id)->update([
            'email' => $trim_email,
            'status' => 1,
            'deleted_at' => NULL,
            'deleted_by' => NULL
        ]);
        Toastr::success(trans('User Status Updated Successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.users');
    }


    public function changeUserPalnMail($user, $plan)
    {
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



        $maitemplate = EmailTemplate::where('slug', "admin-plan-change")->first();
        $content = $maitemplate->body;


        if (isset($user)) {
            $user = User::find($user->id);
            $content = preg_replace("/{{subcriber}}/", $user->name, $content);
        }
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
        return [$content, $maitemplate->subject];
    }
}
