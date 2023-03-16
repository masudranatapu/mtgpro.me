<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BusinessCard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubscriptionController extends ResponceController
{

    protected $businesscard;
    public function __construct(
        BusinessCard $businesscard
    ) {
        $this->businesscard  = $businesscard;
    }

    public function cancelCurrentPlan()
    {
        DB::beginTransaction();
        try {
            // Carbon::now()->addDays(5);
            $config         = DB::table('config')->get();
            $user = DB::table('users')->where('id', Auth::guard('api')->user()->id)->first();
            $plan = DB::table('plans')->where('id', $user->plan_id)->first();


            $payment_data = json_decode($user->stripe_data);
            if (isset($payment_data)) {
                # code...

                $term_days = $plan->validity;
                $plan_validity = \Carbon\Carbon::now()->addDays($plan->validity);
                $stripe = new \Stripe\StripeClient($config[10]->config_value);

                //Check subscription
                $check_subscription = $stripe->subscriptions->retrieve(
                    $payment_data->id,
                    []
                );
                if ($check_subscription->status == 'active') {
                    //Unsubscription Stripe
                    $stripe = $stripe->subscriptions->cancel(
                        $payment_data->id,
                        []
                    );
                }

                $this->businesscard->updateDataByCuurentPlanApi($plan->id);
                $user = User::where('id', Auth::guard('api')->user()->id)->update([
                    'plan_id' => $plan->id,
                    'paid_with' => NULL,
                    'term' => $term_days,
                    'plan_validity' => $plan_validity,
                    'plan_activation_date' => \Carbon\Carbon::now(),
                    'plan_details' => json_encode($plan),
                    'stripe_data' => NULL,
                    'paypal_data' => NULL,
                    'stripe_customer_id' => NULL,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            } else {
                return $this->sendError('Unsubscription Error', 'Your already unsubscription from the plan');
            }
        } catch (\Exception $e) {

            DB::rollback();
            return $this->sendError('Exception Error', 'Something\'s wrong. please check again');
        }
        DB::commit();
        return $this->sendResponse(200, "Plan successfully changed", $user, true, '');
    }
}
