@extends('layouts.app')
@section('shop', 'active')
<?php
$rows = $data ?? [];
$cart = session('cart');

?>
@section('title') {{ __('Shop') }} @endsection

@push('custom_css')
<style>
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
<!-- ======================= Shop  =========================== -->
<div class="shop_sec mt-5 mb-5">
    <!-- container -->
    <div class="container">
        <div class="page_wrapper">
            <div class="page_title mb-4">
                <h3>Over {{ $products->count() ?? 0 }} Products</h3>
            </div>
            <div class="row">
                {{-- product item --}}
                @foreach ($products as $product)
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 d-sm-flex align-items-stretch">
                    <div class="card product_item">
                        <div class="product_img text-center">

                            <a href="{{ route('product.details', ['product' => $product->product_slug]) }}">
                                <img src="{{ asset(getPhoto($product->thumbnail)) }}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="product_content card-body d-sm-flex flex-column">
                            <div class="product_title text-center mb-4">
                                <h3><a href="{{ route('product.details', ['product' => $product->product_slug]) }}">{{
                                        $product->product_name }}</a>
                                </h3>
                            </div>
                            <div class="product_article mt-auto">
                                <p>

                                    @if (isset($cart) && array_key_exists($product->id, $cart))
                                    <a href="javascript:void(0)" data-id="{{ $product->id }}"
                                        onclick="addedToCart({{ $product->id }})">
                                        Added
                                    </a>
                                    @else
                                    <a href="javascript:void(0)" data-id="{{ $product->id }}"
                                        onclick="addToCart({{ $product->id }})" class="product_id_{{ $product->id }}">
                                        Add to Cart
                                    </a>
                                    @endif

                                    @if (isset($product->unit_price))
                                    <sup class="float-end">{{ getprice($product->unit_price_regular) }}</sup>
                                    <span class="float-end">{{ getprice($product->unit_price) }}</span>
                                    @else
                                    <span class="float-end">{{ getprice($product->unit_price_regular) }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- container -->
</div>
@endsection
