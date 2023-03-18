@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')
@section('coupon', 'active')
@section('title') {{ __('Coupon Edit') }} @endsection
@section('page-name') {{ __('Coupon Edit') }} @endsection
<?php

?>
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
    <style>
        .iti .iti--allow-dropdown {
            width: 100%;
        }

        .country-select {
            width: 100%;
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 35px !important;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #dadcde !important;
            border-radius: 4px;
            height: 35px !important;
        }
    </style>
@endpush
@section('coupon', 'active')
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
                                        {{ __('Coupon Edit') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.coupon.index') }}"
                                            class="btn btn-primary">{{ __('Back') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.coupon.update', ['coupon' => $coupon->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="row">
                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Name') }}</label>
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') border-danger @enderror"
                                                        placeholder="{{ __('Name') }}"
                                                        value="{{ old('name') ?? $coupon->name }}" required>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Coupon Code') }}</label>
                                                    <input type="text" name="coupon_code"
                                                        class="form-control @error('coupon_code') border-danger @enderror"
                                                        placeholder="{{ __('Coupon Code') }}"
                                                        value="{{ old('coupon_code') ?? $coupon->coupon_code }}" required>
                                                    @error('coupon_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Discount Type') }}</label>
                                                    <select name="discount_type" id="discount_type"
                                                        class="form-control @error('discount_type') border-danger @enderror"
                                                        value="{{ old('discount_type') }}" required>

                                                        <option value="0"
                                                            @if ($coupon->discount_type == '0') selected @endif>Amount
                                                        </option>
                                                        <option value="1"
                                                            @if ($coupon->discount_type == '1') selected @endif>Percentage
                                                        </option>
                                                        <option value="2"
                                                            @if ($coupon->discount_type == '2') selected @endif>Free Shipping
                                                        </option>
                                                        <option value="3"
                                                            @if ($coupon->discount_type == '3') selected @endif>Free Shipping
                                                            With Condition
                                                        </option>
                                                    </select>
                                                    @error('discount_type')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xl-3" id="amountSection">
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label required amountLabel">{{ __('Amount') }}</label>

                                                    @if ($coupon->discount_type == '3')
                                                        <input type="number" name="amount"
                                                            class="form-control @error('amount') border-danger @enderror"
                                                            placeholder="{{ __('Amount') }}"
                                                            value="{{ old('amount') ?? $coupon->condition_price }}"
                                                            id="amount">
                                                    @else
                                                        <input type="number" name="amount"
                                                            class="form-control @error('amount') border-danger @enderror"
                                                            placeholder="{{ __('Amount') }}"
                                                            value="{{ old('amount') ?? $coupon->amount }}" id="amount">
                                                    @endif

                                                    @error('amount')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Status') }}</label>

                                                    <select name="status" id="status"
                                                        class="form-control @error('status') border-danger @enderror"
                                                        required>
                                                        <option value="" class="d-none">Select Status</option>
                                                        <option @if (old('status') ?? !$coupon->status) selected @endif
                                                            value="0">Inactive
                                                        </option>
                                                        <option @if (old('status') ?? $coupon->status) selected @endif
                                                            value="1">Active
                                                        </option>
                                                    </select>

                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Valid Date Form') }}</label>
                                                    <input type="text" name="valid_date_form"
                                                        class="form-control @error('valid_date_form') border-danger @enderror"
                                                        placeholder="{{ __('Valid Date Form') }}"
                                                        value="{{ old('valid_date_form') ?? date('m-d-Y', strtotime($coupon->valid_from)) }}"
                                                        id="valid_date_form" required>
                                                    @error('valid_date_form')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Expired Date') }}</label>
                                                    <input type="text" name="expired_date"
                                                        class="form-control @error('expired_date') border-danger @enderror"
                                                        placeholder="{{ __('Expired Date') }}"
                                                        value="{{ old('expired_date') ?? date('m-d-Y', strtotime($coupon->valid_to)) }}"
                                                        id="expired_date" required>
                                                    @error('expired_date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xl-3">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Coupon For') }}</label>

                                                    <select name="coupon_for" id="coupon_for"
                                                        class="form-control @error('coupon_for') border-danger @enderror"
                                                        required>
                                                        <option value="" class="d-none">Coupon For</option>
                                                        <option @if (old('coupon_for') ?? $coupon->coupon_for == 'for_all') selected @endif
                                                            value="for_all">ALL Users
                                                        </option>
                                                        <option @if (old('coupon_for') ?? $coupon->coupon_for == 'for_specific_user') selected @endif
                                                            value="for_specific_user">Specific User
                                                        </option>
                                                    </select>

                                                    @error('coupon_for')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-xl-3" id="user" style="display: none;">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Select User') }}</label>

                                                    <select name="selected_user" id="selected_user"
                                                        class="form-control @error('selected_user') border-danger @enderror">
                                                        <option value="">Select Users</option>

                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}"
                                                                @if ($user->id == $coupon->user_id) selected @endif>
                                                                {{ $user->name ?? '' }}
                                                            </option>
                                                        @endforeach
                                                    </select>


                                                    @error('selected_user')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                        </div>

                                        <button type="submit" class="btn text-center btn-success w-5">Save</button>

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
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/select2.full.js') }}"></script>

    <script>
        $('document').ready(function() {
            let value = $('#coupon_for').val();
            console.log(value);
            selectUser(value);
        })
        $(function() {
            $('#valid_date_form').datepicker({
                autoclose: true,
                startDate: new Date(new Date().setDate(new Date().getDate() - 1)),
                format: "mm-dd-yyyy",
            });
            $('#expired_date').datepicker({
                autoclose: true,
                startDate: new Date(new Date().setDate(new Date().getDate() - 1)),
                format: "mm-dd-yyyy",
            });

            $('#selected_user').select2();

            $('#coupon_for').change(function(e) {
                let value = e.target.value;

                selectUser(value)

            });

            $('#discount_type').change(function(e) {
                let value = e.target.value;
                discountTypeSet(value);
            });





        });

        function selectUser(coupon_for) {
            if (coupon_for == "for_specific_user") {
                $('#user').css('display', 'block')
                $('#selected_user').prop('required', true)

            } else {
                $('#user').css('display', 'none')
                $('#selected_user').prop('required', false)

            }
        }
        $('document').ready(function() {
            let value = $('#discount_type').val();
            discountTypeSet(value);
        })

        function discountTypeSet(type) {
            if (type == "0") {
                $('#amountSection').css('display', 'block');
                $('#amount').prop('required', true);

                $('.amountLabel').text("Amount")
            } else if (type == "1") {
                $('#amountSection').css('display', 'block');
                $('#amount').prop('required', true);
                $('.amountLabel').text("Percentage")
            } else if (type == "2") {
                $('#amountSection').css('display', 'block');
                $('#amount').prop('required', false);
                $('#amountSection').css('display', 'none');

            } else if (type == "3") {
                $('#amountSection').css('display', 'block');
                $('#amount').prop('required', true);
                $('.amountLabel').text("Minimum Spend")

            }
        }
    </script>
@endpush
