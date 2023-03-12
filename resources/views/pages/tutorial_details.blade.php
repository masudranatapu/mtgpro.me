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
                <div class="page_title mb-4">
                    <h3>Tutorial Details</h3>
                </div>
                <div class="tutorials_wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="tutorials_details">
                                <div class="img_box mb-4">
                                    @if ($tutorials->file_type == 1)

                                        <img src="@if (file_exists($tutorials->file_url)) {{ asset($tutorials->file_url) }} @else {{ asset('assets/img/tutorials/2.jpg') }} @endif"
                                            class="card-img-top" alt="image" style="width:100%; height:400px;">

                                    @elseif ($tutorials->file_type == 2)

                                        @if (file_exists($tutorials->file_url))
                                            <iframe src="{{ asset($tutorials->file_url) }}" title="video" frameborder="0"
                                                allowfullscreen style="width:100%; height:400px;">
                                            </iframe>
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
