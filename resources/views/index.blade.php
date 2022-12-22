@extends('layouts.app')
@section('home','active')
<?php
$rows = $data ?? [];
?>
@section('title') : Your Digital Business Card @endsection
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
                    <img src="{{ asset('assets/images/banner-img.png') }}" class="img-fluid" alt="image">
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
                <h4>Features</h4>
            </div>
            <!-- section heading -->
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Share With Anyone</h3>
                            <p>Others don’t need an app or a Popl device</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Brand Consistency</h3>
                            <p>Use templates and bulk edits to maintain cards at scale</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/security.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Security is Key</h3>
                            <p>We protect your privacy at all times and never share.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/support.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>24/7 Support</h3>
                            <p>We’re here to help with free setup, onboarding, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/card.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Unlimited Cards</h3>
                            <p>As your team grows, we grow with you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Free Smart Products</h3>
                            <p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Share With Anyone</h3>
                            <p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature item -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="feature_wrapper text-center mb-4" data-aos="zoom-in">
                    <div class="feature_item">
                        <div class="feature_icon mb-3">
                            <img src="{{ asset('assets/images/icon/team.png') }}" alt="image">
                        </div>
                        <div class="feature_name">
                            <h3>Share With Anyone</h3>
                            <p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit.</p>
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
<div class="pricing section pt-5 pb-5">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section heading -->
            <div class="section_title mb-5 text-center" data-aos="fade-up">
                <h4>Choose your best plan</h4>
            </div>
            <!-- section heading -->
            <!-- plan -->
            <div class="col-lg-4">
                <div class="plan_wrapper mb-4" data-aos="zoom-in">
                    <div class="plan_header mb-5 text-center">
                        <div class="plan_price mb-3">
                            <span>$ 0.00</span>
                        </div>
                        <div class="plan_name">
                            <h2>Free Plan</h2>
                            <span>For free absic card feature</span>
                        </div>
                    </div>
                    <div class="plan_feature">
                        <ul>
                            <li>
                                <i class="fa fa-check"></i>
                                <span>5 GB of free space</span>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <span>30 days for free services</span>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>All time support services 24/7</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                        </ul>
                    </div>
                    <div class="plan_btn text-center mt-5">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <!-- plan -->
            <div class="col-lg-4">
                <div class="plan_wrapper middle_plan mb-4" data-aos="zoom-in">
                    <div class="plan_header mb-5 text-center">
                        <div class="plan_price mb-3">
                            <span>$ 99.99</span>
                        </div>
                        <div class="plan_name">
                            <h2>Professional Plan</h2>
                            <span>For minumal card feature</span>
                        </div>
                        <!-- shape divider -->
                        <div class="custom-shape-divider-top-1671081492">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="plan_feature">
                        <ul>
                            <li>
                                <i class="fa fa-check"></i>
                                <span>5 GB of free space</span>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <span>30 days for free services</span>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>All time support services 24/7</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                        </ul>
                    </div>
                    <div class="plan_btn text-center mt-5">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <!-- plan -->
            <div class="col-lg-4">
                <div class="plan_wrapper mb-4" data-aos="zoom-in">
                    <div class="plan_header mb-5 text-center">
                        <div class="plan_price mb-3">
                            <span>$ 199.99</span>
                        </div>
                        <div class="plan_name">
                            <h2>Enterprice Plan</h2>
                            <span>For full incrediable card feature</span>
                        </div>
                    </div>
                    <div class="plan_feature">
                        <ul>
                            <li>
                                <i class="fa fa-check"></i>
                                <span>5 GB of free space</span>
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <span>30 days for free services</span>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>All time support services 24/7</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                            <li>
                                <i class="fa fa-times"></i>
                                <del>Lorem ipsum dolor sit amet consectetur.</del>
                            </li>
                        </ul>
                    </div>
                    <div class="plan_btn text-center mt-5">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
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
                <h4>What is Contacts Solutions</h4>
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
                <h4>See What Teams are Saying</h4>
            </div>
            <!-- section heading -->
            <div class="review_wrapper owl-carousel">
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/images/user/1.jpg') }}" alt="image">
                        <h3>John Doe</h3>
                        <span>ui/ux Designer</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/images/user/2.jpg') }}" alt="image">
                        <h3>John Doe</h3>
                        <span>ui/ux Designer</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/images/user/3.jpg') }}" alt="image">
                        <h3>John Doe</h3>
                        <span>ui/ux Designer</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/images/user/2.jpg') }}" alt="image">
                        <h3>John Doe</h3>
                        <span>ui/ux Designer</span>
                    </div>
                </div>
                <!-- review -->
                <div class="item review_wrap text-center" data-aos="zoom-in">
                    <div class="review_item">
                        <span class="icon"><i class="fa fa-quote-left"></i></span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!</p>
                    </div>
                    <div class="review_user">
                        <img src="{{ asset('assets/images/user/1.jpg') }}" alt="image">
                        <h3>John Doe</h3>
                        <span>ui/ux Designer</span>
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
                <h4>Frequently Asked Questions</h4>
            </div>
            <!-- section heading -->
            <div class="col-lg-9">
                <div class="faq_list">
                    <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up">
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is Lorem Ipsum?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Why do we use it?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
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
    </script>
@endpush
