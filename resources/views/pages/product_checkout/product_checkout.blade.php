@extends('layouts.app')

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
<?php
?>
@section('content')
    <div class="content-wrapper checkout-wrapper py-4">
        <div class="content mt-5">
            <div class="container">
                <div class="row g-4">
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
                    <div class="col-lg-7 col-12">
                        <form action="{{ route('product.orderCheckout') }}" id="order-form" method="post">
                            @csrf


                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title mb-3">{{ __('Billing Details') }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Name') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('billing_name') is-invalid @enderror"
                                                    name="billing_name" placeholder="{{ __('Name') }}..." required
                                                    value="{{ $user->billing_name ?? $user->name }}">
                                                @if ($errors->has('billing_name'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Email') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="email"
                                                    class="form-control validated @error('billing_email') is-invalid @enderror"
                                                    name="billing_email" placeholder="{{ __('Email') }}..." required
                                                    value="{{ $user->email }}"
                                                    data-validation-required-message="Please enter your address" required>
                                                @if ($errors->has('billing_email'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Billing Address') }} <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control validated @error('billing_address') is-invalid @enderror" name="billing_address"
                                                    cols="10" rows="3" placeholder="{{ __('Billing Address') }}..." required>{{ $user->billing_address }}</textarea>
                                                @if ($errors->has('billing_address'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_address') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Billing City') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('billing_city') is-invalid @enderror"
                                                    name="billing_city" placeholder="{{ __('Billing City') }}..."
                                                    value="{{ $user->billing_city }}" required>
                                                @if ($errors->has('billing_city'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_city') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Billing State') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('billing_state') is-invalid @enderror"
                                                    name="billing_state"
                                                    placeholder="{{ __('Billing State/Province') }}..."
                                                    value="{{ $user->billing_state }}" required>
                                                @if ($errors->has('billing_state'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_state') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Billing Zip Code') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('billing_zipcode') is-invalid @enderror"
                                                    name="billing_zipcode" placeholder="{{ __('Billing Zip Code') }}..."
                                                    value="{{ $user->billing_zipcode }}" required>
                                                @if ($errors->has('billing_zipcode'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_zipcode') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Billing Country') }} <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-item">
                                                    <input id="country_selector" name="billing_country"
                                                        class="form-control" type="text"
                                                        value="{{ Auth::user()->billing_country }}">
                                                    <label for="country_selector" style="display:none;">Select a country
                                                        here...</label>
                                                </div>
                                                <div class="form-item" style="display:none;">
                                                    <input type="text" id="country_selector_code"
                                                        name="country_selector_code" data-countrycodeinput="1"
                                                        readonly="readonly"
                                                        placeholder="Selected country code will appear here" />
                                                    <label for="country_selector_code">...and the selected country code
                                                        will be updated here</label>
                                                </div>
                                                @if ($errors->has('billing_country'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('billing_country') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label class="form-label">{{ __('Type') }} <span
                                                        class="text-danger">*</span></label>
                                                <select name="type" id="type"
                                                    class="form-control @error('type') is-invalid @enderror">
                                                    <option value="personal"
                                                        {{ Auth::user()->type == 'personal' ? 'selected' : '' }}>
                                                        {{ __('Personal') }}</option>
                                                    <option value="business"
                                                        {{ Auth::user()->type == 'personal' ? 'selected' : '' }}>
                                                        {{ __('Business') }}</option>
                                                </select>
                                                @if ($errors->has('type'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('type') }}</span>
                                                @endif
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4 col-xl-4">
                                            <div class="mb-3 form-group">
                                                <label for="billing_phone" class="form-label d-block">{{ __('Phone') }}
                                                    <span class="text-danger">*</span></label>
                                                <input id="billing_phone" name="billing_phone" class="form-control"
                                                    type="tel" required value="{{ Auth::user()->billing_phone }}">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="payment_gateway_id"
                                                class="form-label d-block">{{ __('Payment method') }} <span
                                                    class="text-danger">*</span></label>
                                            @if (!empty($gateways) && count($gateways) > 0)
                                                @foreach ($gateways as $gateway)
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div
                                                                class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                                                <label class="form-selectgroup-item flex-fill">
                                                                    <input type="radio" name="payment_gateway_id"
                                                                        id="payment_gateway_id"
                                                                        value="{{ $gateway->id }}"
                                                                        class="form-selectgroup-input @error('payment_gateway_id') is-invalid @enderror">
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

                                            <button type="submit" id="continuePaypalBtn"
                                                class="btn btn-primary">{{ __('Continue for payment') }}</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.product_checkout.pay_with_stripe')
@endsection
{{-- @dd($config[9]->config_value) --}}
@push('custom_js')
    {{-- <script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script> --}}
    <script src="{{ asset('assets/js/countrySelect.min.js') }}"></script>
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var countryCode = "{{ Auth::user()->billing_country_code ?? 'us' }}";
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
        //   $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>
@endpush
