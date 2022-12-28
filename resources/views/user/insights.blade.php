@extends('user.layouts.app')
@section('title') {{ __('Instghts') }}  @endsection
@push('custom_css')
@endpush
@section('insights','active')
@section('content')
        <!-- main content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ __('Instghts') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ __('10') }}</h3>
                                    <p>{{ __('Total Cards') }}</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ __('05') }}</h3>
                                    <p>{{ __('Total Card Share') }}</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ __('Free') }}</h3>
                                    <p>{{ __('Current Plan') }}</p>
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
