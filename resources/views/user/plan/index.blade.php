@extends('user.layouts.app')
@push('custom_css')
@endpush
@section('plan','active')
@section('title')
My Plans
@endsection
@section('meta_tag')@endsection
@push('custom_css')
<style>
    .pricing-card{
        /* width: 319px; */
    border: solid 1px #bdbdbd;
    cursor: pointer;
    height: 728px;
    /* display: flex; */
    padding: 24px;
    margin-right: 15px;
    border-radius: 20px;
    background-color: #fff;
    }
    .pricing-card:hover{
        border: 1px solid #4B8CE2;
        filter: drop-shadow(0px 12px 24px rgba(0, 0, 0, 0.11));
    }
</style>
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Choose a plan') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title text-center mb-2">
                        <h3>{{ __('Pick Your')}} <span>{{ __('Plan')}}</span></h3>
                    </div>
                    <div class="switchBtn text-center mb-4">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="monthlyCheckedAnnualy"> <input class="form-check-input" type="checkbox" value="0" id="monthlyCheckedAnnualy" onclick="monthlyCheckedAnnualy()">
                                    {{ __('Annual | Monthly')}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                @if (!empty($plans) && count($plans) > 0)
                    @foreach($plans as $plan)
                @php
                    $planfeatures = json_decode($plan->features);
                @endphp
                <div class="col-md-3 col-lg-3 @if($plan->plan_type == 1) solopreneur_and_individuals  @else team_accounts @endif">
                    <div class="pricing-card card card-md">
                        <div class="card-body text-center">
                            <div class="text-capitalize text-dark font-weight-bold">  {{$plan->plan_name}}</div>
                                @if (Auth::user()->plan_id==$plan->id && $plan->is_free==1)
                                <div class="text-center mt-4">
                                <a href="javascript:void(0)" class="down-plan-model btn btn-danger" title="{{ __('Active Plan')}}">{{ __('Active Plan')}}</a>
                                </div>
                                @else
                                    <div class="text-center mt-4">
                                        <a href="javascript:void(0)" class="choose-plan btn btn-block btn-dark w-100" data-href="{{ route('user.checkout') }}" data-id="{{ $plan->id }}" title="{{ __('Choose plan')}}">{{ __('Choose plan')}}</a>
                                    </div>
                                @endif
                                <div class="my-3 pb-3">
                                    <div class="price">
                                        <h4 class="planpricemonthly">  {{ $currency->symbol }} {{$plan->plan_price_monthly}} <sub> / {{ __('Monthly')}} </sub></h4>
                                        <h4 class="planpriceyearly" style="display: none;">$ {{$plan->plan_price_yearly}} <sub> / {{ __('Yearly')}} </sub></h4>
                                    </div>
                                </div>
                                <hr>
                                <ul class="list-unstyled lh-lg ">
                                    @foreach($planfeatures as $features)
                                        <li class="py-2">
                                            <span>{{$features}}</span>
                                        </li>
                                    @endforeach
                                </ul>
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


    <div class="modal fade" id="planConfirmModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('user.checkout') }}" id="choose_plan_action" method="get">

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
