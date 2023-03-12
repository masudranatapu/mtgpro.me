@extends('layouts.app')
@section('home','active')
<?php
    $rows = $data ?? [];
?>
@section('title') {{ __('Tutorial Details') }} @endsection
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
                <h3>Tutorial Details</h3>
            </div>

            <div class="tutorials_wrapper">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="tutorials_details">
                            <div class="img_box mb-4">
                                <iframe src="https://www.youtube.com/embed/odfhA6tFlZY" title="video" frameborder="0"
                                    allowfullscreen style="width:100%; height:400px;"></iframe>
                            </div>
                            <div class="content">
                                <h2>How to setup (with a Mtgpro device)</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                    up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                    going through the cites of the word in classical literature, discovered the
                                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                                    Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45
                                    BC. This book is a treatise on the theory of ethics, very popular during the
                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                                    from a line in section 1.10.32.
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
