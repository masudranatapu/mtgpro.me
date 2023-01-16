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
        $data = [];
        $data['total_connect'] = DB::table('connects')->where('user_id',$user_id)->count();
        $data['total_card_view'] = DB::table('business_cards')->where('user_id',$user_id)->sum('total_hit');
        $data['total_contact_download'] = DB::table('business_cards')->where('user_id',$user_id)->sum('total_vcf_download');
        $data['total_card'] = DB::table('business_cards')->where('user_id',$user_id)->count();
        $data['current_plan'] = DB::table('users')->select('plans.plan_name')->join('plans','users.plan_id','=','plans.id')->where('users.id',Auth::user()->id)->first();

        $total_card_share = 0;

        return view('user.insights', compact('data'));
    }

    public function getSetting(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $plan = DB::table('plans')
        // ->select('')
        ->leftJoin('transactions','transactions.plan_id','=','plans.id')
        ->where('plans.id',$user->plan_id)
        ->orderBy('transactions.id','DESC')
        ->first();
        if($plan == null){
            return redirect()->route('user.plans');
        }
        $transections =  $this->transection->getTransectionList($request);
        return view('user.setting',compact('user','plan','transections'));
    }

    public function getPlanList(Request $request)
    {
       $this->resp =  $this->plan->getPlanList($request);
       $plans =  $this->resp->data;
       $user_plan = Plan::where('id', Auth::user()->plan_id)->first();
       $currency = Currency::where('is_default', 1)->first();
       $user = User::findOrFail(Auth::user()->id);
        return view('user.plan.index', compact('user_plan','plans','currency','user'));
    }

    public function getFreeMarketing(Request $request)
    {
        $page = DB::table('custom_pages')->where('url_slug','free-marketing-material')->first();
        if(empty($page)){
            abort(404);
        }
        return view('pages.common',compact('page'));
    }


}
