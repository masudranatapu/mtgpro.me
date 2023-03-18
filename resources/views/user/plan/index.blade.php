@extends('user.layouts.app')
@push('custom_css')
@endpush
@section('plan','active')
@section('title')
{{ __('My Plans') }}
@endsection
@section('meta_tag')@endsection
@push('custom_css')
<style>
    .pricing-card {
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

    .pricing-card:hover {
        border: 1px solid #4B8CE2;
        filter: drop-shadow(0px 12px 24px rgba(0, 0, 0, 0.11));
    }

    .plan_type .form-check {
        position: relative;
        padding-left: 1.25rem;
        display: inline-block;
        margin: 0px 7px;
        font-size: 14px;
        font-weight: 500;
    }

    .current-plan-btn {

        color: rgba(0, 0, 0, 0.26);
        box-shadow: none;
        background-color: rgba(0, 0, 0, 0.12);
        cursor: default;
        pointer-events: none;
        width: 100%;
        position: relative;
        font-size: 13px;
        box-shadow: none;
        font-weight: 600;
        border-radius: 100px;
    }
</style>
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Choose a Plan') }}</h1>
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
                    <div class="plan_type switchBtn text-center mb-4 mt-3">
                        <div class="switch-wrapper">
                            <input id="monthly" name="planType" value="annual" type="radio" name="switch" checked>
                            <input id="yearly" name="planType" value="monthly" type="radio" name="switch">
                            <label for="monthly">Annual</label>
                            <label for="yearly">Monthly</label>
                            <span class="highlighter"></span>
                        </div>

                        <!-- <div class="form-check form-switch d-inline">
                            <label class="form-check-label" for="CheckedAnnualy">
                                <input class="form-check-input" name="planType" checked="" type="radio" value="annual" id="CheckedAnnualy">
                                    {{ __('Annual')}}
                            </label>
                        </div>
                        <div class="form-check form-switch d-inline">
                            <label class="form-check-label" for="monthlyChecked">
                                <input class="form-check-input" name="planType"  type="radio" value="monthly" id="monthlyChecked">
                                    {{ __('Monthly')}}
                            </label>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-md-center">
                <div class="col-xl-11">
                    <div class="row">
                        @if (!empty($plans) && count($plans) > 0)
                        @foreach($plans as $plan)
                        @php
                        $planfeatures = json_decode($plan->features);
                        @endphp
                        <div
                            class="col-md-6 col-xl-3 @if($plan->plan_type == 1) solopreneur_and_individuals  @else team_accounts @endif">
                            <div class="pricing-card card card-md">
                                <div class="card-body text-center">
                                    <div class="text-capitalize text-dark font-weight-bold"> {{$plan->plan_name}}</div>
                                    <div class="text-center mt-4">
                                        @if ($user->plan_id==$plan->id && $plan->is_free==1)
                                        {{-- <a href="javascript:void(0)" class="down-plan-model btn btn-danger w-100"
                                            title="{{ __('Active Plan')}}">{{ __('Active Plan')}}</a> --}}
                                        <a href="javascript:void(0)"
                                            class="current-plan-btn btn-block btn-primary w-100"
                                            title="{{ __('Current Plan')}}">{{ __('Current Plan')}}</a>
                                        @elseif ($user->plan_id==$plan->id)
                                        <a href="javascript:void(0)"
                                            class="current-plan-btn btn-block btn-primary w-100"
                                            data-href="{{ route('user.checkout') }}" data-id="{{ $plan->id }}"
                                            title="{{ __('Current Plan')}}">{{ __('Choose Plan')}}</a>
                                        @else
                                        <a href="javascript:void(0)"
                                            class="choose-plan btn btn-primary btn-block btn-primary w-100"
                                            data-href="{{ route('user.checkout') }}" data-id="{{ $plan->id }}"
                                            title="{{ __('Choose Plan')}}">{{ __('Choose Plan')}}</a>
                                        @endif
                                    </div>
                                    <div class="my-3 pb-3">
                                        <div class="price">
                                            <h4 class="planpricemonthly"> {{ $currency->symbol }}
                                                {{$plan->plan_price_monthly}}
                                                <sub> / {{ __('Monthly')}} </sub>
                                            </h4>
                                            <h4 class="planpriceyearly">$ {{$plan->plan_price_yearly}} <sub> / {{
                                                    __('Yearly')}}
                                                </sub></h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="list-unstyled lh-lg ">

                                        @foreach($planfeatures as $features)
                                        <li class="py-2">
                                            <span>{{$features}}</span>
                                        </li>
                                        @endforeach
                                        @if($plan->free_marketing_material==1)
                                        <li class="py-2">
                                            <span>{{__('Free Marketing Material')}}</span>
                                        </li>
                                    @endif
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
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="planConfirmModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.checkout') }}" id="choose_plan_action" method="get">
                    <label for="is_yearly" class="sr-only">{{ __('Yearly')}}</label>
                    <input type="hidden" class="form-control" name="is_yearly" value="1" id="is_yearly">

                    <label for="plan_id" class="sr-only">{{ __('Plan id')}}</label>
                    <input type="hidden" class="form-control" name="plan_id" value="" id="plan_id">
                    <div class="modal-title">{{ __('“We’re excited to have you!')}}</div>
                    <div class="mb-2">{{ __('Proceed to checkout with this plan and you’ll be able to upgrade or
                        downgrade at any time')}}</div>
                    <div class="text-danger">
                        {{ __('For upgrading users, simply visit “Business Cards” to enable your cards after the
                        upgrade')}}
                    </div>
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Confirm')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal animate__animated animate__fadeIn" id="downPlanModal" tabindex="-1"
    aria-labelledby="downPlanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-body">
                    <div class="modal-title text-danger">{{ __('UNABLE TO DOWNGRADE')}}</div>
                    <div class="mb-2">{{ __('Because you are already activated the \'Free\' plan.')}}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Close')}}</button>
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
$(document).ready(function(){
        getPackage();
        $("input[name='planType']").click(function(){
            getPackage();
        });
    });

    function getPackage(){
        var radioValue = $("input[name='planType']:checked").val();
        console.log(radioValue);
        if(radioValue == 'monthly'){
            $('.planpriceyearly').addClass('d-none');
            $('.planpricemonthly').removeClass('d-none');
            $.each($('.choose-plan'), function (index, item) {
                var currentUrl = $(item).attr('href');
                var url = new URL(currentUrl);
                url.searchParams.set("is_yearly", 0);
                var newUrl = url.href;
                $('#is_yearly').val('0');
                $(item).attr('href', newUrl);
            });
        }

        if(radioValue == 'annual'){
            $('.planpriceyearly').removeClass('d-none');
            $('.planpricemonthly').addClass('d-none');

            $.each($('.choose-plan'), function (index, item) {
                var currentUrl = $(item).attr('href');
                var url = new URL(currentUrl);
                url.searchParams.set("is_yearly", 1);
                var newUrl = url.href;
                console.log(newUrl);
                $('#is_yearly').val('1');

                $(item).attr('href', newUrl);
            });
        }

    }
</script>
@endpush
