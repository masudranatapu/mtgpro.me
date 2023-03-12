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
                                            <img src="{{ asset('assets/img/tutorials/2.jpg') }}" class="card-img-top"
                                                alt="image" style="width:100%; height:400px;">
                                        @endif
                                    @else
                                        <iframe src="{{ $tutorials->file_url }}" title="video" frameborder="0"
                                            allowfullscreen style="width:100%; height:400px;">
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
                                    @foreach ($recent_tutorials as $recent_tutor)
                                        <div class="recent_post mb-3">
                                            <div class="d-flex position-relative mb-2 align-items-center">
                                                <div class="recent_post_bx me-3">
                                                    @if($recent_tutor->file_type == 1)
                                                        <img src="@if(file_exists($recent_tutor->file_url)) {{ asset($recent_tutor->file_url) }} @else {{ asset('assets/img/tutorials/1.jpg') }} @endif" alt="img-fluid">
                                                    @elseif ($recent_tutor->file_type == 2)
                                                        <img src="{{ asset('assets/img/tutorials/1.jpg') }}" alt="img-fluid">
                                                    @else
                                                        <img src="{{ asset('assets/img/tutorials/1.jpg') }}" alt="img-fluid">
                                                    @endif
                                                </div>
                                                <div class="recent_post_article">
                                                    <h5>
                                                        <a href="{{ route('tutorials.details', $recent_tutor->slug) }}">Another youtube video tutorials</a>
                                                    </h5>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="author">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 24 24" fill="none"
                                                                stroke="#040404" stroke-width="1" stroke-linecap="butt"
                                                                stroke-linejoin="bevel">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                                <circle cx="12" cy="7" r="4">
                                                                </circle>
                                                            </svg>
                                                            <span>{{ $recent_tutor->author }}</span>
                                                        </div>
                                                        <div class="date">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 24 24" fill="none"
                                                                stroke="#040404" stroke-width="1" stroke-linecap="butt"
                                                                stroke-linejoin="bevel">
                                                                <circle cx="12" cy="12" r="10">
                                                                </circle>
                                                                <polyline points="12 6 12 12 16 14"></polyline>
                                                            </svg>
                                                            <span>{{ date('d M Y', strtotime($recent_tutor->publish_date)) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="categories blog_wrap mb-4">
                                    <div class="sideabr_heading mb-3">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="category_list">
                                        <ul>
                                            @foreach ($categories as $category)
                                                @php
                                                    $total_tutorials = App\Models\Tutorial::where('category_id', $category->id)->get();
                                                @endphp
                                                <li>
                                                    <a href="{{ route('tutorials', ['category' => $category->slug]) }}">
                                                        {{ $category->title }}
                                                        <span class="float-end">{{ $total_tutorials->count() }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @if($tutorials->tags)
                                    <div class="tags blog_wrap mb-4">
                                        <div class="sideabr_heading mb-3">
                                            <h3>Tags</h3>
                                        </div>
                                        <div class="tags_list">
                                            <ul>
                                                @foreach (json_decode($tutorials->tags) as $tags)
                                                    <li><a href="{{ route('tutorials', ['tags' => $tags->value]) }}">{{ $tags->value }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
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
