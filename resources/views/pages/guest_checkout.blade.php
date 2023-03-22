@extends('layouts.app')
@section('title', 'Product Checkout')

@push('custom_css')
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.min.css') }}" />
@endpush

@section('content')
    <div class="content-wrapper checkout-wrapper py-4">
        <div class="content">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-7 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="card-title mb-3">Contact information </h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        Already have an account? <a href="{{ route('login') }}"> Log in </a>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="GET">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Email Address') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="{{ __('Email address') }}"  autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input type="checkbox" name="agree_to_mail" class="form-check-input"
                                                    id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    Send me email and transactional SMS updates about my order. Msg & data
                                                    rates may apply.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <h5>Shipping address</h5>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Country/Region') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-item">
                                                    <input id="country_selector" name="country" class="form-control">
                                                    <label for="country_selector" style="display:none;">
                                                        Select a country here
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('First name') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    placeholder="{{ __('First name') }}" name="first_name"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Last name') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    name="last_name" placeholder="{{ __('Last name') }}"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Address') }} <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" cols="10" rows="2"
                                                    placeholder="{{ __('Address') }}"   autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Apartment, suite, etc. (optional)') }}
                                                </label>
                                                <textarea class="form-control" cols="10" rows="2" name="address_two"
                                                    placeholder="{{ __('Apartment, suite, etc. (optional)') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('City') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('city') is-invalid @enderror" name="city"
                                                    placeholder="{{ __('City') }}"  autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Postal code') }}
                                                </label>
                                                <input type="text" class="form-control" name="postal_code"
                                                    placeholder="{{ __('Postal code') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label d-block">
                                                    {{ __('Phone') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('cart') }}">
                                                <i class="fa-solid fa-backward"></i>
                                                Return to cart
                                            </a>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="submit" class="btn btn-primary">
                                                Continue to shipping
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Product Purchese') }}</h6>
                                <div class="card-table">
                                    <table class="table">
                                        <thead class="bg-white">
                                            <tr>
                                                <th class="w-1">{{ __('Product') }}</th>
                                                <th class="w-1">{{ __('Quantity') }}</th>
                                                <th class="w-1 text-end">{{ __('Price') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                                $shipingTotal = session()->get('shiping', 0);
                                            @endphp
                                            @foreach ($products as $product)
                                                @php $total += $product['price'] * $product['quantity'] @endphp
                                                <tr class="align-middle">
                                                    <td>
                                                        <img src="{{ getPhoto($product['image']) }}" alt=""
                                                            width="50px" srcset="">&emsp;
                                                        <span> <a
                                                                href="{{ route('product.details', ['product' => $product['slug']]) }}">{{ $product['name'] }}</a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{ $product['quantity'] }}
                                                    </td>
                                                    <td class="text-end">
                                                        {{ getPrice($product['quantity'] * $product['price']) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" class="text-end">
                                                    <h5><strong> Total : </strong></h5>
                                                </td>
                                                <td class="text-end">{{ getPrice($total) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-end">
                                                    <h5><strong>Coupon Discount :</strong></h5>
                                                </td>
                                                <td id="cupponPrice" class="text-end">
                                                    @if (session()->has('coupon'))
                                                        @if (session('coupon')->discount_type == '0')
                                                            - {{ getPrice(session('coupon')->amount) }}
                                                        @elseif (session('coupon')->discount_type == '1')
                                                            - {{ getPrice(($total * session('coupon')->amount) / 100) }}
                                                        @else
                                                            {{ getPrice(0) }}
                                                        @endif
                                                    @else
                                                        {{ getPrice(0) }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-end">
                                                    <h5><strong>Vat : </strong></h5>
                                                </td>
                                                <td class="text-end">
                                                    + {{ getprice(($total * $config[25]->config_value) / 100) }}
                                                </td>

                                                @php
                                                    $total = $total + ($total * $config[25]->config_value) / 100;
                                                @endphp
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-end">
                                                    <h5><strong>Shipping Cost : </strong></h5>
                                                </td>
                                                <td class="text-end">
                                                    + {{ getprice($shipingTotal) }}
                                                </td>
                                                @php
                                                    $total = $total + $shipingTotal;
                                                @endphp
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-end">
                                                    <h5><strong>Grand Total : </strong></h5>
                                                </td>
                                                <td class="text-end">

                                                    @if (session()->has('coupon'))
                                                        @if (session('coupon')->discount_type == '0')
                                                            <h5>{{ getprice($total - session('coupon')->amount) }}</h5>
                                                        @elseif (session('coupon')->discount_type == '1')
                                                            <h5>
                                                                <strong>{{ getprice($total - ($total * session('coupon')->amount) / 100) }}
                                                                </strong><span>
                                                                    ({{ session('coupon')->amount }}%)
                                                                </span>
                                                            </h5>
                                                        @else
                                                            <h5>
                                                                {{ getprice($total) }}
                                                            </h5>
                                                        @endif
                                                    @else
                                                        <h5>
                                                            {{ getprice($total) }}
                                                        </h5>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shop.pay_with_stripe')
@endsection

@push('custom_js')
    {{-- <script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script> --}}
    <script src="{{ asset('assets/js/countrySelect.min.js') }}"></script>
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $("#country_selector").countrySelect({
            responsiveDropdown: true,
            preferredCountries: ['us', 'uk', 'ca'],
        });
    </script>
@endpush
