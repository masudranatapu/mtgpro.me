<?php

namespace App\Models;

use Carbon\Carbon;
use App\Traits\RepoResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use RepoResponse;

    protected $fillable = [
        'shareable'
    ];


    public function getPlanList($request, int $per_page = 20)
    {
        $data = $this->where('status', 1)->orderBy('id', 'ASC')->paginate($per_page);
        return $this->formatResponse(true, '', 'user.plans', $data);
    }


    public function planValidity($planId)
    {
        $plan = DB::table('plans')->where('id', $planId)->first();
        $term_days = $plan->validity;
        $plan_validity = Carbon::now();
        $plan_validity->addDays($term_days);
        return $plan_validity;
    }
}
