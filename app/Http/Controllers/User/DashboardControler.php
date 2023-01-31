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
use App\Models\HistoryCardBrowsing;
use App\Models\HistoryCardDownload;
use Illuminate\Support\Facades\Auth;

class DashboardControler extends Controller
{


    protected $plan;
    protected $transection;

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
        $data = [];
        $data['total_connect'] = DB::table('connects')->where('user_id', $user_id)->count();
        $data['total_card_view'] = DB::table('business_cards')->where('user_id', $user_id)->sum('total_hit');
        $data['total_contact_download'] = DB::table('business_cards')->where('user_id', $user_id)->sum('total_vcf_download');
        $data['total_qrcode_download'] = DB::table('business_cards')->where('user_id', $user_id)->sum('total_qr_download');
        $data['total_card'] = DB::table('business_cards')->where('user_id', $user_id)->count();
        $data['current_plan'] = DB::table('users')->select('plans.plan_name')->join('plans', 'users.plan_id', '=', 'plans.id')->where('users.id', Auth::user()->id)->first();

        $total_card_share = 0;

        return view('user.insights', compact('data'));
    }


    public function viewHistory(Request $request)
    {
        $histories = HistoryCardBrowsing::with('hasCard')->where('username', Auth::user()->username)->paginate(10);

        return view('user.card_view_history', compact('histories'));
    }

    public function downloadHistory(Request $request)
    {
        $histories = HistoryCardDownload::where('username', Auth::user()->username)->paginate();
        return view('user.card_download_history', compact('histories'));
    }

    public function getSetting(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $plan = DB::table('plans')
            // ->select('')
            ->leftJoin('transactions', 'transactions.plan_id', '=', 'plans.id')
            ->where('plans.id', $user->plan_id)
            ->orderBy('transactions.id', 'DESC')
            ->first();
        if ($plan == null) {
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
        $order = Order::find($id);

        return view('user.user-invoice', compact('order'));
    }

    public function suggestFeature()
    {
        return view('user.suggest-feature');
    }
}
