@extends('user.layouts.app')
@section('title') {{ __('Settings') }} @endsection
@push('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
<style>
    .setting_form .slim {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .switch-wrapper {
        position: relative;
        display: inline-flex;
        border-radius: 20px;
        background: white;
    }

    .switch-wrapper [type="radio"] {
        position: absolute;
        left: -9999px;
    }

    .switch-wrapper [type="radio"]:checked#yes~label[for="yes"],
    .switch-wrapper [type="radio"]:checked#no~label[for="no"] {
        color: #fff;
    }

    .switch-wrapper [type="radio"]:checked#yes~label[for="yes"]:hover,
    .switch-wrapper [type="radio"]:checked#no~label[for="no"]:hover {
        background: transparent;
    }

    .switch-wrapper [type="radio"]:checked#yes+label[for="no"]~.highlighter {
        transform: none;
    }

    .switch-wrapper [type="radio"]:checked#no+label[for="yes"]~.highlighter {
        transform: translateX(100%);
    }

    .switch-wrapper label {
        font-size: 14px;
        z-index: 1;
        cursor: pointer;
        border-radius: 20px;
        transition: color 0.25s ease-in-out;
        margin: 0;
        font-family: 'Inter', sans-serif;
        line-height: 44px;
        padding: 0px 36px 30px 30px;
        height: 47px;
        width: 83px;
        display: block;
        text-align: center;
    }

    .switch-wrapper .highlighter {
        position: absolute;
        top: 3px;
        left: 4px;
        width: calc(49% - 4px);
        height: calc(100% - 8px);
        border-radius: 20px;
        background: #212121;
        transition: transform 0.25s ease-in-out;
    }
</style>
@endpush

@php
$settings = getSetting();
$countries = \App\Helpers\CountryHelper::CountryCodes();
$subscription_end = new \Carbon\Carbon($user->plan_validity);
$subscription_start = new \Carbon\Carbon($user->plan_activation_date);
$plan_price_monthly = $plan->plan_price_monthly;
$plan_price_yearly =$plan->plan_price_yearly;
$diff_in_days = $subscription_start->diffInDays($subscription_end);
// dd($diff_in_days);
$duration = now()->diffInDays(\Carbon\Carbon::parse($user->plan_validity));

if($diff_in_days > 31){
$next_bill_date = date('F d, Y', strtotime($user->plan_activation_date . " +1 year"));
}else{
$next_bill_date = date('F d, Y', strtotime($user->plan_activation_date . " +1 month") );
}

$bill_date = date('d', strtotime($user->plan_activation_date));


@endphp


@section('settings','active')
@section('content')
<!-- main content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-9">
                    <div class="page_content account_setting mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3">
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <!-- My Subscription -->
                                    <a class="nav-link active" id="vert-tabs-subscription-tab" data-toggle="pill"
                                        href="#vert-tabs-subscription" role="tab" aria-controls="vert-tabs-subscription"
                                        aria-selected="true">
                                        <img src="{{ asset('assets/img/icon/plan.svg') }}" alt="icon">
                                        {{ __('My Subscription') }}
                                    </a>
                                    <!-- account settings -->
                                    <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill"
                                        href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
                                        aria-selected="true">
                                        <img src="{{ asset('assets/img/icon/settings.svg') }}" alt="icon">
                                        {{ __('Account Settings') }}
                                    </a>
                                    <!-- support -->
                                    <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill"
                                        href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
                                        aria-selected="false">
                                        <img src="{{ asset('assets/img/icon/support.svg') }}" alt="icon">
                                        {{ __('Support') }}
                                    </a>
                                    <!-- request a feature -->
                                    <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill"
                                        href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
                                        aria-selected="false">
                                        <img src="{{ asset('assets/img/icon/request.svg') }}" alt="icon">
                                        {{ __('Request a Feature') }}
                                    </a>
                                    <!-- logout -->
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                        title="{{ __('Logout') }}">
                                        <img src="{{ asset('assets/img/icon/logout.svg') }}" alt="icon">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-9">
                                <div class="tab-content" id="vert-tabs-tabContent">
                                    <!-- my subscription -->
                                    <div class="tab-pane fade active show" id="vert-tabs-subscription" role="tabpanel"
                                        aria-labelledby="vert-tabs-subscription-tab">
                                        <div class="setting_tab_contetn">
                                            <div class="subscription_info mb-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>
                                                            <span class="text-uppercase">{{ __($plan->plan_name)
                                                                }}</span>
                                                            @if ($duration > 0 && $plan->is_free==0)

                                                            <span class="float-right">{{__($duration)}} {{
                                                                __(Str::plural('day',$duration)) }} {{ __('left')
                                                                }}</span>
                                                            @else
                                                            @endif
                                                        </h3>
                                                        @if ($duration > 0 && $plan->is_free==0)
                                                        <a class="float-right" title="Cancel Current Plan"
                                                            href="{{ route('user.cancel-plan.stripe') }}"
                                                            onclick="return confirm('Are you sure you want to cancel this plan?');">{{
                                                            __('Cancel Subscription') }}</a>
                                                        @endif
                                                    </div>

                                                    <div class="card-body">
                                                        @if (checkPackage() && $plan->is_free==0)
                                                        @if ($diff_in_days > 31)
                                                        <h5>${{ CurrencyFormat($plan->plan_price_yearly,2) }}</h5>
                                                        <p>{{ CurrencyFormat($plan->plan_price_yearly,2) }} {{ __('per
                                                            year') }}.</p>
                                                        @else
                                                        <h5>${{ CurrencyFormat($plan->plan_price_monthly,2) }}</h5>
                                                        <p>{{ CurrencyFormat($plan->plan_price_monthly,2) }} {{ __('per
                                                            month') }}.</p>
                                                        @endif
                                                        {{-- <p>$14.99 per member per month.</p> --}}
                                                        {{-- <p>You will be charged <strong>$14.99 / month starting Jan
                                                                19</strong></p> --}}
                                                        {{-- <p>{{ __('You will be charged') }} <strong>{{
                                                                CurrencyFormat($plan->plan_price_monthly,2) }} / month
                                                                starting {{ date('M d, Y',
                                                                strtotime($user->plan_activation_date) ) }}</strong></p>
                                                        --}}
                                                        @else
                                                        <div class="text-center mb-5">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('user.plans') }}">{{ __('Upgrade now')
                                                                }}</a>
                                                        </div>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="billing_info_card subs_info">
                                                        <div class="card-header">
                                                            <h4>{{ __('Billing Infomation') }} <a href="#"
                                                                    data-toggle="modal" data-target="#billingModal"
                                                                    class="float-right">{{ __('Edit') }}</a>
                                                            </h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <table class="table">
                                                                @if (!empty($user->billing_country))
                                                                <tr>
                                                                    <td>{{ __('Country') }}</td>
                                                                    <td>{{ $user->billing_country }}</td>
                                                                </tr>
                                                                @endif
                                                                @if (!empty($user->billing_email))
                                                                <tr>
                                                                    <td>{{ __('Email') }}</td>
                                                                    <td>{{ $user->billing_email }}</td>
                                                                </tr>
                                                                @endif
                                                                @if (!empty($user->billing_zipcode))
                                                                <tr>
                                                                    <td>{{ __('Zip code') }}</td>
                                                                    <td>{{ $user->billing_zipcode }}</td>
                                                                </tr>
                                                                @endif
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="payment_method_card subs_info">
                                                        <div class="card-header">
                                                            <h4>
                                                                {{ __('Payment method') }}
                                                                <a href="javascript:void(0)" class="float-right"
                                                                    data-toggle="modal" data-target="#paymentModal">{{
                                                                    __($user->card_number !='' ? 'Edit':'Add') }}</a>
                                                            </h4>
                                                        </div>
                                                        @if (!empty($user->card_number))
                                                        <div class="card-body">
                                                            <div class="media p-1">
                                                                <img class="mr-3"
                                                                    src="{{ asset('assets/img/icon/mastercard2.png') }}"
                                                                    alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <div class="">
                                                                        <?php
                                                                                       $number = $user->card_number;
                                                                                    ?>
                                                                        <span class="d-block">{{'•••• •••• •••• ' .
                                                                            substr($number, -4) }}</span>
                                                                        <span class="d-block pb-1"><small>{{
                                                                                $user->card_type }} - {{ __('Expires')
                                                                                }} {{date('m/Y',
                                                                                strtotime($user->card_expiration_date))}}

                                                                            </small></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3">
                                                                <span class="d-block py-1"><small>{{ __('Billed on the')
                                                                        }} {{ $bill_date }}th of every
                                                                        @if ($diff_in_days > 1)
                                                                        {{ __('year') }}
                                                                        @else
                                                                        {{ __('month') }}
                                                                        @endif .</small></span>
                                                                <span class="d-block py-1">
                                                                    <small>
                                                                        {{ __('Next billing on') }}
                                                                        <span class=""><b>{{ $next_bill_date
                                                                                }}</b></span>
                                                                    </small>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="d-block py-3 text-center">
                                                            {{ __('Still credit card not added') }}
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @if (!empty($transections) && count($transections) > 0)
                                            <div class="invoice_table">
                                                <div class="header mb-1">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-7">
                                                            <h3>{{ __('Invoice history') }}</h3>
                                                            <p>{{ __('Here are your previous invoices and receipts') }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <a href="{{ route('user.all-invoice.download') }}"
                                                                class="btn btn-secondary float-md-right">{{ __('Download
                                                                all Invoice') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('Date') }}</th>
                                                            <th>{{ __('Invoice ID') }}</th>
                                                            <th>{{ __('Description') }}</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($transections as $row)
                                                        <tr>
                                                            <td>{{date('M d, Y', strtotime($row->transaction_date))}}
                                                            </td>
                                                            <td>{{ $row->invoice_number }}</td>
                                                            <td>{!! $row->desciption !!}</td>
                                                            <td class="text-right download_invoice">
                                                                <a
                                                                    href="{{ route('user.invoice.download',$row->invoice_number) }}">
                                                                    {{ __('Download') }}
                                                                    <img src="{{ asset('assets/img/icon/download.svg') }}"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                                @if ($transections->total() > $transections->perPage() )
                                                <a href="{{ route('user.transactions') }}">{{ __('See all') }}</a>
                                                @endif

                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- account settings -->
                                    <div class="tab-pane text-left fade" id="vert-tabs-home" role="tabpanel"
                                        aria-labelledby="vert-tabs-home-tab">
                                        <div class="setting_tab_contetn">

                                            <div class="heading mb-4">
                                                <h3>{{ __('Account Settings') }}</h3>
                                            </div>

                                            <div class="setting_form">

                                                <div class="plan_type switchBtn text-center mb-4 mt-3">
                                                    <div class="text-left">Notifications
                                                        <div class="switch-wrapper" style="width:auto !important;">
                                                            <input id="yes" name="notification" class="switcher_"
                                                                value="1" type="radio" name="switch"
                                                                @if(Auth::user()->is_notify==1) checked @endif>
                                                            <input id="no" name="notification" class="switcher_"
                                                                value="0" type="radio" name="switch"
                                                                @if(Auth::user()->is_notify==0) checked @endif>
                                                            <label for="yes">Yes</label>
                                                            <label for="no"
                                                                style="padding-right: 54px !important;">No</label>
                                                            <span class="highlighter"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <form action="{{ route('user.profile-info.update') }}"
                                                    id="updateProfile" method="post">
                                                    @csrf
                                                    <div class="form-group profile-pic">
                                                        <label class="form-label">{{ __('Profile picture') }} <i
                                                                class="fa fa-exclamation-circle" aria-hidden="true"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Ideal dimensions: 300px x 300px (1:1)"></i>
                                                        </label>
                                                        <div class="slim" data-force-min-size="false"
                                                            data-min-size="1,1" data-ratio="1:1" data-size="440,400"
                                                            data-max-file-size="100" data-min-file-size="1">
                                                            <img src="{{ getAvatar($user->profile_image) }}" alt="" />
                                                            <input type="file" name="profile_pic" id="profile_pic">
                                                        </div>
                                                        @if($errors->has('profile_pic'))
                                                        <span class="help-block text-danger">{{
                                                            $errors->first('profile_pic') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            value="{{ $user->email }}">
                                                        @if($errors->has('email'))
                                                        <span class="help-block text-danger">{{ $errors->first('email')
                                                            }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="connection_title" class="form-label">{{
                                                            __('Connection title') }}</label>
                                                        <input type="text" name="connection_title" id="connection_title"
                                                            class="form-control @error('connection_title') is-invalid @enderror"
                                                            value="{{ $user->connection_title }}">
                                                        @if($errors->has('connection_title'))
                                                        <span class="help-block text-danger">{{
                                                            $errors->first('connection_title') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="username" class="form-label">{{ __('Username') }}
                                                            (<a href="{{ route('home') }}/{{ $user->username }}"
                                                                target="blank">{{ route('home') }}/{{ $user->username
                                                                }}</a>)</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $user->username }}" readonly>

                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                            <span class="btn-txt">{{ __('Save') }}</span>
                                                        </button>
                                                    </div>
                                                </form>
                                                <div class="float-right">
                                                    <a href="{{ route('user.password.reset') }}"
                                                        title="{{ __('Reset Your Password') }}"
                                                        class="btn btn-primary reset_password_request">
                                                        <i
                                                            class="loading-spinner reset-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                        <span class="btn-txt">{{ __('Reset Your Password') }}</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-secondary text-danger"
                                                        data-toggle="modal" data-target="#deleteAccount">{{ __('Delete
                                                        Account') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Support -->
                                    <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                        aria-labelledby="vert-tabs-profile-tab">
                                        <!-- Support -->
                                        <div class="setting_tab_contetn">
                                            <div class="heading mb-4">
                                                <h3>{{ __('Support') }}</h3>
                                            </div>
                                            <div class="setting_form">
                                                <form action="{{ route('user.support.send-mail') }}"
                                                    id="supportmailForm" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="emalil_to" class="form-label">{{ __('To') }}</label>
                                                        <div>{{ $settings->email }}</div>
                                                        <hr>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subject" class="form-label">{{ __('Subject') }}
                                                            <span class="text-dark">*</span></label>
                                                        <input type="text" name="subject" id="subject"
                                                            class="form-control @error('subject') is-invalid @enderror"
                                                            placeholder="{{ __('Subject') }}" required>
                                                        @if($errors->has('subject'))
                                                        <span class="help-block text-danger">{{
                                                            $errors->first('subject') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message" class="form-label">{{ __('Message') }}
                                                            <span class="text-dark">*</span></label>
                                                        <textarea name="message" id="message" cols="30" rows="7"
                                                            placeholder="{{ __('Message') }}"
                                                            class="form-control @error('message') is-invalid @enderror"
                                                            required style="height:120px;"></textarea>
                                                        @if($errors->has('message'))
                                                        <span class="help-block text-danger">{{
                                                            $errors->first('message') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                            <span class="btn-txt">{{ __('Send') }}</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Request Feature -->
                                    <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                                        aria-labelledby="vert-tabs-messages-tab">
                                        <div class="setting_tab_contetn">
                                            <div class="heading mb-4">
                                                <h3>{{ __('Request a Feature') }}</h3>
                                                <p>{{ __('Do you have an idea for a feature that would make better for
                                                    you? Let us know!') }}</p>
                                            </div>
                                            <div class="setting_form">
                                                <form action="{{ route('user.support.feature-request') }}"
                                                    id="featureRequest" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="request_message" class="form-label">{{ __('Message')
                                                            }} <span class="text-dark">*</span></label>
                                                        <textarea name="request_message" id="request_message" cols="30"
                                                            rows="7" placeholder="{{ __('Message') }}"
                                                            class="form-control @error('request_message') is-invalid @enderror"
                                                            required style="height:120px;"></textarea>
                                                        @if($errors->has('request_message'))
                                                        <span class="help-block text-danger">{{
                                                            $errors->first('request_message') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                            <span class="btn-txt">{{ __('Send Feedback') }}</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Account delete modal -->
<div class="delete_modal">
    <div class="modal fade" id="deleteAccount" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Confirm Account Deletion') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- modal body -->
                <div class="modal_body">
                    <form method="POST" id="accountDeletionForm" action="{{ route('user.deletion-request') }}">
                        @csrf
                        <h5>{{ __("Type 'delete' to delete your account.") }}</h5>
                        <p>{{ __('All contacts and other data associated with this account will be permanently deleted.
                            This cannot be undone.') }}</p>

                        <div class="mb-3">
                            <input type="text" name="confirm" id="confirm"
                                class="form-control @error('confirm') is-invalid @enderror"
                                placeholder="Type 'delete' to delete your account." required>
                            @if($errors->has('confirm'))
                            <span class="help-block text-danger">{{ $errors->first('confirm') }}</span>
                            @endif
                        </div>
                        <div class="modal-footer pb-3">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancel')
                                }}</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                <span class="btn-txt">{{ __('Delete Account') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Billing Address Modal -->
<div class="billing_modal">
    <div class="modal fade" id="billingModal" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Billing details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal_body">
                    <form action="{{ route('user.billing-info.update') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="billing_email" class="form-label">{{ __('Email') }}</label>
                            <input type="text" name="billing_email" id="billing_email"
                                class="form-control @error('billing_email') is-invalid @enderror"
                                value="{{ $user->billing_email }}" required>
                            @if($errors->has('billing_email'))
                            <span class="help-block text-danger">{{ $errors->first('billing_email') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="billing_country" class="form-label">{{ _('Country / Region') }}</label>
                            <select name="billing_country" id="billing_country"
                                class="form-control @error('billing_country') is-invalid @enderror">
                                <option value="" class="d-none">-- {{ __('Choose') }} --</option>
                                @foreach ($countries as $key=>$country)
                                <option value="{{ $country }}" {{ $user->billing_country==$country ? 'selected':'' }}>{{
                                    $country }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('billing_country'))
                            <span class="help-block text-danger">{{ $errors->first('billing_country') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="billing_zipcode" class="form-label">{{ __('Zip Code') }}</label>
                            <input type="number" name="billing_zipcode" id="billing_zipcode"
                                class="form-control @error('billing_zipcode') is-invalid @enderror"
                                value="{{ $user->billing_zipcode }}" required>
                            @if($errors->has('billing_zipcode'))
                            <span class="help-block text-danger">{{ $errors->first('billing_zipcode') }}</span>
                            @endif
                        </div>
                        <div class="modal-footer pb-3">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancel')
                                }}</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                <span class="btn-txt">{{ __('Save billing details') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Payment Details -->
<div class="payment_modal">
    <div class="modal fade" id="paymentModal" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">{{ __('Payment details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal_body">
                    <form action="{{ route('user.payment-info.update') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="card_number" class="form-label">{{ __('Credit card number') }}</label>
                            <input type="text" name="card_number" id="card_number"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ $user->card_number }}" required autocomplete="cc-number" autocorrect="off"
                                spellcheck="false" type="text" aria-label="Credit or debit card number"
                                placeholder="1234 1234 1234 1234" aria-invalid="false" tabindex="1">
                            @if($errors->has('card_number'))
                            <span class="help-block text-danger">{{ $errors->first('card_number') }}</span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="card_expiration_date" class="form-label">{{ __('Expiration date')
                                        }}</label>
                                    <input autocomplete="cc-exp" autocorrect="off" spellcheck="false" type="text"
                                        name="card_expiration_date" id="card_expiration_date"
                                        class="form-control @error('card_expiration_date') is-invalid @enderror"
                                        required aria-label="Credit or debit card expiration date" placeholder="MM / YY"
                                        aria-invalid="false" tabindex="2" value="{{ $user->card_expiration_date }}">
                                    @if($errors->has('card_expiration_date'))
                                    <span class="help-block text-danger">{{ $errors->first('card_expiration_date')
                                        }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="card_cvc" class="form-label">{{ __('CVC') }}</label>
                                    <input class="form-control @error('card_cvc') is-invalid @enderror"
                                        autocomplete="cc-csc" autocorrect="off" spellcheck="false" type="text"
                                        name="card_cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV"
                                        placeholder="CVC" aria-invalid="false" tabindex="3"
                                        value="{{ $user->card_cvc }}">
                                    @if($errors->has('card_cvc'))
                                    <span class="help-block text-danger">{{ $errors->first('card_cvc') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name_on_card" class="form-label">{{ __('Name on the card') }}</label>
                            <input type="text" name="name_on_card" id="name_on_card"
                                class="form-control @error('name_on_card') is-invalid @enderror"
                                value="{{ $user->name_on_card }}" required autocomplete="cc-number" autocorrect="off"
                                spellcheck="false" type="text" aria-label="Credit or debit card number"
                                placeholder="John wick" aria-invalid="false" tabindex="4">
                            @if($errors->has('name_on_card'))
                            <span class="help-block text-danger">{{ $errors->first('name_on_card') }}</span>
                            @endif
                        </div>
                        <div class="modal-footer pb-3">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancel')
                                }}</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                <span class="btn-txt">{{ __('Save payment method') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
<script type="text/javascript" src="{{ asset('assets/js/slim.kickstart.min.js') }}"></script>
<script>
    // $(this).find(":submit").prop('disabled', true);
        $("#supportmailForm").submit(function () {
            $(this).find(":submit").children(".loading-spinner").toggleClass('active');
            $(this).find(":submit").attr("disabled", true);
            $(this).find(":submit").children(".btn-txt").text("Processing");
            $("*").css("cursor", "wait");
        });
        $("#featureRequest").submit(function () {
            $(this).find(":submit").children(".loading-spinner").toggleClass('active');
            $(this).find(":submit").attr("disabled", true);
            $(this).find(":submit").children(".btn-txt").text("Processing");
            $("*").css("cursor", "wait");
        });
        $("#updateProfile").submit(function () {
            $(this).find(":submit").children(".loading-spinner").toggleClass('active');
            $(this).find(":submit").attr("disabled", true);
            $(this).find(":submit").children(".btn-txt").text("Processing");
            $("*").css("cursor", "wait");
        });



    $(document).on('submit', "#accountDeletionForm", function (e) {
        e.preventDefault();
        var form = $("#accountDeletionForm");
        var _this = $(this).find(":submit");
        $.ajax({
            type: 'post',
            data: form.serialize(),
            url: form.attr('action'),
            async: true,
            beforeSend: function () {
                $("body").css("cursor", "progress");
                $(_this).children(".loading-spinner").toggleClass('active');
                $(_this).attr("disabled", true);
                $(_this).children(".btn-txt").text("Processing");
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#accountDeleteModal').modal('hide');
                    location.reload();
                } else {
                    toastr.error(response.message);
                }
                $(_this).attr("disabled", false);
                 $(_this).children(".loading-spinner").removeClass('active');
                 $(_this).children(".btn-txt").text("Delete Account");
            },
            error: function (jqXHR, exception) {
                toastr.error('Something wrong');
                 $(_this).attr("disabled", false);
                 $(_this).children(".loading-spinner").removeClass('active');
                 $(_this).children(".btn-txt").text("Delete Account");
            },
            complete: function (response) {
                $("body").css("cursor", "default");
            }
        });
    });
    $(document).on('click', ".reset_password_request", function (e) {
        e.preventDefault();
        var route = $(this).attr('href');
        var _this = this;
        $.ajax({
            type: 'get',
            url:route,
            async: true,
            beforeSend: function () {
                $("body").css("cursor", "progress");
                $(_this).children(".loading-spinner").toggleClass('active');
                $(_this).attr("disabled", true);
                $(_this).children(".btn-txt").text("Processing");
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message);
                }
                $(_this).attr("disabled", false);
                $(_this).children(".loading-spinner").removeClass('active');
                $(_this).children(".btn-txt").text("Reset Your Password");
            },
            error: function (jqXHR, exception) {
                toastr.error('Something wrong');
                $(_this).attr("disabled", false);
                $(_this).children(".loading-spinner").removeClass('active');
                $(_this).children(".btn-txt").text("Reset Your Password");

            },
            complete: function (response) {
                $("body").css("cursor", "default");
            }
        });

    });


    $(document).on('change','.switcher_',function(e){
    var checked =  $(this).is(':checked');
    console.log(checked);
    if(checked==true){
        var current_val = $('input[name="notification"]:checked').val();
        $.ajax({
            url: `{{ route('user.notification-status') }}`,
            type: "get",
            data:{
                "current_val": current_val,
                "_token": "{{ csrf_token() }}",
            },
             beforeSend: function () {
                $("body").css("cursor", "progress");
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (jqXHR, exception) {
                toastr.error('Something wrong');
            },
            complete: function (response) {
                $("body").css("cursor", "default");
            }
        });
    }
})
</script>
@endpush
