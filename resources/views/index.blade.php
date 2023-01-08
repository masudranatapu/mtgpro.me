@extends('layouts.app')
@section('home','active')
@section('title') Your Digital Business Card @endsection
@push('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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
   <!-- Banner -->
<div class="banner section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row g-0 align-items-center">
            <div class="col-lg-5">
                <div class="banner_content text-lg-start text-center" data-aos="zoom-in">
                    <h2>Digital Business Card Platform for <span>Contacts Solutions</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Rem veniam quis sapiente qui ipsum, explicabo laudantium ad aliquid porro, itaque, perferendis cumque commodi.</p>
                    <a href="#" class="btn btn-dark">Learn More</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner_logo text-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/banner-img.png') }}" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
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
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- ======================= Pricing  =========================== -->
<div class="pricing section pt-5 pb-5" id="pricing">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('Choose your best plan') }}</h4>
                <div class="plan_type switchBtn text-center mb-2 mt-3">
                    <div class="form-check form-switch d-inline">
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
                    </div>
                </div>
            </div>
            <!-- section heading -->
            <!-- plan -->

            @if (!empty($plans) && count($plans) > 0)
            @foreach($plans as $plan)
                @php
                    $planfeatures = json_decode($plan->features);
                @endphp
        <div class="col-md-3 col-lg-3 @if($plan->plan_type == 1) solopreneur_and_individuals  @else team_accounts @endif">
            <div class="pricing-card card card-md">
                <div class="card-body text-center">
                    <div class="text-capitalize text-dark font-weight-bold">  {{$plan->plan_name}}</div>
                        @if ((Auth::user()) && (Auth::user()->plan_id==$plan->id))
                        <div class="text-center mt-4">
                        <a href="javascript:void(0)" class="down-plan-model btn btn-danger" title="{{ __('Active Plan')}}">{{ __('Active Plan')}}</a>
                        </div>
                        @else
                            <div class="text-center mt-4">
                                <a href="{{ route('user.checkout') }}?plan_id={{ $plan->id }}&is_yearly=1" class="choose-plan btn btn-primary btn-block btn-dark w-100" data-href="{{ route('user.checkout') }}" data-id="{{ $plan->id }}" title="{{ __('Choose plan')}}">{{ __('Choose plan')}}</a>
                            </div>
                        @endif
                        <div class="my-3 pb-3">
                            <div class="price">
                                <h4 class="planpricemonthly">  {{ $currency->symbol }} {{$plan->plan_price_monthly}} <sub> / {{ __('Monthly')}} </sub></h4>
                                <h4 class="planpriceyearly">$ {{$plan->plan_price_yearly}} <sub> / {{ __('Yearly')}} </sub></h4>
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
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- ======================= Video  =========================== -->
<div class="video_sec section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row d-flex justify-content-center">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('What is Contacts Solutions') }}</h4>
            </div>
            <!-- section heading -->
            <div class="col-lg-9">
                <div class="video_iframe" data-aos="zoom-in">
                    <div class="ratio ratio-16x9">
                        <iframe class="video_link" src="https://www.youtube.com/embed/Zx_Ud23OsME" title="video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Testimonial  =========================== -->
<div class="testimonial_sec section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row d-flex justify-content-center">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>{{ __('See What Teams are Saying') }}</h4>
            </div>
            <!-- section heading -->
            <div class="review_wrapper owl-carousel">
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>{{ __('Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!') }}</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/img/user/1.jpg') }}" alt="image">
                        <h3>{{ __('John Doe') }}</h3>
                        <span>{{ __('ui/ux Designer') }}</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>{{ __('Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!') }}</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/img/user/2.jpg') }}" alt="image">
                        <h3>{{ __('John Doe') }}</h3>
                        <span>{{ __('ui/ux Designer') }}</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>{{ __('Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!') }}</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/img/user/3.jpg') }}" alt="image">
                        <h3>{{ __('John Doe') }}</h3>
                        <span>{{ __('ui/ux Designer') }}</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>{{ __('Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!') }}</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/img/user/2.jpg') }}" alt="image">
                        <h3>{{ __('John Doe') }}</h3>
                        <span>{{ __('ui/ux Designer') }}</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>{{ __('Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!') }}</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/img/user/1.jpg') }}" alt="image">
                        <h3>{{ __('John Doe') }}</h3>
                        <span>{{ __('ui/ux Designer') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Faq  =========================== -->
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    {{ __('What is Lorem Ipsum?') }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ __('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    {{ __('Why do we use it?') }}
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ __('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    {{ __('Where does it come from?') }}
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ __('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    {{ __('Where does it come from?') }}
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ __('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.') }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    {{ __('Where does it come from?') }}
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ __('The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
    <script>
        // var planType = $("input[name='planType']:checked").val();
        // alert(planType)''

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
