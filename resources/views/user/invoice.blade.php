@extends('user.layouts.app')
@push('custom_css')
<style>
	@media print {
	  .hidden-print {
	    display: none !important;
	  }
	}
	.card {
		border:none !important;
		background: #fff !important;
	}
	.card-header {
		background: #fff !important;
		border-color: #EEE;
	}
 	.card-body p {
    	font-size: 18px;
    	font-weight: 600;
    	color: #000000;
	}
	.card-body h4, .card-body p{
	    font-size: 15px;
	}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: 27px;
    font-size: 15px;
    color: #555;
}
.card-body h1 {
    font-size: 22px;
    font-weight: 400;
}
.card-body td.title {
    font-size: 14px;
    font-weight: 500;
    color: #000;
    vertical-align: middle;
}


</style>
@endpush
<?php
$row = $transaction ?? [];
$settings = getSetting();
$invoice_details = json_decode($row->invoice_details);
?>
@section('title') {{ __('Invoice')}} @endsection
@section('card','active')
@section('content')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 d-print-none">
                    <h1 class="m-0">{{ __('Invoice') }}</h1>
                    <a href="{{ route('user.invoice.download',$row->invoice_number) }}" class="btn btn-primary float-right pull-right">
                        <img src="{{ asset('assets/img/icon/download.svg') }}" alt="">
                        {{ __('Download')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="setting_sec section mt-3 mb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-lg">
                            <div class="p-4" id="invoice">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="h3">{{ $settings->site_name }}</p>
                                            <address>
                                                {{ $invoice_details->from_billing_name }}<br>
                                                {{ $invoice_details->from_billing_address }}
                                                <br>
                                            {{ $invoice_details->from_billing_city }},
                                            {{ $invoice_details->from_billing_state }}
                                            <br>
                                            {{ $invoice_details->from_billing_country }},
                                            {{ $invoice_details->from_billing_zipcode }}
                                                <br>
                                                {{ $invoice_details->from_billing_email }}

                                                <br>
                                                {{ $invoice_details->from_billing_phone }}
                                                <br>
                                                <br>
                                                <p>Tax Number: {{ $invoice_details->from_vat_number }}</p>
                                            </address>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="h3"> {{ $invoice_details->to_billing_name }}</p>
                                            <address>
                                            {{ $invoice_details->to_billing_address }}
                                            <br>
                                            {{ $invoice_details->to_billing_city }}
                                            {{ $invoice_details->to_billing_state }}
                                            <br>

                                            {{ $invoice_details->to_billing_country }}
                                            {{ $invoice_details->to_billing_zipcode }}

                                                <br>
                                                {{ $invoice_details->to_billing_email }}
                                                <br>
                                                {{ $invoice_details->to_billing_phone }}
                                                <br>
                                            </address>
                                            <h4>INVOICE DATE : {{date('d-m-Y H:i A', strtotime( $row->transaction_date))}}</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-10 my-5">
                                                <h1>
                                                INVOICE NO : {{ $row->invoice_prefix }}-{{ $row->invoice_number }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-transparent">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 5%"></th>
                                                <th>Description</th>
                                                <th class="text-center" style="width: 8%"></th>
                                                <th class="text-end" ></th>
                                                <th class="text-end" style="width: 10%">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody><tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <p class="strong mb-1">Extended : {{ $row->desciption }}</p>
                                                <div class="text-muted">Via :
                                                {{ $row->payment_gateway_name }}</div>
                                            </td>
                                            <td class="text-center"></td>
                                            <td class="text-end"></td>
                                            <td class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="4" class="title strong text-end">Subtotal</td>
                                            <td class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="title strong text-end">Tax Amount</td>
                                            <td class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->tax_amount,2) }}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="4" class="title font-weight-bold text-uppercase text-end">Total</td>
                                            <td class="font-weight-bold text-end">
                                                <strong>$ {{ CurrencyFormat($invoice_details->invoice_amount,2) }}</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <p class="text-muted text-center mt-5" style="font-weight: 300;">
                                        Thank you very much for doing business with us. We look forward to working with you again!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	        </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')

@endpush
