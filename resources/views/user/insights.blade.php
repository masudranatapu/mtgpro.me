@extends('user.layouts.app')
@section('title') {{__('Instghts') }}  @endsection
@section('insights','active')
<?php

$total_connect = $data['total_connect'] ?? [];
$total_card_view = $data['total_card_view'] ?? [];
$total_contact_download = $data['total_contact_download'] ?? [];
$total_card = $data['total_card'] ?? [];
$current_plan = $data['current_plan'] ?? [];


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
                    <div class="small-box">
                        <div class="inner">
                            <h3>{{__($total_connect)}}</h3>
                            <p>{{ __('Total Connect') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title=""></i></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>{{__($total_card_view)}}</h3>
                            <p>{{ __('Card Views') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title=""></i></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>{{__($total_contact_download)}}</h3>
                            <p>{{ __('Contacts Downloaded') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title=""></i></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="small-box">
                        <div class="inner">
                            <h3>{{__($total_card)}}</h3>
                            <p>{{ __('Total Cards') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title=""></i></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box">
                                <div class="inner">
                                    <h3>{{ __($current_plan->plan_name.' plan') }} </h3>
                                    <p>{{ __('Current Plan') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title=""></i></p>
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
