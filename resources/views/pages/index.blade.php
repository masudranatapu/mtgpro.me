@extends('layouts.app')
@section('home','active')
<?php
    $rows = $data ?? [];
?>
@section('title') {{ __($data->title) }}  @endsection
@push('custom_css')
<style>
</style>
@endpush
@section('meta_tag')
    <meta name="keywords" content="{{ $data->meta_keywords }}" />
    <meta name="description" content="{{ $data->meta_description }}" />
    <meta property="og:description" content="{{ $data->meta_description }}" />
    <meta name="twitter:description" content="{{ $data->meta_description }}">
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="WEBSITE" />
    <meta property="og:title" content=": MtgPro - {{ $data->title }}" />
    <meta name="twitter:title" content=": MtgPro - {{ $data->title }}">
    <meta name="twitter:card" value="summary_large_image">
    <meta property="og:image" content="" />
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="{{Request::url()}}" />
    <meta name="twitter:url" content="{{Request::url()}}" />
    <link rel="canonical" href="{{Request::url()}}">
    <meta property="og:site_name" content="MtgPro" />
    <meta property="og:type" content="website" />
@endsection
@section('content')
    <!-- ======================= Privacy Policy  =========================== -->
    <div class="privacy_sec mt-5 mb-5">
        <!-- container -->
        <div class="container">
            <div class="page_wrapper">
                <div class="page_title mb-4">
                    <h3>{{ $data->title }}</h3>
                </div>
                <div class="page_content">
                   {!! $data->body !!}
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
