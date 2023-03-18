@extends('layouts.app')

@section('home', 'active')

@section('title')
    {{ __('Tutorials') }}
@endsection

@push('custom_css')
    <style></style>
@endpush

@php
    $rows = $data ?? [];
@endphp

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
    {{-- Privacy Poli --}}
    <div class="privacy_sec mt-5 mb-5">
        <!-- container -->
        <div class="container">
            <div class="page_wrapper">
                <div class="tutorials_wrapper">
                    <div class="page_title pb-2 border-bottom mb-4">
                        <div class="row">
                            <div class="col-lg-9 col-md-6 mb-3 mb-lg-0">
                                <h3 class="mt-3">Mtgpro Tutorials</h3>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <form action="{{ route('tutorials') }}" method="GET">
                                    <select name="category" class="form-control" onchange="this.form.submit()">
                                        <option value="" disabled selected>Select Category</option>
                                        <option value="select_all_tutorials">Select All Tutorials</option>
                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate->slug }}" {{ request()->get('category') ==  $cate->slug ? 'selected' : '' }}>{{ $cate->title }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if($tutorials->count() > 0)
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                            @foreach ($tutorials as $key => $value)
                                <div class="col mb-4">
                                    <div class="card h-100">
                                        <div class="card_box">
                                            @if ($value->file_type == 1)
                                                <a href="{{ route('tutorials.details', $value->slug) }}">
                                                    <img src="@if (file_exists($value->file_url)) {{ asset($value->file_url) }} @else {{ asset('assets/img/tutorials/2.jpg') }} @endif"
                                                        class="card-img-top" alt="image">
                                                </a>
                                            @elseif ($value->file_type == 2)
                                                @if (file_exists($value->file_url))
                                                    <video width="100%" height="250" controls>
                                                        <source src="{{ asset($value->file_url) }}">
                                                    </video>
                                                @else
                                                    <a href="{{ route('tutorials.details', $value->slug) }}">
                                                        <img src=" {{ asset('assets/img/tutorials/2.jpg') }}"
                                                            class="card-img-top" alt="image">
                                                    </a>
                                                @endif
                                            @else
                                                <iframe src="{{ $value->file_url }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen style="width:100%; height:250px;">
                                                </iframe>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="{{ route('tutorials.details', $value->slug) }}">
                                                    {{ $value->title }}
                                                </a>
                                            </h5>
                                            <p class="card-text">
                                                {{ $value->short_description }}
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-between">
                                                <div class="author">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404" stroke-width="1"
                                                        stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <span>{{ $value->author }}</span>
                                                </div>
                                                <div class="date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="#040404" stroke-width="1"
                                                        stroke-linecap="butt" stroke-linejoin="bevel">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <span>{{ date('d M Y', strtotime($value->publish_date)) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-danger text-center">No tutorials data</h5>
                            </div>
                        </div>
                    @endif
                    {{-- pagination --}}
                    <div class="pagination_nav d-flex justify-content-center mt-4">
                        {{ $tutorials->links('pagination::bootstrap-4') }}
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
