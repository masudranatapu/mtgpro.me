<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use App\Models\Plan;
use App\Models\User;
use App\Models\Order;
use App\Models\Currency;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\MarketingMaterials;
use App\Http\Controllers\Controller;
use App\Models\BusinessCard;
use App\Models\Config;
use App\Models\HistoryCardBrowsing;
use App\Models\HistoryCardDownload;
use App\Models\HistoryQrDownload;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class DashboardControler extends Controller
{


    protected $plan;
    protected $transection, $settings, $resp;

    public function __construct(
        Plan $plan,
        Transaction $transection
    ) {
        $this->middleware('auth');
        $this->settings = getSetting();
        $this->plan         = $plan;
        $this->transection  = $transection;
    }



    public function getIndex(Request $request)
    {

        return view('user.dashboard');
    }

    public function getInsights(Request $request)
    {
        $user_id = Auth::id();
        $userCards = BusinessCard::where('user_id', Auth::id())->pluck('id')->toArray();

        $data = [];
        $data['total_connect'] = DB::table('connects')->where('user_id', $user_id)->count();
        $data['total_card_view'] = HistoryCardBrowsing::with('hasCard')->whereIn('card_id', $userCards)->count();
        $data['total_contact_download'] = HistoryCardDownload::whereIn('card_id', $userCards)->count();
        $data['total_qrcode_download'] = HistoryQrDownload::whereIn('card_id', $userCards)->count();
        $data['total_card'] = DB::table('business_cards')->where('user_id', $user_id)->count();
        $data['current_plan'] = DB::table('users')->select('plans.plan_name')->join('plans', 'users.plan_id', '=', 'plans.id')->where('users.id', Auth::user()->id)->first();

        $total_card_share = 0;

        return view('user.insights', compact('data'));
    }


    public function viewHistory(Request $request)
    {

        $userCards = BusinessCard::where('user_id', Auth::id())->pluck('id')->toArray();
        $histories = HistoryCardBrowsing::with('hasCard')->whereIn('card_id', $userCards)->paginate(10);
        return view('user.card_view_history', compact('histories'));
    }

    public function downloadHistory(Request $request)
    {
        $userCards = BusinessCard::where('user_id', Auth::id())->pluck('id')->toArray();
        $histories = HistoryCardDownload::whereIn('card_id', $userCards)->paginate(10);
        return view('user.card_download_history', compact('histories'));
    }


    public function qrdownloadHistory()
    {
        $userCards = BusinessCard::where('user_id', Auth::id())->pluck('id')->toArray();
        $histories = HistoryQrDownload::whereIn('card_id', $userCards)->paginate(10);
        return view('user.qr_download_history', compact('histories'));
    }

    public function getSetting(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);

        $check = Plan::where('id', $user->plan_id)->first();

        $plan = DB::table('plans')
            ->select('plans.*')
            ->leftJoin('transactions', 'transactions.plan_id', '=', 'plans.id')
            ->where('plans.id', $user->plan_id)
            ->orderBy('transactions.id', 'DESC')
            ->first();


        if (($plan == null) && ($check->is_free == 0)) {
            return redirect()->route('user.plans');
        }

        $transections =  $this->transection->getTransectionList($request);
        return view('user.setting', compact('user', 'plan', 'transections'));
    }

    public function getPlanList(Request $request)
    {
        $this->resp =  $this->plan->getPlanList($request);
        $plans =  $this->resp->data;
        $user_plan = Plan::where('id', Auth::user()->plan_id)->first();
        $currency = Currency::where('is_default', 1)->first();
        $user = User::findOrFail(Auth::user()->id);
        return view('user.plan.index', compact('user_plan', 'plans', 'currency', 'user'));
    }

    public function getFreeMarketing(Request $request)
    {
        $marketing_materials = MarketingMaterials::orderBy('order_id', 'asc')->paginate(6);
        return view('user.marketing_materials', compact('marketing_materials'));
    }

    public function marketingMaterialDetails($id)
    {
        $marketing_materials_details = MarketingMaterials::find($id);
        return view('user.marketing_materials_details', compact('marketing_materials_details'));
    }

    public function getCalculator(Request $request)
    {

        return view('user.mortgage-calculator');
    }

    public function myOrder()
    {

        $productOrders = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name as user_name')
            ->where('user_id', auth::id())
            ->orderBy('id', 'desc')->get();

        return view('user.my-order', compact('productOrders'));
    }

    public function invoice($id)
    {
        $order = Order::with('hasCoupon')->where('order_number', $id)->first();
        $config = Config::all();
        if($order) {
            return view('user.user-invoice', compact('order', 'config'));
        }else {
            Toastr::error('Order info not defind!');
            return redirect()->route('user.card');
        }
    }

    public function suggestFeature()
    {
        return view('user.suggest-feature');
    }
}
