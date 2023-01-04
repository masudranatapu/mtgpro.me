@extends('layouts.app')
@section('home','active')
<?php
    $setting  = getSetting();

?>
@section('title') {{ $page->title }}  @endsection
@push('custom_css')
<style>
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
    <!-- ======================= Terms Conditions  =========================== -->
    <div class="termsconditon_sec mt-5 mb-5">
        <!-- container -->
        <div class="container">
            <div class="page_wrapper">
                <div class="page_title mb-4">
                    <h3>{{ $page->title }}</h3>
                </div>
                <div class="page_content">
                   {!! $page->body !!}
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

