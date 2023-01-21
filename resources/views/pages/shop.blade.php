@extends('layouts.app')
@section('shop','active')
<?php
    $rows = $data ?? [];
?>
@section('title') {{ __('Terms & Conditions') }} @endsection
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
<!-- ======================= Terms Conditions  =========================== -->
<div class="shop_sec mt-5 mb-5">
    <!-- container -->
    <div class="container">
        <div class="page_wrapper">
            <div class="page_title mb-4">
                <h3>Over 100 products</h3>
            </div>
            <div class="row">
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/2.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/3.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/4.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/5.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/3.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/2.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/5.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/2.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- product item --}}
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product_item">
                        <div class="product_img text-center">
                            <a href="{{ route('product.details') }}">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details') }}">Mtgpro Card</a></h3>
                            </div>
                            <div class="product_article">
                                <p>
                                    <a href="{{ route('product.details') }}">
                                        Add to Cart
                                    </a>
                                    <span class="float-end">$2333</span>
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
