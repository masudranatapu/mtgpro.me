@extends('layouts.app')
@section('home','active')
<?php
$settings  = getSetting();
?>
@section('title') {{ $settings->site_title ?? '' }} @endsection
@push('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<style>
    video.banner-video {
        width: 100%;
        height: auto;
        overflow: hidden;
    }



    .current-plan-btn {
        color: rgba(0, 0, 0, 0.26);
        box-shadow: none;
        background-color: rgba(0, 0, 0, 0.12) !important;
        cursor: default;
        pointer-events: none;
        width: 100%;
        font-size: 13px;
        box-shadow: none;
        font-weight: 600;
        border-radius: 100px;
    }

    .btn-primary {
        background: #212121;
        border: none !important;
        outline: none;
        box-shadow: none;
        padding: 12px 42px !important;
        border-radius: 50px !important;
        font-size: 13px;
    }

    /* .card {
        box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
        margin-bottom: 1rem;
    } */
    .pricing-card {
        border: solid 1px #bdbdbd;
        cursor: pointer;
        height: 600px;
        padding: 24px;
        border-radius: 20px;
        background-color: #fff;
    }

    .pricing-card:hover {
        border: 1px solid var(--primary);
        ;
        filter: drop-shadow(0px 12px 24px rgba(0, 0, 0, 0.11));
    }
</style>
@endpush
@section('meta_tag')
<meta name="keywords" content="{{ $settings->seo_keywords }}" />
<meta name="description" content="{{$settings->seo_meta_description}}" />
<meta property="og:description" content="{{$settings->seo_meta_description}}" />
<meta name="twitter:description" content="{{$settings->seo_meta_description}}">
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="WEBSITE" />
<meta property="og:title" content="{{ $settings->site_name }}: {{ $settings->site_title ?? '' }}" />
<meta name="twitter:title" content="{{ $settings->site_name }}: {{ $settings->site_title ?? '' }}">
<meta name="twitter:card" value="summary_large_image">
<meta property="og:image" content="{{ asset($settings->seo_image) }}" />
<meta name="twitter:image" content="{{ asset($settings->seo_image) }}">
<meta name="twitter:site" content="{{Request::url()}}" />
<meta name="twitter:url" content="{{Request::url()}}" />
<link rel="canonical" href="{{Request::url()}}">
<meta property="og:site_name" content="{{$settings->site_name}}" />
<meta property="og:type" content="website" />
@endsection
@section('content')
<!-- Banner -->
@if(isset($home_data['banner']))
@php
$banner = $home_data['banner'] ;
@endphp
<div class="banner section">
    <div class="container">
        <div class="row g-0 align-items-center">
            <div class="col-lg-5 col-12">
                <div class="banner_content text-lg-start text-center" data-aos="zoom-in">
                    <h2>{!! __($banner['banner_title']) !!}</h2>
                    <p>{!! __($banner['banner_description']) !!}</p>
                    <a href="{{ route('register') }}" class="btn btn-dark mb-sm-2" title="Signup">{{__($banner['banner_button'])}} </a>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                @if(!empty($banner['banner_video']) && file_exists(public_path($banner['banner_video'])))
                <div class="embed-responsive embed-responsive-21by9">
                    <video class="embed-responsive-item banner-video" loop="true" autoplay="autoplay" controls muted  preload="none">
                        <source src="{{ asset($banner['banner_video']) }}" type="video/mp4">
                        {{-- <source src="movie.ogg" type="video/ogg"> --}}
                        <img src="{{ asset($banner['banner_photo']) }}" alt="{{ strip_tags($banner['banner_title']) }}">
                        Your browser does not support the video tag.
                      </video>
                </div>
                @else
                <div class="banner_logo text-center" data-aos="zoom-in">
                    <img src="{{ asset($banner['banner_photo']) }}" class="img-fluid" alt="image">
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
<!-- ======================= Featured  =========================== -->
<div class="featured section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('Features') }}</h4>
            </div>
            <!-- section heading -->
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Share With Anyone') }}</h3>
                            <p>{{ __('Others don’t need an app or a Popl device') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Brand Consistency') }}</h3>
                            <p>{{ __('Use templates and bulk edits to maintain cards at scale') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/security.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Security is Key') }}</h3>
                            <p>{{ __('We protect your privacy at all times and never share.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/support.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('24/7 Support') }}</h3>
                            <p>{{ __('We’re here to help with free setup, onboarding, and more.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/card.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Unlimited Cards') }}</h3>
                            <p>{{ __('As your team grows, we grow with you.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Free Smart Products') }}</h3>
                            <p>{{ __('Lorem, ipsum dolor, sit amet consectetur adipisicing elit.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Share With Anyone') }}</h3>
                            <p>{{ __('Lorem, ipsum dolor, sit amet consectetur adipisicing elit.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/img/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>{{ __('Share With Anyone') }}</h3>
                            <p>{{ __('Lorem, ipsum dolor, sit amet consectetur adipisicing elit.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pricing section pt-5 pb-5" id="pricing">
    <div class="container">
        <div class="row">
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('Choose your best plan') }}</h4>
                <div class="plan_type switchBtn text-center mb-4 mt-3">
                    <div class="switch-wrapper">
                        <input id="monthly" name="planType" value="annual" type="radio" name="switch" checked>
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
            @foreach($plans as $plan)
            @php
            $planfeatures = json_decode($plan->features);
            @endphp
            <div
                class="col-md-3 col-lg-3 col-12 @if($plan->plan_type == 1) solopreneur_and_individuals  @else team_accounts @endif">
                <div class="pricing-card card card-md">
                    <div class="card-body text-center">
                        <div class="text-capitalize text-dark">
                            <h6 class="font-weight-bold">{{$plan->plan_name}}</h6>
                        </div>
                        @if ((Auth::user()) && (Auth::user()->plan_id==$plan->id))
                        <div class="text-center mt-4">
                            <a href="javascript:void(0)" class="current-plan-btn btn-block btn-primary w-100"
                                title="{{ __('Active Plan')}}">{{ __('Active Plan')}}</a>
                        </div>
                        @else
                        <div class="text-center mt-4">
                            <a href="{{ route('user.checkout') }}?plan_id={{ $plan->id }}&is_yearly=1"
                                class="choose-plan btn btn-primary btn-block btn-dark w-100"
                                data-href="{{ route('user.checkout') }}" data-id="{{ $plan->id }}"
                                title="{{ __('Choose plan')}}">{{ __('Choose plan')}}</a>
                        </div>
                        @endif
                        <div class="my-3 pb-3">
                            <div class="price">
                                <h4 class="planpricemonthly"> {{ $currency->symbol }} {{$plan->plan_price_monthly}}
                                    <sub> / {{ __('Monthly')}} </sub>
                                </h4>
                                <h4 class="planpriceyearly">$ {{$plan->plan_price_yearly}} <sub> / {{ __('Yearly')}}
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

<div class="video_sec section">
    <div class="container">
        <!-- row -->
        <div class="row d-flex justify-content-center">
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('What is Contacts Solutions') }}</h4>
            </div>
            <div class="col-lg-9">
                <div class="video_iframe" data-aos="zoom-in">
                    <div class="ratio ratio-16x9">
                        <iframe class="video_link" src="https://www.youtube.com/embed/Zx_Ud23OsME" title="video"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if($reviews->count() > 0)
<div class="testimonial_sec section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row d-flex justify-content-center">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('See What Teams are Saying') }}</h4>
            </div>
            <div class="review_wrapper owl-carousel">
                @foreach($reviews as $review)
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p style="min-height: 130px">{{ __($review->details) }}</p>
                    </div>
                    <div class="review_user">
                        <img src="@if($review->user->profile_image) {{ asset($review->user->profile_image) }} @else {{ asset('assets/img/default-profile.png') }} @endif"
                            alt="image">
                        <h3>{{ __($review->display_name ?? '') }}</h3>
                        <span>{{ __($review->display_title ?? '') }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
<!-- ======================= Faq  =========================== -->
@if($faqs->count() > 0)
<div class="faq_sec section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row d-flex justify-content-center">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('Frequently Asked Questions') }}</h4>
            </div>
            <!-- section heading -->
            <div class="col-lg-9">
                <div class="faq_list">
                    <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up">
                        <!-- accordion item -->
                        @foreach($faqs as $key => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne__{{ $key }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne__{{$key}}" aria-expanded="false"
                                    aria-controls="flush-collapseOne__{{$key}}">
                                    {{ __($faq->title) }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne__{{$key}}" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne__{{ $key }}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ __($faq->body) }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
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
