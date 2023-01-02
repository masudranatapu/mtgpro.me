@extends('user.layouts.app')
@section('title') {{ __('Checkout')}} @endsection
@section('plan','active')
@section('meta_tag')
@endsection
@push('custom_css')
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/countrySelect.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

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
 .table thead th {
    color: #656d77;
    background: #f4f6fa;
    font-size: .625rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .04em;
    line-height: 1.6;
    color: #656d77;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

tbody, td {
    font-size: 13px;
    color: #3e3e3e;
    font-family: 'Poppins', sans-serif;
    padding: 12px 5px !important;
}

.form-label {
    margin-bottom: 0.5rem;
    font-size: .875rem;
    font-weight: 500;
}

.form-control {
    display: block;
    width: 100%;
    padding: 0.4375rem 0.75rem;
    font-size: .875rem;
    font-weight: 400;
    outline: none !important;
    box-shadow: none !important;
    line-height: 1.4285714;
    color: #232e3c;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #dadcde;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 4px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
.btn {
    display: inline-block;
    font-weight: 500;
    line-height: 1.4285714;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.4375rem 1rem;
    font-size: .875rem;
    border-radius: 4px;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.input-group-text{background-color: transparent;border-radius: 4px 0px 0px 4px; font-size: .899rem; text-align: left;}

.select2-container--open .select2-selection {
    box-shadow: none!important;
}
.select2-container--open .select2-selection .select2-selection__arrow {
    z-index: 9999;
}
.select2-dropdown {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  border-color: #66afe9;
  border-top-width: 1px!important;
  border-top-style: solid!important;
  border-top-left-radius: 4px!important;
  border-top-right-radius: 4px!important;
  margin-top: -34px!important;
}
.select2-dropdown .select2-search {
    padding: 0;
}
.select2-dropdown .select2-search .select2-search__field {
  border-top: 0;
  border-left: 0;
  border-right: 0;
  border-radius: 0;
  padding: 6px 12px;
  height: 33px;
}
.select2-dropdown.select2-dropdown--above {
  border-bottom: 1px solid #dadcde;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  margin-top: 34px!important;
}
.select2-dropdown.select2-dropdown--above .select2-search .select2-search__field {
  border-top: 1px solid #dadcde;
  border-bottom: 0;
}
.select2-container--default .select2-selection--single {
    height: 37px;
    padding: 0.4375rem 0.75rem;
    font-size: .875rem;
    font-weight: 400;
    outline: none !important;
    box-shadow: none !important;
    line-height: 1.4285714;
    color: #232e3c;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #dadcde;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 4px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 19px;
}
input.country_selector,.country_selector button {
	height: 35px;
	margin: 0;
	padding: 6px 12px;
	border-radius: 2px;
	font-family: inherit;
	font-size: 100%;
	color: inherit; }
	input[disabled], button[disabled] {
		background-color: #eee;
    }
    ::-webkit-input-placeholder {
        color: #BBB; }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #BBB;
        opacity: 1;
    }

    :-ms-input-placeholder {
        color: #BBB;
    }
    #result {
        margin-bottom: 100px; }
        .country-select.inside {
        width: 100%!important;
    }

    .iti.iti--allow-dropdown {
        width: 100%;
    }
</style>
@endpush
<?php
    $country_code = Config::get('app.country_code') ?? [];
?>
@section('content')

<div class="content-wrapper py-4">
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('My Cards') }} <a class="create_plus_icon" href="{{ route('user.card.create') }}"><i class="fab fa-plus"></i></a></h1>
                </div>
            </div>
        </div>
    </div> --}}
        <div class="content">

<div class="container-fluid">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('Upgrade / Renewal Plan')}}</h6>
                    <div class="card-table">
                        <table class="table">
                            <thead class="bg-white">
                                <tr>
                                    <th class="w-1">{{ __('Description')}}</th>
                                    <th class="w-1">{{ __('Price')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            @if($plan->is_yearly)
                                            {{$plan->plan_name}} - {{ __('1 Year')}}
                                            @else
                                            {{$plan->plan_name}} - {{ __('1 Month')}}
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-bold"> $ @if($plan->is_yearly) {{$plan->plan_price_yearly}} @else {{$plan->plan_price_monthly}} @endif</td>
                                </tr>
                                <tr>
                                    <td class="h6 text-bold">{{ __('Total Payable')}}</td>
                                    <td class="w-1 text-bold h6"> $ @if($plan->is_yearly) {{$plan->plan_price_yearly}} @else {{$plan->plan_price_monthly}} @endif</td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <form action="{{ route('user.checkout.post-transection') }}" id="order-form" method="post">
                @csrf
                <input type="hidden" name="plan_id" value="{{$plan->id}}">
                <input type="hidden" name="is_yearly" value="{{$plan->is_yearly ?? 0}}">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-3">{{ __('Billing Details')}}</h6>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Name')}} <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('billing_name') is-invalid @enderror" name="billing_name" placeholder="{{ __('Name')}}..." required value="{{$user->billing_name ?? $user->name}}">
                                            @if($errors->has('billing_name'))
                                            <span class="help-block text-danger">{{ $errors->first('billing_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Email')}} <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control @error('billing_email') is-invalid @enderror" name="billing_email" placeholder="{{ __('Email')}}..." required value="{{$user->email}}">
                                            @if($errors->has('billing_email'))
                                                <span class="help-block text-danger">{{ $errors->first('billing_email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Billing Address')}} <span class="text-danger">*</span></label>
                                            <textarea class="form-control validated @error('billing_address') is-invalid @enderror" name="billing_address" cols="10" rows="3" placeholder="{{ __('Billing Address')}}..."  required data-validation-required-message=
                                            "Please enter your address">{{$user->billing_address}}</textarea>
                                            @if($errors->has('billing_address'))
                                            <span class="help-block text-danger">{{ $errors->first('billing_address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Billing City')}} <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('billing_city') is-invalid @enderror" name="billing_city" placeholder="{{ __('Billing City')}}..."  value="{{$user->billing_city}}" required>
                                            @if($errors->has('billing_city'))
                                            <span class="help-block text-danger">{{ $errors->first('billing_city') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Billing State')}} <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('billing_state') is-invalid @enderror" name="billing_state" placeholder="{{ __('Billing State/Province')}}..." value="{{$user->billing_state}}" required>
                                            @if($errors->has('billing_state'))
                                            <span class="help-block text-danger">{{ $errors->first('billing_state') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                             <label class="form-label">{{ __('Billing Zip Code')}} <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('billing_zipcode') is-invalid @enderror" name="billing_zipcode" placeholder="{{ __('Billing Zip Code')}}..." value="{{$user->billing_zipcode}}" required>
                                            @if($errors->has('billing_zipcode'))
                                            <span class="help-block text-danger">{{ $errors->first('billing_zipcode') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Billing Country')}} <span class="text-danger">*</span></label>
                                            <div class="form-item">
                                                <input id="country_selector" name="billing_country" class="form-control" type="text" value="{{ Auth::user()->billing_country }}">
                                                <label for="country_selector" style="display:none;">Select a country here...</label>
                                            </div>
                                            <div class="form-item" style="display:none;">
                                                <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                                                <label for="country_selector_code">...and the selected country code will be updated here</label>
                                            </div>
                                            @if($errors->has('billing_country'))
                                            <span class="help-block text-danger">{{ $errors->first('billing_country') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Type')}} <span class="text-danger">*</span></label>
                                            <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                                                <option value="personal" {{ Auth::user()->type == 'personal' ? 'selected' : '' }}>{{ __('Personal')}}</option>
                                                <option value="business" {{ Auth::user()->type == 'personal' ? 'selected' : '' }}> {{ __('Business')}}</option>
                                            </select>
                                            @if($errors->has('type'))
                                            <span class="help-block text-danger">{{ $errors->first('type') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4">
                                        <div class="mb-3">
                                            <label for="billing_phone" class="form-label d-block">{{ __('Phone')}} <span class="text-danger">*</span></label>
                                            <input id="billing_phone" name="billing_phone"  class="form-control" type="tel" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">{{ __('Payment method')}}</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if (!empty($gateways) && count($gateways) > 0)
                                @foreach ($gateways as $gateway)
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                                            <label class="form-selectgroup-item flex-fill">
                                                <input type="radio" name="payment_gateway_id" value="{{ $gateway->id }}" class="form-selectgroup-input @error('payment_gateway_id') is-invalid @enderror">
                                                <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                    <div class="me-3">
                                                        <span class="form-selectgroup-check"></span>
                                                    </div>
                                                    <div>
                                                        <span class="payment payment-provider-{{ $gateway->payment_gateway_name == 'Paypal' ? 'paypal' : 'visa' }} payment-xs me-2">
                                                        <img width="36" src="{{ asset($gateway->payment_gateway_logo) }}" alt="{{ $gateway->display_name }}">
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
                                <div class="col-12">
                                    <button type="submit" id="continuePaypalBtn" class="btn btn-dark">{{ __('Continue for payment') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('user.plan._partial-pay-with-stripe')
@endsection

{{-- @dd($config[9]->config_value) --}}


@push('custom_js')
<script src="{{ asset('assets/js/countrySelect.min.js') }}"></script>
<script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script>

$(document).ready(function(){

 $('#simple_form input, #simple_form textarea').jqBootstrapValidation({
  preventSubmit: true,
 });

});

        // $(function(){$(".validated").jqBootstrapValidation();});

    // $(function(){
    //     $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    // });
    $(document).ready(function() {
        $('.select2').select2({});
    });
    $(document).on('submit','#order-form', function(e){
        if($('input[type=radio]:checked').length == 0){
            toastr.error('ERROR! Please choose any payment method!');
            return false;
        }else{
            if($('input[type=radio]:checked').val() == 1){
                return true;
            }else{
                $('#stp_billing_name').val($('input[name=billing_name]').val());
                $('#stp_billing_email').val($('input[name=billing_email]').val());
                $('#stp_billing_phone').val($('input[name=billing_phone]').val());
                $('#stp_billing_address').val($('textarea[name=billing_address]').val());
                $('#stp_billing_city').val($('input[name=billing_city]').val());
                $('#stp_billing_state').val($('input[name=billing_state]').val());
                $('#stp_billing_zipcode').val($('input[name=billing_zipcode]').val());
                $('#stp_billing_country').val($('input[name=billing_country]').val());
                $('#stp_vat_number').val($('input[name=vat_number]').val());
                $('#stp_type').val($('input[name=type]').val());
                $('#paymentStripe').modal('show');
                return false;
                }
            }
        })

        var countryCode = 'us';
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
            utilsScript: "{{ asset('assets/js/utils.js')}}",
        });

		$("#country_selector").countrySelect({
			responsiveDropdown: true,
			preferredCountries: ['us', 'uk', 'ca'],
		});


  </script>


<script src="https://js.stripe.com/v3/"></script>
<script>
    // Set your publishable key: remember to change this to your live publishable key in production
    // See your keys here: https://dashboard.stripe.com/apikeys
    var stripe = Stripe('{{ $config[9]->config_value }}');
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
    var card = elements.create('card', {style: style});
    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Create a token or display an error when the form is submitted.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        stripe.createToken(card).then(function (result) {
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
    function stripeTokenHandler(token) {
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
