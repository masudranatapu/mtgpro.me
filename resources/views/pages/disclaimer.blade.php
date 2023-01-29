@extends('layouts.app')
@section('home','active')
<?php
    $setting  = getSetting();

?>
@section('title') {{ 'Disclamimber' }} @endsection
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
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta property="og:description" content="" />
<meta name="twitter:description" content="">
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="WEBSITE" />
<meta property="og:title" content=":" />
<meta name="twitter:title" content=":">
<meta name="twitter:card" value="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="">
<meta name="twitter:site" content="{{Request::url()}}" />
<meta name="twitter:url" content="{{Request::url()}}" />
<meta property="og:site_name" content=" " />
<meta property=" og:type" content="website" />
@endsection
@section('content')
<div class="termsconditon_sec mt-5 mb-5">
    <div class="container">
        <div class="page_wrapper">
            <div class="page_title mb-4">
                <h1 class="#">Disclaimer</h1>
            </div>
            <div class="page_content">

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, beatae soluta. Asperiores maiores
                    tempora, doloribus nobis perferendis tenetur earum at quidem possimus velit, necessitatibus minima
                    totam, laboriosam modi esse optio.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
<script>
</script>
@endpush
