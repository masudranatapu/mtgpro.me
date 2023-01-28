@extends('user.layouts.app')

@section('title') {{ __('User Invoice') }}  @endsection

@push('custom_css')
    <style>
        .card {
            box-shadow: rgb(35 46 60 / 4%) 0 2px 4px 0;
            border: 1px solid rgba(101, 109, 119, .16);
            border-radius: 1px;
            background: #fff !important;
        }
        .profile_info h3 {
            font-size: 17px;
            font-weight: 600;
            font-family: 'Inter';
            margin: 0;
            color: #070707;
        }
        .profile_info span {
            color: #888888;
            font-size: 14px;
            font-family: 'Inter';
            font-weight: 400;
        }
        .divider {
            border-bottom: 1px dashed #DDD;
            position: relative;
            margin: 23px 0px;
        }
        .divider i {
            position: absolute;
            top: -12px;
            right: 0;
            left: 0;
            text-align: center;
            margin: 0 auto;
            font-size: 28px;
            background: #fff;
            width: 53px;
            color: orange;
        }
        .custom_table{
            background: rgb(255, 255, 255);
            padding: 30px;
            border-radius: 16px;
        }
        .custom_image {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 85px;
            height: 80px;
        }
        /* .review_content p {
            margin: 0;
            font-size: 14px;
            text-align: justify;
            color: #5e5e5e;
            line-height: 26px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }
        .edit_review {
            position: absolute;
            top: 8px;
            right: 13px;
            cursor: pointer;
        }
        .edit_review i {
            color: #BBB;
            font-size: 19px;
            transition: all 0.3s ease;
        }


        .review_edit_form label {
            font-size: 14px;
            color: #3b3b3b;
            font-family: 'Poppins';
            font-weight: 400;
        }

        .review_edit_form .form-control {
            height: 44px;
            border: 1px solid #DDD;
            outline: none;
            box-shadow: none;
            border-radius: 3px;
        }
        .review_edit_form .btn {
            padding: 6px 33px;
            border-radius: 2px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 15px;
            border: none !important;
        }
        .status{
        margin: 20px;
        float: right;
        }
        .active{
            color: orange;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }
        .pending{
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        } */
    </style>
@endpush

@section('my_order','active')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-sm-between" style="margin-right: -56px">
                    <h1 class="m-0">{{ __('My Order') }}</h1>
                    <div class="customer-desing"></div>
                        <button onclick="printDiv('printableArea')" class="btn btn-info " style="margin-right: 62px;">Print</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row" id="default">
                <div class="col-12">
                    <div class="card invoice_wrap" id="printableArea">

                        <div class="card-body" style="padding-left: 5%; padding-right:5%">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="logo">
                                        <img src="{{ getPhoto(getSetting()->site_logo) }}" width="100" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div style="float:right">
                                        <h4><strong>{{ getSetting()->site_name }}</strong></h4>
                                        <address>
                                            {{ getSetting()->office_address }}
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
                                            <span class="h4"><strong>Import parts and mechanical</strong></span>
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
                                                <strong>{{ $order->transaction->payment_gateway_name }}</strong></td>
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
</div>
@endsection

@push('custom_js')
<script>
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
@endpush
