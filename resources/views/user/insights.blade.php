@extends('user.layouts.app')
@section('title') {{ __('Instghts') }} @endsection
@section('insights', 'active')
<?php

$total_connect = $data['total_connect'] ?? 0;
$total_card_view = $data['total_card_view'] ?? 0;
$total_contact_download = $data['total_contact_download'] ?? 0;
$total_qrcode_download = $data['total_qrcode_download'] ?? 0;
$total_card = $data['total_card'] ?? 0;
$current_plan = $data['current_plan'];

?>
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Insights') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content dashboard_item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <a class="text-dark" href="{{ route('user.crm') }}">
                            <div class="small-box">
                                <div class="inner">
                                    <h3>{{ __($total_connect) }}</h3>
                                    <p>
                                        {{ __('Total Connect') }}
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <a class="text-dark" href="{{ route('user.card.view.history') }}">

                            <div class="small-box">
                                <div class="inner">
                                    <h3>{{ __($total_card_view) }}</h3>
                                    <p>{{ __('Card Views') }}
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <a class="text-dark" href="{{ route('user.card.download.history') }}">
                            <div class="small-box">
                                <div class="inner">
                                    <h3>{{ __($total_contact_download) }}</h3>
                                    <p>{{ __('Contacts Downloaded') }}
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <a href="{{ route('user.qr.download.history') }}" class="text-dark">
                            <div class="small-box">
                                <div class="inner">
                                    <h3>{{ __($total_qrcode_download) }}</h3>
                                    <p>{{ __('QR Code Downloaded') }}
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <a href="{{ route('user.card') }}" class="text-dark">
                            <div class="small-box">
                                <div class="inner">
                                    <h3>{{ __($total_card) }}</h3>
                                    <p>{{ __('Total Cards') }}
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="small-box">
                            <div class="inner">
                                <h3>{{ __($current_plan->plan_name . ' plan') }} </h3>
                                <p>{{ __('Current Plan') }}
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
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
