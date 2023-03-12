@extends('layouts.app')

@section('home', 'active')

@php
$rows = $data ?? [];
@endphp

@section('title')
{{ __('Tutorial Details') }}
@endsection

@push('custom_css')
<style>
    /*  */
</style>
@endpush

@section('meta_tag')
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta property="og:description" content="" />
<meta name="twitter:description" content="">
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:type" content="WEBSITE" />
<meta property="og:title" content=": Your Digital Business Card" />
<meta name="twitter:title" content=": Your Digital Business Card">
<meta name="twitter:card" value="summary_large_image">
<meta property="og:image" content="" />
<meta name="twitter:image" content="">
<meta name="twitter:site" content="{{ Request::url() }}" />
<meta name="twitter:url" content="{{ Request::url() }}" />
<link rel="canonical" href="{{ Request::url() }}">
<meta property="og:site_name" content="" />
<meta property="og:type" content="website" />
@endsection

@section('content')
{{-- Privacy Policy --}}
<div class="privacy_sec mt-5 mb-5">
    <div class="container">
        <div class="page_wrapper">
            <div class="tutorials_wrapper">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="tutorials_details">
                            <div class="img_box mb-4">
                                @if ($tutorials->file_type == 1)

                                <img src="@if (file_exists($tutorials->file_url)) {{ asset($tutorials->file_url) }} @else {{ asset('assets/img/tutorials/2.jpg') }} @endif"
                                    class="card-img-top" alt="image" style="width:100%; height:400px;">

                                @elseif ($tutorials->file_type == 2)

                                @if (file_exists($tutorials->file_url))
                                <video width="100%" height="400" controls>
                                    <source src="{{ asset($tutorials->file_url) }}">
                                </video>
                                @else
                                <img src="{{ asset('assets/img/tutorials/2.jpg') }}" class="card-img-top" alt="image"
                                    style="width:100%; height:400px;">
                                @endif

                                @else
                                <iframe src="{{ $tutorials->file_url }}" title="video" frameborder="0" allowfullscreen
                                    style="width:100%; height:400px;">
                                </iframe>
                                @endif
                            </div>
                            <div class="content">
                                <div class="d-flex mb-4 justify-content-between">
                                    <div class="author">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="#040404" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="bevel">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span>Admin</span>
                                    </div>
                                    <div class="date">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="#040404" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="bevel">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        <span>02 Feb, 2023</span>
                                    </div>
                                </div>
                                <h2>
                                    {{ $tutorials->title }}
                                </h2>
                                <p>
                                    {{ $tutorials->short_description }}
                                </p>
                                <p>
                                    {!! $tutorials->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="blog_sideabr">
                            <div class="recent_posts blog_wrap mb-4">
                                <div class="sideabr_heading mb-3">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent_post mb-3">
                                    <div class="d-flex position-relative mb-2 align-items-center">
                                        <div class="recent_post_bx me-3">
                                            <img src="{{ asset('assets/img/tutorials/1.jpg') }}" alt="img-fluid">
                                        </div>
                                        <div class="recent_post_article">
                                            <h5>
                                                <a href="#">Another youtube video tutorials</a>
                                            </h5>
                                            <div class="d-flex justify-content-between">
                                                <div class="author">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span>Admin</span>
                                                </div>
                                                <div class="date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <span>02 Feb, 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_post mb-3">
                                    <div class="d-flex position-relative mb-2 align-items-center">
                                        <div class="recent_post_bx me-3">
                                            <img src="{{ asset('assets/img/tutorials/2.jpg') }}" alt="img-fluid">
                                        </div>
                                        <div class="recent_post_article">
                                            <h5>
                                                <a href="#">Another youtube video tutorials</a>
                                            </h5>
                                            <div class="d-flex justify-content-between">
                                                <div class="author">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span>Admin</span>
                                                </div>
                                                <div class="date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <span>02 Feb, 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_post mb-3">
                                    <div class="d-flex position-relative mb-2 align-items-center">
                                        <div class="recent_post_bx me-3">
                                            <img src="{{ asset('assets/img/tutorials/3.jpg') }}" alt="img-fluid">
                                        </div>
                                        <div class="recent_post_article">
                                            <h5>
                                                <a href="#">Another youtube video tutorials</a>
                                            </h5>
                                            <div class="d-flex justify-content-between">
                                                <div class="author">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span>Admin</span>
                                                </div>
                                                <div class="date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404"
                                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <span>02 Feb, 2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories blog_wrap mb-4">
                                <div class="sideabr_heading mb-3">
                                    <h3>Categories</h3>
                                </div>
                                <div class="category_list">
                                    <ul>
                                        <li><a href="#">Mobile <span class="float-end">02</span></a></li>
                                        <li><a href="#">Automobile <span class="float-end">02</span></a></li>
                                        <li><a href="#">Car <span class="float-end">02</span></a></li>
                                        <li><a href="#">Property <span class="float-end">02</span></a></li>
                                        <li><a href="#">House <span class="float-end">02</span></a></li>
                                        <li><a href="#">Electronic <span class="float-end">02</span></a></li>
                                        <li><a href="#">Mobile <span class="float-end">02</span></a></li>
                                        <li><a href="#">Automobile <span class="float-end">02</span></a></li>
                                        <li><a href="#">Car <span class="float-end">02</span></a></li>
                                        <li><a href="#">Property <span class="float-end">02</span></a></li>
                                        <li><a href="#">House <span class="float-end">02</span></a></li>
                                        <li><a href="#">Electronic <span class="float-end">02</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tags blog_wrap mb-4">
                                <div class="sideabr_heading mb-3">
                                    <h3>Tags</h3>
                                </div>
                                <div class="tags_list">
                                    <ul>
                                        <li><a href="#">Themeforest</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Info</a></li>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Html</a></li>
                                    </ul>
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
    //
</script>
@endpush
