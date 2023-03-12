@extends('layouts.app')
@section('home','active')
<?php
    $rows = $data ?? [];
?>
@section('title') {{ __('Tutorials') }} @endsection
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
<!-- ======================= Privacy Policy  =========================== -->
<div class="privacy_sec mt-5 mb-5">
    <!-- container -->
    <div class="container">
        <div class="page_wrapper">
            <div class="page_title mb-4">
                <h3>Mtgpro Tutorials</h3>
            </div>

            <div class="tutorials_wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    {{-- post item --}}
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card_box">
                                <a href="{{ route('tutorials.details') }}">
                                    <img src="{{ asset('assets/img/tutorials/1.jpg') }}" class="card-img-top"
                                        alt="image">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('tutorials.details') }}">How to setup (with a
                                        Mtgpro device)</a></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet a adipisci vero nobis,
                                    enim, voluptas architecto beatae sint, harum sit consectetur voluptate blanditiis
                                    recusandae placeat officia obcaecati ullam fugiat magnam?
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post item --}}
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card_box">
                                <a href="{{ route('tutorials.details') }}">
                                    <img src="{{ asset('assets/img/tutorials/2.jpg') }}" class="card-img-top"
                                        alt="image">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('tutorials.details') }}">How to setup (with a
                                        Mtgpro device)</a></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post item --}}
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card_box">
                                <a href="{{ route('tutorials.details') }}">
                                    <img src="{{ asset('assets/img/tutorials/3.jpg') }}" class="card-img-top"
                                        alt="image">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('tutorials.details') }}">How to setup (with a
                                        Mtgpro device)</a></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet a adipisci vero nobis,
                                    enim, voluptas architecto beatae sint, harum sit consectetur voluptate blanditiis
                                    recusandae placeat officia obcaecati ullam fugiat magnam?
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post item --}}
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card_box">
                                <a href="{{ route('tutorials.details') }}">
                                    <img src="{{ asset('assets/img/tutorials/4.jpg') }}" class="card-img-top"
                                        alt="image">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('tutorials.details') }}">How to setup (with a
                                        Mtgpro device)</a></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem deleniti commodi
                                    sit non explicabo fuga, inventore numquam similique odit? Alias nostrum, hic nihil
                                    enim sit vitae non dolorum a.
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post item --}}
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card_box">
                                <a href="{{ route('tutorials.details') }}">
                                    <img src="{{ asset('assets/img/tutorials/5.jpg') }}" class="card-img-top"
                                        alt="image">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('tutorials.details') }}">How to setup (with a
                                        Mtgpro device)</a></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet a adipisci vero nobis,
                                    enim, voluptas architecto beatae sint, harum sit consectetur voluptate blanditiis
                                    recusandae placeat officia obcaecati ullam fugiat magnam?
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- post item --}}
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card_box">
                                <a href="{{ route('tutorials.details') }}">
                                    <img src="{{ asset('assets/img/tutorials/6.jpg') }}" class="card-img-top"
                                        alt="image">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('tutorials.details') }}">How to setup (with a
                                        Mtgpro device)</a></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet a adipisci vero nobis,
                                    enim, voluptas architecto beatae sint, harum sit consectetur voluptate blanditiis
                                    recusandae placeat officia obcaecati ullam fugiat magnam?
                                </p>
                            </div>
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
</script>
@endpush
