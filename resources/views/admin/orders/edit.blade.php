@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')
@section('product_ordrs', 'active')
@section('title') {{__('Product Orders Edit')}} @endsection
@section('page-name') {{__('Product Orders Edit')}} @endsection
<?php

?>
@section('product_ordrs', 'active')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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
                                    <a href="{{ route('admin.orders')}}" class="btn btn-primary">{{ __('Back')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.orders.update',$productOrder->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-xl-10">
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label required">{{ __('User') }}</label>
                                                        <input type="hidden" name="user_id" value="{{$productOrder->user_id}}">
                                                        <input type="text" class="form-control" placeholder="{{ __('User') }}"
                                                            value="{{$productOrder->user_name}}" readonly required>
                                                            {!! $errors->first('user_id', '<label class="help-block text-danger">:message</label>') !!}

                                                    </div>
                                                </div>
                                               <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="order_date">{{ __('Order Date') }} </label>
                                                        <input type="text" class="form-control" id="datepicker" name="order_date" placeholder="{{ __('DD-MM-YYYY') }}..."
                                                            value="{{ date('d M Y',strtotime($productOrder->order_date)) }}" >
                                                        {!! $errors->first('order_date', '<label class="help-block text-danger">:message</label>') !!}

                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="order_number">{{ __('Order Number ') }} </label>
                                                        <input type="text" class="form-control"  name="order_number" placeholder="{{ __('Order Number ') }}"
                                                            value="{{$productOrder->order_number}}" readonly>
                                                        {!! $errors->first('order_number ', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="quantity">{{ __('Quantity') }} </label>
                                                        <input type="number" class="form-control" readonly value="{{$productOrder->quantity}}" name="quantity" placeholder="{{ __('Quantity') }}"
                                                            value="">
                                                        {!! $errors->first('quantity', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="discount">{{ __('Discount') }} </label>
                                                        <input type="number" class="form-control" readonly value="{{ $productOrder->discount}}" name="discount" placeholder="{{ __('Discount') }}"
                                                            value="">
                                                        {!! $errors->first('discount', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                 <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="total_price">{{ __('Total Price') }} </label>
                                                        <input type="number" class="form-control" readonly value="{{$productOrder->total_price}}" name="total_price" placeholder="{{ __('Total Price') }}"
                                                            value="">
                                                        {!! $errors->first('total_price', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                 <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="payment_fee">{{ __('Payment Fee') }} </label>
                                                        <input type="number" class="form-control" readonly value="{{$productOrder->payment_fee}}" name="payment_fee" placeholder="{{ __('Payment Fee') }}"
                                                            value="">
                                                        {!! $errors->first('payment_fee', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="grand_total">{{ __('Grand Total') }} </label>
                                                        <input type="number" class="form-control" readonly value="{{$productOrder->grand_total}}" name="grand_total" placeholder="{{ __('Grand Total') }}"
                                                            value="">
                                                        {!! $errors->first('grand_total', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="payment_method">{{ __('Payment Method') }} </label>
                                                        <input type="text" class="form-control" value="{{$productOrder->payment_method}}" name="payment_method" placeholder="{{ __('Payment Method') }}"
                                                            value="">
                                                        {!! $errors->first('payment_method', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required" for="payment_status">{{ __('Payment Status') }} </label>
                                                            <select id="payment_status" class="form-control" name="payment_status">
                                                                <option value="0" {{$productOrder->payment_status == 0? 'selected' : ''}}>{{ __('Non Paid')}}</option>
                                                                <option value="1" {{$productOrder->payment_status == 1? 'selected' : ''}}>{{ __('Paid')}}</option>
                                                                <option value="2" {{$productOrder->payment_status == 2? 'selected' : ''}}>{{ __('Pending')}}</option>
                                                            </select>
                                                            {!! $errors->first('payment_status', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required" for="type">{{ __('Type') }} </label>
                                                            <select id="type" class="form-control" name="type">
                                                                <option value="1" {{$productOrder->type == 1? 'selected' : ''}}>{{ __('Photo Frame    ')}}</option>
                                                                <option value="2" {{$productOrder->type == 2? 'selected' : ''}}>{{ __('Gift Card')}}</option>
                                                            </select>
                                                            {!! $errors->first('type', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4 my-3">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                <path
                                                                    d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                                </path>
                                                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3">
                                                                </path>
                                                                <line x1="16" y1="5" x2="19" y2="8"></line>
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
<script>
    $( function() {
        $('#datepicker').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            onSelect: function(selectedDate) {
                 // we can write code here
             }
      });
    } );
    </script>
@endsection
