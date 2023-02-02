@extends('layouts.app')
@section('home','active')
<?php
    $rows = $data ?? [];
    $settings  = getSetting();

?>

@section('title') {{ __('Terms & Conditions') }} @endsection
@push('custom_css')
<style>
</style>
@endpush
@section('meta_tag')
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta property="og:description" content="" />
<meta name="twitter:description" content="">
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="WEBSITE" />
<meta property="og:title" content=": Your Digital Business Card" />
<meta name="twitter:title" content=": Your Digital Business Card">
<meta name="twitter:card" value="summary_large_image">
<meta property="og:image" content="" />
<meta name="twitter:image" content="">
<meta name="twitter:site" content="{{Request::url()}}" />
<meta name="twitter:url" content="{{Request::url()}}" />
<link rel="canonical" href="{{Request::url()}}">
<meta property="og:site_name" content="" />
<meta property="og:type" content="website" />
@endsection
@section('content')
<!-- ======================= Terms Conditions  =========================== -->
<div class="termsconditon_sec mt-5 mb-5">
    <!-- container -->
    <div class="container">
        <div class="page_wrapper">
            <div class="page_title mb-4">
                <h3>{{ __('Pricing') }}</h3>
            </div>
            <div class="page_content">
                <div class="pricing section pt-5 pb-5" id="pricing">
                    <div class="container">
                        <div class="row">
                            <div class="section_title mb-5 text-center" data-aos="fade-up">
                                <h4>{{ __('Choose your best plan') }}</h4>
                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                    <div class="switch-wrapper">
                                        <input id="monthly" name="planType" value="annual" type="radio" name="switch"
                                            checked>
                                        <input id="yearly" name="planType" value="monthly" type="radio" name="switch">
                                        <label for="monthly">Annual</label>
                                        <label for="yearly">Monthly</label>
                                        <span class="highlighter"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @if (!empty($plans) && count($plans) > 0)
                            @foreach($plans as $row)
                            @php
                            $planfeatures = json_decode($row->features);
                            @endphp
                            <div
                                class="col-md-3 col-lg-3 col-12 @if($row->plan_type == 1) solopreneur_and_individuals  @else team_accounts @endif">
                                <div class="pricing-card card card-md">
                                    <div class="card-body text-center">
                                        <div class="text-capitalize text-dark">
                                            <h6 class="font-weight-bold">{{$row->plan_name}}</h6>
                                        </div>
                                        @if ((Auth::user()) && (Auth::user()->plan_id==$row->id))
                                        <div class="text-center mt-4">
                                            <a href="javascript:void(0)"
                                                class="current-plan-btn btn-block btn-primary w-100"
                                                title="{{ __('Active Plan')}}">{{ __('Active Plan')}}</a>
                                        </div>
                                        @else
                                        <div class="text-center mt-4">
                                            <a href="{{ route('user.checkout') }}?plan_id={{ $row->id }}&is_yearly=1"
                                                class="choose-plan btn btn-primary btn-block btn-dark w-100"
                                                data-href="{{ route('user.checkout') }}" data-id="{{ $row->id }}"
                                                title="{{ __('Choose plan')}}">{{ __('Choose plan')}}</a>
                                        </div>
                                        @endif
                                        <div class="my-3 pb-3">
                                            <div class="price">
                                                <h4 class="planpricemonthly"> {{ $currency->symbol }}
                                                    {{$row->plan_price_monthly}}
                                                    <sub> / {{ __('Monthly')}} </sub>
                                                </h4>
                                                <h4 class="planpriceyearly">$ {{$row->plan_price_yearly}} <sub> / {{
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
    <!-- container -->
</div>
@endsection
@push('custom_js')
<script>
    $(document).ready(function(){
                getPackage();
                $("input[name='planType']").click(function(){
                    getPackage();
                });
            });
            function getPackage(){
                var radioValue = $("input[name='planType']:checked").val();
                if(radioValue == 'monthly'){
                    $('.planpriceyearly').addClass('d-none');
                    $('.planpricemonthly').removeClass('d-none');
                    $.each($('.choose-plan'), function (index, item) {
                        var currentUrl = $(item).attr('href');
                        var url = new URL(currentUrl);
                        url.searchParams.set("is_yearly", 0);
                        var newUrl = url.href;
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
                        $(item).attr('href', newUrl);
                    });
                }
            }
</script>
@endpush
