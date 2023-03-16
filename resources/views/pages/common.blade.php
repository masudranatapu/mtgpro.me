@extends('layouts.app')
@section('home','active')
<?php
    $setting  = getSetting();

?>
@section('title') {{ $page->title }} @endsection
@push('custom_css')
<style>
    .page_content a:hover,
    a:focus {
        color: #0087c1;
    }

    .page_content a:active,
    a:hover {
        outline: 0;
    }

    .page_content a,
    .page_content button,
    .page_content input,
    .page_content select,
    .page_content textarea,
    .page_content label,
    .page_content summary {
        touch-action: manipulation;
    }

    .page_content a,
    .page_content a:visited,
    .page_content a span {
        color: #4a9ef4;
        text-decoration: none;
        position: relative;
        transition: color .1s linear;
    }

    b,
    strong {
        font-weight: 700;
    }

    ol {
        list-style: decimal;
    }

    ul,
    ol {
        margin-bottom: 20px;
    }

    h2,
    .h2,
    h2.title {
        font-family: DM Sans, sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 31px;
        text-transform: none;
        line-height: 1.5;
        color: #000;
        display: block;
        letter-spacing: 0px;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        margin-bottom: 0.75em;
    }
</style>
@endpush
@section('meta_tag')
<meta name="keywords" content="{{ $page->meta_keywords }}" />
<meta name="description" content="{{ $page->meta_description }}" />
<meta property="og:description" content="{{ $page->meta_description }}" />
<meta name="twitter:description" content="{{ $page->meta_description }}">
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="WEBSITE" />
<meta property="og:title" content=": {{ $setting->site_title }}" />
<meta name="twitter:title" content=": {{ $setting->site_title }}">
<meta name="twitter:card" value="summary_large_image">
<meta property="og:image" content="{{ asset($setting->seo_image) }}" />
<meta name="twitter:image" content="">
<meta name="twitter:site" content="{{Request::url()}}" />
<meta name="twitter:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="{{ $setting->site_title }}" />
<meta property="og:type" content="website" />
@endsection
@section('content')
<div class="termsconditon_sec mt-5 mb-5">
    <div class="container">
        <div class="page_wrapper">
            <div class="page_title mb-4">
                <h1 class="{{ $page->url_slug == 'contact-us' ? 'text-center' : '' }} ">{{ $page->title }}</h1>
            </div>
            <div class="page_content">
                @if($page->url_slug == 'contact-us')
                @include('pages._contact_us')
                @endif
                {!! $page->body !!}
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
<script>
</script>
@endpush
