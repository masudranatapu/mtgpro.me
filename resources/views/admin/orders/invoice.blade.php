@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@push('css')
    <style>
        .invoice {
            border-style: solid;
            border-width: 10px 0px;
        }
    </style>
@endpush('css')
@section('settings', 'active')

<?php
$setting = getSetting();
?>

@section('content')
    @section('title') {{ __('Order Invoice') }} @endsection
@section('product_ordrs', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row" id="default">
                <div class="col-12">
                    <div class="row content-header">
                        <div class="col-md-12 col-md-offset-1 margin-tb mb-1">
                            <div class="float-start">
                                <h3 class="mb-0 d-inline-block">Invoice</h3>
                            </div>
                            <div class="float-end">

                                <button onclick="printDiv('printableArea')" class="btn btn-primary">Print</button>
                            </div>
                        </div>
                    </div>
                    <div class="card invoice_wrap" id="printableArea">

                        <div class="card-body" style="padding-left: 5%; padding-right:5%">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="logo">
                                        <img src="{{ getPhoto($setting->site_logo) }}" width="100" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div style="float:right">
                                        <h4><strong>{{ $setting->site_name }}</strong></h4>
                                        <address>
                                            {{ $setting->office_address }}
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice"
                                style="border-style: solid;border-width: 2px 0px; padding:2%; border-color:darkgray">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="invoice_title ">
                                            <h2><strong>INVOICE</strong></h2>
                                            <span>Invoice No.</span>
                                            <strong>{{ $order->order_number }}</strong> <br>

                                            <p><b>Date:
                                                    {{ date('d M Y', strtotime($order->transaction->transaction_date)) }}</b>
                                            </p>

                                            <p>Status: <strong
                                                    class="text-success">{{ $order->transaction->payment_status }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                    @php
                                        $invoieDetails = json_decode($order->transaction->invoice_details, true);
                                    @endphp
                                    <div class="col-4">

                                        <div class="">
                                            <p>SOLD TO:</p>
                                            <span class="h4"><strong>Modern Contact Solutions For Today's Mortgage
                                                    Professional</strong></span>
                                            <address>
                                                {{ $invoieDetails['from_billing_name'] }}</br>
                                                {{ $invoieDetails['from_billing_email'] }}</br>
                                                {{ $invoieDetails['from_billing_address'] }}</br>
                                                {{ $invoieDetails['from_billing_state'] }}</br>
                                                {{ $invoieDetails['from_billing_phone'] }}</br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="invoice_table table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="40%">Product</th>
                                            <th width="15%">Unit Price</th>
                                            <th width="20%">Quantity</th>
                                            <th width="15%">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if (isset($order->order_details) && count($order->order_details) > 0)
                                            @foreach ($order->order_details as $key => $detail)
                                                <tr>
                                                    <td>{{ $detail->product->product_name }}</td>
                                                    <td>{{ $detail->unit_price }}</td>
                                                    <td>{{ $detail->quantity }}</td>
                                                    <td>{{ getPrice($detail->unit_price * $detail->quantity) }} </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                        <tr>
                                            <td colspan="2"></td>
                                            <td><strong>Total:</strong></td>
                                            <td><strong>{{ getPrice($order->total_price) }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>Discount</td>
                                            <td>{{ getPrice($order->discount) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>VAT ({{ $order->vat }}%):</td>
                                            <td>{{ getPrice($order->vat) }}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2"></td>
                                            <td>Payment Fee:</td>
                                            <td>{{ getPrice($order->payment_fee) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Currency: <strong
                                                    style="text-transform: uppercase;">{{ $order->transaction->transaction_currency ?? '' }}</strong>
                                            </td>
                                            <td colspan="1"></td>
                                            <td><strong>Grand Total:</strong></td>
                                            <td><strong> {{ getPrice($order->grand_total) }}</strong></td>
                                        </tr>
                                        <tr class="bg-default">
                                            <td>Payment Method:
                                                <strong>{{ $order->transaction->payment_gateway_name }}</strong>
                                            </td>
                                            <td colspan="1"></td>
                                            <td class="text-success">Payment:</td>
                                            <td class="text-success">
                                                {{ getPrice($order->transaction->transaction_amount) }}</td>
                                        </tr>
                                        {{-- <tr>
                                                <td colspan="2"></td>
                                                <td><strong>Balance Due:</strong></td>
                                                 <td class="text-success"> 0.00 AUD </td>
                                            </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.footer')
</div>
@endsection
@section('scripts')
<script>
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
@endsection
