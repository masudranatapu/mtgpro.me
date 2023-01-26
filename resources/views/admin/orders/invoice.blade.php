@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@push('css')
    <style>
         .invoice{
            border-style: solid;
            border-width: 10px 0px;
        }

    </style>
@endpush('css')
@section('settings', 'active')
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
                                            <img src="{{asset('assets/uploads/logo/arobil_logo_70x70-63b2d1dd8e53e.png')}}" width="100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="float:right">
                                            <h4><strong>Zentune</strong></h4>
                                            <address>

                                                zentune@outlook.com <br>
                                                (+61)481 850 386 <br>

                                                3/1 Adpet Lane, <br>

                                                Bankstown NSW, <br>

                                                2200 Sydney Australia
                                            </address>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice" style="border-style: solid;border-width: 2px 0px; padding:2%; border-color:darkgray">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="invoice_title float-start">
                                                <h2><strong>INVOICE</strong></h2>
                                                <span>Invoice No.</span>
                                                <strong>{{$orderTransactions->invoice_number}}</strong> <br>

                                                <p><b>Date: {{ date('d M Y',strtotime($orderTransactions->transaction_date))}}</b></p>

                                                    <p>Status: <strong class="text-success">{{$orderTransactions->payment_status}}</strong></p>
                                            </div>
                                        </div>
                                        @php
                                            $invoieDetails = json_decode($orderTransactions->invoice_details, true)
                                        @endphp
                                        <div class="col-md-3">
                                        
                                            <div class="invoice_address ml-120 float-end">
                                                <p>SOLD TO:</p>
                                                <span class="h4"><strong>Import parts and mechanical</strong></span>
                                                <address>
                                                    {{$invoieDetails['from_billing_name']}}</br>
                                                    {{$invoieDetails['from_billing_email']}}</br>
                                                    {{$invoieDetails['from_billing_address']}}</br>
                                                    {{$invoieDetails['from_billing_state']}}</br>
                                                    {{$invoieDetails['from_billing_phone']}}</br>
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
                                            <tr>
                                                <td>{{$orderDetails->product_name}}</td>
                                                <td>{{$orderDetails->unit_price}}</td>
                                                <td>{{$orderDetails->quantity}}</td>
                                                <td>{{ getPrice($total =  $orderDetails->unit_price * $orderDetails->quantity)}} </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td><strong>Total:</strong></td>
                                                <td><strong>{{getPrice($total)}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td>VAT ({{$invoiceOrder->vat}}%):</td>
                                                <td>{{getPrice($total + $invoiceOrder->vat)}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td>Payment Fee:</td>
                                                <td>{{getPrice($invoiceOrder->payment_fee)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Currency: <strong>{{$orderTransactions->transaction_currency}}</strong></td>
                                                <td colspan="1"></td>
                                                <td><strong>Grand Total:</strong></td>
                                                <td><strong> {{getPrice($totalPayment = $total + $invoiceOrder->payment_fee)}} AUD</strong></td>
                                            </tr>
                                            <tr class="bg-default">
                                                <td>Payment Method: <strong>{{$orderTransactions->payment_gateway_name}}</strong></td>
                                                <td colspan="1"></td>
                                                <td class="text-success">Payment:</td>
                                                <td class="text-success"> {{getPrice($totalPayment)}} AUD</td>
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
