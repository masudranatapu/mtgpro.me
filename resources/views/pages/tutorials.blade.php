@extends('layouts.app')

@section('home', 'active')

@php
    $rows = $data ?? [];
@endphp

@section('title')
    {{ __('Tutorials') }}
@endsection

@push('custom_css')
    <style>
        /* .newheighrt {
                    height: 10px;;
                } */
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
    {{-- Privacy Poli --}}
    <div class="privacy_sec mt-5 mb-5">
        <!-- container -->
        <div class="container">
            <div class="page_wrapper">
                <div class="page_title mb-4">
                    <h3>Mtgpro Tutorials</h3>
                </div>
                <div class="tutorials_wrapper">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @foreach ($tutorials as $key => $value)
                            <div class="col mb-3">
                                <div class="card h-100">
                                    <div class="card_box">
                                        <a href="{{ route('tutorials.details', $value->slug) }}">
                                            @if ($value->file_type == 1)
                                                <img src="@if (file_exists($value->file_url)) {{ asset($value->file_url) }} @else {{ asset('assets/img/tutorials/2.jpg') }} @endif"
                                                    class="card-img-top" alt="image">
                                            @elseif ($value->file_type == 2)
                                                <img src="{{ asset('assets/img/tutorials/2.jpg') }}" class="card-img-top" alt="image">
                                            @else
                                                <img src="{{ asset('assets/img/tutorials/2.jpg') }}" class="card-img-top"
                                                    alt="image">
                                            @endif
                                        </a>
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
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tutorials_wrapper">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
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
