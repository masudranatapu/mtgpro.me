@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')
@section('product_ordrs', 'active')
@section('title') {{ __('Product Orders Edit') }} @endsection
@section('page-name') {{ __('Product Orders Edit') }} @endsection
<?php

?>
@push('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
@endpush
@section('product_ordrs', 'active')
@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-12 col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <div class="col">
                                    <div class="float-left">
                                        {{ __('Product Order Edit') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.orders') }}"
                                            class="btn btn-primary">{{ __('Back') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.orders.update', $productOrder->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-xl-10">
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label required">{{ __('User') }}</label>
                                                        <input type="hidden" name="user_id"
                                                            value="{{ $productOrder->user_id }}">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ __('User') }}"
                                                            value="{{ $productOrder->user_name }}" readonly required>
                                                        {!! $errors->first('user_id', '<label class="help-block text-danger">:message</label>') !!}

                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="order_date">{{ __('Order Date') }}
                                                        </label>
                                                        <input type="text" class="form-control" id="datepicker"
                                                            name="order_date" placeholder="{{ __('DD-MM-YYYY') }}..."
                                                            value="{{ date('d M Y', strtotime($productOrder->order_date)) }}">
                                                        {!! $errors->first('order_date', '<label class="help-block text-danger">:message</label>') !!}

                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            id="order_number">{{ __('Order Number ') }} </label>
                                                        <input type="text" class="form-control" name="order_number"
                                                            placeholder="{{ __('Order Number ') }}"
                                                            value="{{ $productOrder->order_number }}" readonly>
                                                        {!! $errors->first('order_number ', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="quantity">{{ __('Quantity') }}
                                                        </label>
                                                        <input type="number" class="form-control" readonly
                                                            value="{{ $productOrder->quantity }}" name="quantity"
                                                            placeholder="{{ __('Quantity') }}" value="">
                                                        {!! $errors->first('quantity', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="discount">{{ __('Discount') }}
                                                        </label>
                                                        <input type="number" class="form-control" readonly
                                                            value="{{ $productOrder->discount }}" name="discount"
                                                            placeholder="{{ __('Discount') }}" value="">
                                                        {!! $errors->first('discount', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="total_price">{{ __('Total Price') }}
                                                        </label>
                                                        <input type="number" class="form-control" readonly
                                                            value="{{ $productOrder->total_price }}" name="total_price"
                                                            placeholder="{{ __('Total Price') }}" value="">
                                                        {!! $errors->first('total_price', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="payment_fee">{{ __('Payment Fee') }}
                                                        </label>
                                                        <input type="number" class="form-control" readonly
                                                            value="{{ $productOrder->payment_fee }}" name="payment_fee"
                                                            placeholder="{{ __('Payment Fee') }}" value="">
                                                        {!! $errors->first('payment_fee', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="grand_total">{{ __('Grand Total') }}
                                                        </label>
                                                        <input type="number" class="form-control" readonly
                                                            value="{{ $productOrder->grand_total }}" name="grand_total"
                                                            placeholder="{{ __('Grand Total') }}" value="">
                                                        {!! $errors->first('grand_total', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            id="payment_method">{{ __('Payment Method') }} </label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $productOrder->payment_method }}"
                                                            name="payment_method" readonly
                                                            placeholder="{{ __('Payment Method') }}" value="">
                                                        {!! $errors->first('payment_method', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="type">{{ __('Type') }} </label>
                                                            <select id="type" class="form-control" name="type">
                                                                <option value="1"
                                                                    {{ $productOrder->type == 1 ? 'selected' : '' }}>
                                                                    {{ __('Photo Frame    ') }}</option>
                                                                <option value="2"
                                                                    {{ $productOrder->type == 2 ? 'selected' : '' }}>
                                                                    {{ __('Gift Card') }}</option>
                                                            </select>
                                                            {!! $errors->first('type', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="type">{{ __('Type') }} </label>
                                                            <select id="type" class="form-control" name="type">
                                                                <option value="1"
                                                                    {{ $productOrder->type == 1 ? 'selected' : '' }}>
                                                                    {{ __('Photo Frame    ') }}</option>
                                                                <option value="2"
                                                                    {{ $productOrder->type == 2 ? 'selected' : '' }}>
                                                                    {{ __('Gift Card') }}</option>
                                                            </select>
                                                            {!! $errors->first('type', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h1>Billing Address</h1>
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="to_billing_name">{{ __('Billing Name') }}
                                                            </label>
                                                            <input type="text" class="form-control" readonly
                                                                name="to_billing_name" id=""
                                                                value="{{ $trnasectionDetail['to_billing_name'] }}">
                                                            {!! $errors->first('to_billing_name', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="to_billing_address">{{ __('Billing address') }}
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="to_billing_address" id=""
                                                                value="{{ $trnasectionDetail['to_billing_address'] }}">
                                                            {!! $errors->first('to_billing_address', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="to_billing_city">{{ __('Billing city') }}
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="to_billing_city" id=""
                                                                value="{{ $trnasectionDetail['to_billing_city'] }}">
                                                            {!! $errors->first('to_billing_city', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="to_billing_state">{{ __('Billing state') }}
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="to_billing_state" id=""
                                                                value="{{ $trnasectionDetail['to_billing_state'] }}">
                                                            {!! $errors->first('to_billing_state', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="to_billing_zipcode">{{ __('Billing zip code') }}
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                name="to_billing_zipcode" id=""
                                                                value="{{ $trnasectionDetail['to_billing_zipcode'] }}">
                                                            {!! $errors->first('to_billing_zipcode', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3 form-group">
                                                        <label class="form-label">{{ __('Billing Country') }} <span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-item">
                                                            <input id="country_selector" name="billing_country" readonly
                                                                class="form-control" type="text"
                                                                value="{{ $trnasectionDetail['to_billing_country'] }}">
                                                            <label for="country_selector" style="display:none;">Select a
                                                                country
                                                                here...</label>
                                                        </div>
                                                        <div class="form-item" style="display:none;">
                                                            <input type="text" id="country_selector_code"
                                                                name="country_selector_code" data-countrycodeinput="1"
                                                                readonly="readonly"
                                                                placeholder="Selected country code will appear here" />
                                                            <label for="country_selector_code">...and the selected country
                                                                code
                                                                will be updated here</label>
                                                        </div>
                                                        @if ($errors->has('billing_country'))
                                                            <span
                                                                class="help-block text-danger">{{ $errors->first('billing_country') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3 form-group">
                                                        <label for="billing_phone"
                                                            class="form-label d-block">{{ __('Phone') }}
                                                            <span class="text-danger">*</span></label>
                                                        <input id="billing_phone" name="billing_phone" readonly
                                                            class="form-control" type="tel" required
                                                            value="{{ $trnasectionDetail['to_billing_phone'] }}">
                                                    </div>
                                                    @if ($errors->has('billing_phone'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('billing_phone') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3 form-group">
                                                        <label for="to_billing_email"
                                                            class="form-label d-block">{{ __('Email') }}
                                                            <span class="text-danger">*</span></label>
                                                        <input id="to_billing_email" name="to_billing_email" readonly
                                                            class="form-control" type="email" required
                                                            value="{{ $trnasectionDetail['to_billing_email'] }}">
                                                    </div>
                                                    @if ($errors->has('to_billing_email'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('to_billing_email') }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4 my-3">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-edit" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path
                                                                    d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                                </path>
                                                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3">
                                                                </path>
                                                                <line x1="16" y1="5" x2="19"
                                                                    y2="8"></line>
                                                            </svg>
                                                            {{ __('Update') }}
                                                        </button>
                                                    </div>
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
        </div>
        @include('admin.includes.footer')
    </div>

@endsection
@push('scripts')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="{{ asset('assets/js/countrySelect.min.js') }}"></script>
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>

    <script>
        $(function() {
            $('#datepicker').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                onSelect: function(selectedDate) {
                    // we can write code here
                }
            });


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

        });
    </script>
@endpush
