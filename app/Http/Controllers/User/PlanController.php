<?php

namespace App\Http\Controllers\User;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    protected $businessCard;
    protected $plan;
    public function __construct(
        Plan $plan
        )
        {
            $this->plan         = $plan;
            $this->settings = getSetting();
        }

    public function getPlanList(Request $request)
    {
       $this->resp =  $this->plan->getPlanList($request);
       $plans =  $this->resp->data;
       $user_plan = DB::table('plans')
    //    ->where('id', Auth::user()->plan_id)
       ->latest()->first();
        return view('user.plan.index', compact('user_plan','plans'));
    }

}
