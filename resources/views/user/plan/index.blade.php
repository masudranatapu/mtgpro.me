@extends('user.layouts.app')
@push('custom_css')
@endpush
@section('plan','active')
@section('title')
My Plans
@endsection
@section('meta_tag')@endsection
@section('content')
<div class="setting_sec section mt-4 mb-5 min_height">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-12">
                <div class="p-3 bg-white custome_shadow">
                    <div class="">
                        <h3 class="card-title">{{ __('My plan')}} <small style="font-weight: 300; font-size:12px;" >{{ __('Expiration date')}} : {{ date('d M, Y',strtotime(Auth::user()->plan_validity)) }}</small></h3>
                        <p class="text-uppercase"><b>{{$user_plan->plan_name}}</b></p>
                        <p class="plan_name">
                            @if($user_plan->is_free == 1)
                            <span>{{ __('Free Plan')}}</span>
                            @else
                            <span>{{ __('Paid Plan')}}</span>
                            @endif
                        </p>
                        <div class="card-text">
                            <a href="javascript:;" onclick="return confirm('Are you sure?')" class="btn btn-danger" title="{{ __('Cancel')}}">{{ __('Cancel')}}</a>
                            <a href="#pricing" class="btn btn-primary" title="{{ __('Upgrade')}}">{{ __('Upgrade')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing_sec pt-5 pb-5" id="pricing">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="section_title text-center mb-2">
                            <h3>{{ __('Pick Your')}} <span>{{ __('Plan')}}</span></h3>
                        </div>
                        <div class="switchBtn text-center mb-4">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="monthlyCheckedAnnualy"> <input class="form-check-input" type="checkbox" value="0" id="monthlyCheckedAnnualy" onclick="monthlyCheckedAnnualy()">
                                    {{ __('Monthly | Annual')}}</label>
                            </div>
                        </div>
                    </div>
                    @if (!empty($plans) && count($plans) > 0)
                        @foreach($plans as $plan)
                    @php
                        $planfeatures = json_decode($plan->features);
                    @endphp
                    <div class="col-md-6 col-lg-3 @if($plan->plan_type == 1) solopreneur_and_individuals  @else team_accounts @endif">
                        <div class="pricing-card card card-md">
                            <div class="card-body text-center">
                                <div class="text-capitalize text-dark font-weight-bold">  {{$plan->plan_name}}
                                </div>
                                <div class="my-3 pb-3">
                                    <div class="price">
                                        <h4 class="planpricemonthly">$ {{$plan->plan_price_monthly}} <sub> / {{ __('Monthly')}} </sub></h4>
                                        <h4 class="planpriceyearly" style="display: none;">$ {{$plan->plan_price_yearly}} <sub> / {{ __('Yearly')}} </sub></h4>
                                    </div>
                                </div>
                                <hr>
                                <ul class="list-unstyled lh-lg">
                                    @foreach($planfeatures as $features)
                                        <li>
                                            <span>{{$features}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                @if (Auth::user()->plan_id==$plan->id && $plan->is_free==1)
                                    <div class="text-center mt-4">
                                    <a href="javascript:void(0)" class="down-plan-model btn btn-danger" title="{{ __('Active Plan')}}">{{ __('Active Plan')}}</a>
                                    </div>
                                @else
                                    <div class="text-center mt-4">
                                        <a href="javascript:void(0)" class="choose-plan btn w-100" data-href="{{ route('user.checkout') }}" data-id="{{ $plan->id }}" title="{{ __('Choose plan')}}">{{ __('Choose plan')}}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal animate__animated animate__fadeIn" id="planConfirmModal" tabindex="-1" aria-labelledby="planConfirmModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <form action="{{ route('user.checkout') }}" id="choose_plan_action" method="get">
                {{-- @csrf --}}
                <label for="is_yearly" class="sr-only">{{ __('Yearly')}}</label>
                <input type="hidden" class="form-control" name="is_yearly" value="0" id="is_yearly">
                <br>
                <label for="plan_id" class="sr-only">{{ __('Plan id')}}</label>
                <input type="hidden" class="form-control" name="plan_id" value="" id="plan_id">
                <div class="modal-title">{{ __('“We’re excited to have you!')}}</div>
                <div class="mb-2">{{ __('Proceed to checkout with this plan and you’ll be able to upgrade or downgrade at any time')}}</div>
                <div class="text-danger">
                    {{ __('For upgrading users, simply visit “Business Cards” to enable your cards after the upgrade')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Confirm')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="modal animate__animated animate__fadeIn" id="downPlanModal" tabindex="-1" aria-labelledby="downPlanModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <div class="modal-body">
                <div class="modal-title text-danger">{{ __('UNABLE TO DOWNGRADE')}}</div>
                <div class="mb-2">{{ __('Because you are already activated the \'Free\' plan.')}}</div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('Close')}}</button>
        </div>
    </div>
</div>
</div>
@endsection
@push('custom_js')
<script>
$(document).on('click', '.choose-plan', function () {
    var plan_id =  $(this).attr('data-id');
    $("#plan_id").val(plan_id);
    $('#planConfirmModal').modal('show');
})
$(document).on('click', '.down-plan-model', function () {
    $('#downPlanModal').modal('show');
})
function monthlyCheckedAnnualy() {
    var montlycheckBox = document.getElementById("monthlyCheckedAnnualy");
    var monthlyCheckedAnnualy
    if (montlycheckBox.checked == true){
    $("#is_yearly").val(1);
    $(".planpricemonthly").hide();
    $(".planpriceyearly").show();
    } else {
    $(".planpricemonthly").show();
    $(".planpriceyearly").hide();
    $("#is_yearly").val(0);
    }
};
</script>
@endpush
