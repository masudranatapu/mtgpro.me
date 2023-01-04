<?php
namespace App\Http\Controllers\User;
use DB;
use App\Models\Plan;
use App\Models\User;
use App\Models\Currency;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardControler extends Controller
{


    protected $plan;
    protected $transection;

    public function __construct(
        Plan $plan,
        Transaction $transection
        )
    {
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
        $total_card = DB::table('business_cards')->where('user_id',$user_id)->count();
        $total_card_share = 0;

        return view('user.insights', compact('total_card','total_card_share'));
    }

    public function getSetting(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $plan = DB::table('plans')->where('id',$user->plan_id)->first();
        $transections =  $this->transection->getTransectionList($request);
        return view('user.setting',compact('user','plan','transections'));
    }

    public function getPlanList(Request $request)
    {
       $this->resp =  $this->plan->getPlanList($request);
       $plans =  $this->resp->data;
       $user_plan = Plan::where('id', Auth::user()->plan_id)->first();
       $currency = Currency::where('is_default', 1)->first();
        return view('user.plan.index', compact('user_plan','plans','currency'));
    }


}
