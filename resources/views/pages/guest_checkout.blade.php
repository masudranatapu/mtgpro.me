@extends('layouts.app')

@section('title', 'Product Checkout')

@push('custom_css')
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
    <style>
        .card {
            box-shadow: rgb(35 46 60 / 4%) 0 2px 4px 0;
            border: 1px solid rgba(101, 109, 119, .16);
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(101, 109, 119, .16);
            border-radius: 4px;
        }

        .card-title {
            display: block;
            margin: 0 0 1rem;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5rem;
        }

        .form-selectgroup-boxes .form-selectgroup-label {
            text-align: left;
            padding: 1rem 1rem;
            color: inherit;
        }

        .form-selectgroup-label {
            position: relative;
            display: block;
            min-width: calc(1.4285714em + 0.875rem + 2px);
            margin: 0;
            padding: 0.4375rem 0.75rem;
            font-size: .875rem;
            line-height: 1.4285714;
            color: #656d77;
            background: #fff;
            text-align: center;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid #dadcde;
            border-radius: 3px;
            transition: border-color .3s, background .3s, color .3s;
        }

        .form-selectgroup-input[type=radio]+.form-selectgroup-label .form-selectgroup-check {
            border-radius: 50%;
        }

        .form-selectgroup-input {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0;
        }

        .form-selectgroup .form-selectgroup-item {
            margin: 0 0.5rem 0.5rem 0;
        }

        .form-selectgroup-item {
            display: block;
            position: relative;
        }

        .form-selectgroup-input:checked+.form-selectgroup-label {
            z-index: 1;
            color: #206bc4;
            background: rgba(32, 107, 196, .25);
            border-color: #90b5e2;
        }

        input.country_selector,
        .country_selector button {
            height: 35px;
            margin: 0;
            padding: 6px 12px;
            border-radius: 2px;
            font-family: inherit;
            font-size: 100%;
            color: inherit;
        }

        ::-webkit-input-placeholder {
            color: #BBB;
        }

        ::-moz-placeholder {
            color: #BBB;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #BBB;
        }

        #result {
            margin-bottom: 100px;
        }

        .country-select.inside {
            width: 100% !important;
        }

        .iti.iti--allow-dropdown {
            width: 100%;
        }
    </style>
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
                            <form action="{{ route('product.orderCheckout') }}" id="order-form" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Email Address') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" required name="billing_email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="{{ __('Email address') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <h5>Billing / Shipping Details</h5>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Full name') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    placeholder="{{ __('Full name') }}" required name="billing_name"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Address') }} <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control @error('address') is-invalid @enderror" required name="billing_address" cols="10" rows="2"
                                                    placeholder="{{ __('Address') }}" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Apartment, suite, etc. (optional)') }}
                                                </label>
                                                <textarea class="form-control" cols="10" rows="2" name="billing_address_two"
                                                    placeholder="{{ __('Apartment, suite, etc. (optional)') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('City') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('city') is-invalid @enderror" required name="billing_city"
                                                    placeholder="{{ __('City') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('State') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text"
                                                    class="form-control @error('state') is-invalid @enderror" required name="billing_state"
                                                    placeholder="{{ __('State') }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Postal code') }}
                                                </label>
                                                <input type="text" class="form-control" name="billing_zipcode"
                                                    placeholder="{{ __('Postal code') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">
                                                    {{ __('Country/Region') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-item">
                                                    <input id="country_selector" required name="billing_country" class="form-control">
                                                    <label for="country_selector" style="display:none;">
                                                        Select a country here
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-3 form-group">
                                                <label for="billing_phone" class="form-label d-block">{{ __('Phone') }}
                                                    <span class="text-danger">*</span></label>
                                                <input id="billing_phone" required name="billing_phone" class="form-control"
                                                    type="tel" required value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="payment_gateway_id" class="form-label d-block">
                                                {{ __('Payment method') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            @if (!empty($gateways) && count($gateways) > 0)
                                                @foreach ($gateways as $key => $gateway)
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div
                                                                class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                                                <label class="form-selectgroup-item flex-fill">
                                                                    <input type="radio" name="payment_gateway_id"
                                                                        id="payment_gateway_id"
                                                                        value="{{ $gateway->id }}"
                                                                        class="form-selectgroup-input @error('payment_gateway_id') is-invalid @enderror"
                                                                        {{ $key == 0 ? 'checked' : '' }}>
                                                                    <div
                                                                        class="form-selectgroup-label d-flex align-items-center p-3">
                                                                        <div class="me-3">
                                                                            <span class="form-selectgroup-check"></span>
                                                                        </div>
                                                                        <div>
                                                                            <span
                                                                                class="payment payment-provider-{{ $gateway->payment_gateway_name == 'Paypal' ? 'paypal' : 'visa' }} payment-xs me-2">
                                                                                <img width="36"
                                                                                    src="{{ asset($gateway->payment_gateway_logo) }}"
                                                                                    alt="{{ $gateway->display_name }}">
                                                                            </span>
                                                                            {{ $gateway->display_name }} <strong></strong>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
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
                                                Continue for payment
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

        var input = document.querySelector("#billing_phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            autoHideDialCode: false,
            autoPlaceholder: "on",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    callback(countryCode);
                });
            },
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: false,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['us', 'uk', 'ca'],
            separateDialCode: false,
            utilsScript: "{{ asset('assets/js/utils.js') }}",
        });

        $("#country_selector").countrySelect({
            responsiveDropdown: true,
            preferredCountries: ['us', 'uk', 'ca'],
        });


        $(document).on('submit', '#order-form', function(e) {
            if ($('input[type=radio]:checked').length == 0) {
                toastr.error('ERROR! Please choose any payment method!');
                return false;
            } else {
                if ($('input[type=radio]:checked').val() == 1) {
                    return true;
                } else {
                    $('#stp_billing_name').val($('input[name=billing_name]').val());
                    $('#stp_billing_email').val($('input[name=billing_email]').val());
                    $('#stp_billing_phone').val($('input[name=billing_phone]').val());
                    $('#stp_billing_address').val($('textarea[name=billing_address]').val());
                    $('#stp_billing_city').val($('input[name=billing_city]').val());
                    $('#stp_billing_state').val($('input[name=billing_state]').val());
                    $('#stp_billing_zipcode').val($('input[name=billing_zipcode]').val());
                    $('#stp_billing_country').val($('input[name=billing_country]').val());
                    $('#stp_vat_number').val($('input[name=vat_number]').val());
                    $('#paymentStripe').modal('show');
                    return false;
                }
            }
        })

        $(function() {
            // Set your publishable key: remember to change this to your live publishable key in production
            // See your keys here: https://dashboard.stripe.com/apikeys
            var stripe = Stripe('{{ $config[9]->config_value }}');
            // var stripe = Stripe('pk_test_51M9pqYBIRmXVjgUGW3b1i91X0uTNeU6umRaoD9UprcFLotiHpfdBwgr4MnkbZoPuKKPFmdWJFVzWTwvUgxBrcl1d00OcqJU0Ta');
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            var style = {
                base: {
                    // Add your base input styles here. For example:
                    fontSize: '16px',
                    color: '#32325d',
                },
            };
            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style
            });
            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Create a token or display an error when the form is submitted.
            var form = document.getElementById('payment-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                stripe.createToken(card).then(function(result) {
                    console.log(result);
                    if (result.error) {
                        // Inform the customer that there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });
        });

        function stripeTokenHandler(token) {
            console.log(token);
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>
@endpush
