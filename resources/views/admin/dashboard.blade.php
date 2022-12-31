@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('content')
@section('title') Settings @endsection
@section('dashboard', 'active')


<div class="page-wrapper">

    {{-- <div class="container-xl">
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                        {{ __('Dashboard') }}
                    </h2>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="page-body">
        <div class="container-xl">
            <div class="row  g-3 dashboard_card mb-5">
                <div class="col-sm-6 col-lg-3">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.transactions') }}">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('Overall Income') }}</div>
                                </div>
                                <div class="h1">{{ $currency->symbol }}{{ number_format($overall_income, 2) }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.transactions') }}?date={{ date('Y-m-d') }}">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('Today Income') }}</div>
                                </div>
                                <div class="h1">{{ $currency->symbol }}{{ number_format($today_income, 2) }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.users') }}">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('Overall Users') }}</div>
                                </div>
                                <div class="h1">{{ $overall_users }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.users') }}?date={{ date('Y-m-d') }}">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('Today Users') }}</div>
                                </div>
                                <div class="h1">{{ $today_users }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-4">
                    <div class="card dash-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="subheader">{{ __('Available Themes') }}</div>
                            </div>
                            <div class="h1">{{ $themes }}</div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-sm-6 col-lg-4">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.plans') }}">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('Available Plans') }}</div>
                                </div>
                                <div class="h1">{{ $plans }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.payment.methods') }}">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('Supported Payment Gateways') }}</div>
                                </div>
                                <div class="h1">{{ $gateways }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">

                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="{{ route('admin.cards') }}">
                            <div class="d-flex align-items-center mb-3">
                                <div class="subheader">{{ __('BUSINESS CARDS') }}</div>
                            </div>
                            <div class="h1">{{ $card_count }}</div>
                        </a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="#">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('WHATSAPP STORES') }}</div>
                                </div>
                                <div class="h1">{{ $whatsapp_stores ?? 0 }} <small style="font-size: 12px;text-align: right;">{{ __('Comming Soon')}}</small></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card dash-card">
                        <div class="card-body">
                            <a href="#">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="subheader">{{ __('SIGNATURES') }} </div>
                                </div>
                                <div class="h1">{{ $signatures ?? 0 }} <small style="font-size: 12px;text-align: right;">{{ __('Comming Soon')}}</small></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.footer')
</div>
@endsection


