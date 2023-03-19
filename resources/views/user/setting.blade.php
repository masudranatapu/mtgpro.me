@extends('user.layouts.app')
@section('title') {{ __('Settings') }} @endsection
@section('settings', 'active')

@push('custom_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}">

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
            top: 4px;
            left: 4px;
            width: calc(49% - 2px);
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
    $plan_price_yearly = $plan->plan_price_yearly;
    $diff_in_days = $subscription_start->diffInDays($subscription_end);
    // dd($diff_in_days);
    $duration = now()->diffInDays(\Carbon\Carbon::parse($user->plan_validity));

    if ($diff_in_days > 31) {
        $next_bill_date = date('F d, Y', strtotime($user->plan_activation_date . ' +1 year'));
    } else {
        $next_bill_date = date('F d, Y', strtotime($user->plan_activation_date . ' +1 month'));
    }

    $bill_date = date('d', strtotime($user->plan_activation_date));

@endphp



@section('content')
    <!-- main content -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">

                    <div class="col-xl-12">
                        <div class="page_content account_setting mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <!-- My Subscription -->
                                        <a class="nav-link active" id="vert-tabs-subscription-tab" data-toggle="pill"
                                            href="#vert-tabs-subscription" role="tab"
                                            aria-controls="vert-tabs-subscription" aria-selected="true">
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
                                        {{-- <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill"
                                        href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
                                        aria-selected="false">
                                        <img src="{{ asset('assets/img/icon/request.svg') }}" alt="icon">
                                        {{ __('Request a Feature') }}
                                    </a> --}}
                                        <!-- logout -->
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                            title="{{ __('Logout') }}">
                                            <img src="{{ asset('assets/img/icon/logout.svg') }}" alt="icon">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        {{-- <a href="javascript:void(0)" class="nav-link" data-toggle="modal"
                                        data-target="#disclimerModal">
                                        <img src="{{ asset('assets/img/icon/request.svg') }}" alt="icon">
                                        {{ __('Discliamer') }}
                                    </a> --}}
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-9">
                                    <div class="tab-content" id="vert-tabs-tabContent">
                                        <!-- my subscription -->
                                        <div class="tab-pane fade active show" id="vert-tabs-subscription" role="tabpanel"
                                            aria-labelledby="vert-tabs-subscription-tab">

                                            <div class="setting_tab_contetn">
                                                <div class="subscription_info mb-4">
                                                    <div class="card p-0">
                                                        <div class="card-header">
                                                            <h3>
                                                                <span
                                                                    class="text-uppercase">{{ __($plan->plan_name) }}</span>
                                                                @if ($duration > 0 && $plan->is_free == 0)
                                                                    <span class="float-right">{{ __($duration) }}
                                                                        {{ __(Str::plural('day', $duration)) }}
                                                                        {{ __('left') }}</span>
                                                                @else
                                                                @endif
                                                            </h3>
                                                            @if ($duration > 0 && $plan->is_free == 0)
                                                                <a class="float-right" title="Cancel Current Plan"
                                                                    href="{{ route('user.cancel-plan.stripe') }}"
                                                                    onclick="return confirm('Are you sure you want to cancel this plan?');">{{ __('Cancel Subscription') }}</a>
                                                            @endif
                                                        </div>

                                                        <div class="card-body p-0 pt-3">
                                                            @if (checkPackage() && $plan->is_free == 0)
                                                                @if ($diff_in_days > 31)
                                                                    <h5>${{ CurrencyFormat($plan->plan_price_yearly, 2) }}
                                                                    </h5>
                                                                    <p>{{ CurrencyFormat($plan->plan_price_yearly, 2) }}
                                                                        {{ __('peryear') }}.
                                                                    </p>
                                                                @else
                                                                    <h5>${{ CurrencyFormat($plan->plan_price_monthly, 2) }}
                                                                    </h5>
                                                                    <p>{{ CurrencyFormat($plan->plan_price_monthly, 2) }}
                                                                        {{ __('permonth') }}.
                                                                    </p>
                                                                @endif
                                                            @else
                                                                <div class="text-center mb-5">
                                                                    <a class="btn btn-primary"
                                                                        href="{{ route('user.plans') }}">{{ __('Upgrade Now') }}</a>
                                                                </div>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-md-6 col-lg-12 col-xl-6 mb-4">
                                                        <div class="billing_info_card subs_info">
                                                            <div class="card-header">
                                                                <h4>{{ __('Billing Infomations') }} <a href="#"
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
                                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                                        <div class="payment_method_card subs_info">
                                                            <div class="card-header">
                                                                <h4>
                                                                    {{ __('Payment Method') }}
                                                                    <a href="javascript:void(0)" class="float-right"
                                                                        data-toggle="modal"
                                                                        data-target="#paymentModal">{{ __($user->card_number != '' ? 'Edit' : 'Add') }}</a>
                                                                </h4>
                                                            </div>

                                                            @if (isset($user->card_number))
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
                                                                                <span
                                                                                    class="d-block">{{ '•••• •••• •••• ' . substr($number, -4) }}</span>
                                                                                <span class="d-block pb-1"><small>{{ $user->card_type }}
                                                                                        - {{ __('Expires') }}
                                                                                        {{ date('m/Y', strtotime($user->card_expiration_date)) }}

                                                                                    </small></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mt-4">
                                                                            <label class="form-label"
                                                                                for="user_disclimer">
                                                                                {{ __('Disclaimer') }}</label>
                                                                            <textarea required name="user_disclaimer" id="user_disclimer" cols="30" rows="10" class="form-control">{{ old('user_disclimer') ?? $user->user_disclaimer }}
                                                                                </textarea>

                                                                        </div>

                                                                        <div class="float-right">
                                                                            <button type="submit"
                                                                                class="btn btn-primary mb-2">
                                                                                <i
                                                                                    class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                                                <span
                                                                                    class="btn-txt">{{ __('Save') }}</span>
                                                                            </button>




                                                                            <a href="javascript:void(0)"
                                                                                class="btn btn-primary mb-2"
                                                                                data-toggle="modal"
                                                                                data-target="#reset_password">{{ __('Reset Your Password') }}</a>

                                                                            <a href="javascript:void(0)"
                                                                                class="btn btn-danger mb-2"
                                                                                data-toggle="modal"
                                                                                data-target="#deleteAccount">{{ __('Delete Account') }}</a>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            @endif
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
                                                                            <label for="emalil_to"
                                                                                class="form-label">{{ __('To') }}</label>
                                                                            <div>{{ $settings->email }}</div>
                                                                            <hr>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="subject"
                                                                                class="form-label">{{ __('Subject') }}
                                                                                <span class="text-dark">*</span></label>
                                                                            <input type="text" name="subject"
                                                                                id="subject"
                                                                                class="form-control @error('subject') is-invalid @enderror"
                                                                                placeholder="{{ __('Subject') }}"
                                                                                required>
                                                                            @if ($errors->has('subject'))
                                                                                <span
                                                                                    class="help-block text-danger">{{ $errors->first('subject') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message"
                                                                                class="form-label">{{ __('Message') }}
                                                                                <span class="text-dark">*</span></label>
                                                                            <textarea name="message" id="message" cols="30" rows="7" placeholder="{{ __('Message') }}"
                                                                                class="form-control @error('message') is-invalid @enderror" required style="height:120px;"></textarea>
                                                                            @if ($errors->has('message'))
                                                                                <span
                                                                                    class="help-block text-danger">{{ $errors->first('message') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group mt-4">
                                                                            <button type="submit"
                                                                                class="btn btn-primary">
                                                                                <i
                                                                                    class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                                                <span
                                                                                    class="btn-txt">{{ __('Send') }}</span>
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--  Request Feature -->
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
        <div class="modal fade" id="deleteAccount" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ __('Confirm Account Deletion') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal_body">
                        <form method="POST" id="accountDeletionForm"
                            action="{{ route('user.deletion-request') }}">
                            @csrf
                            <h5>{{ __("Type 'delete' to delete your account.") }}</h5>
                            <p>{{ __('All contacts and other data associated with this account will be permanently deleted.This cannot be undone.') }}
                            </p>
                            <div class="mb-3">
                                <input type="text" name="confirm" id="confirm"
                                    class="form-control @error('confirm') is-invalid @enderror"
                                    placeholder="Type 'delete' to delete your account." required>
                                @if ($errors->has('confirm'))
                                    <span
                                        class="help-block text-danger">{{ $errors->first('confirm') }}</span>
                                @endif
                            </div>
                            <div class="modal-footer pb-3">
                                <button type="button" class="btn btn-danger"
                                    data-dismiss="modal">{{ __('Cancel') }}</button>
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

    <!-- Account delete modal -->
    <div class="reset_password_modal">
        <div class="modal fade" id="reset_password" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('Reset Password') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- modal body -->
                    <div class="modal_body">
                        <div class="modal-footer pb-3">
                            <button type="button" class="btn btn-danger"
                                data-dismiss="modal">{{ __('Cancel') }}</button>
                            <a href="{{ route('user.password.reset') }}"
                                title="{{ __('Reset Your Password') }}"
                                class="btn btn-primary reset_password_request mb-2">
                                <i class="loading-spinner reset-spinner fa-lg fas fa-spinner fa-spin"></i>
                                <span class="btn-txt">{{ __('Send Link') }}</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- disclimer Modal --}}
    <div class="disclimer_modal">
        <div class="modal fade" id="disclimerModal" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header mb-0">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ __('Site Disclimer') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal_body p-3">
                        {!! $settings->site_disclimer ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Billing Address Modal -->
    <div class="billing_modal">
        <div class="modal fade" id="billingModal" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ __('Billing details') }}</h5>
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
                                @if ($errors->has('billing_email'))
                                    <span
                                        class="help-block text-danger">{{ $errors->first('billing_email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="billing_country"
                                    class="form-label">{{ _('Country / Region') }}</label>
                                <select name="billing_country" id="billing_country"
                                    class="form-control @error('billing_country') is-invalid @enderror">
                                    <option value="" class="d-none">--
                                        {{ __('Choose') }} --
                                    </option>
                                    @foreach ($countries as $key => $country)
                                        <option value="{{ $country }}"
                                            {{ $user->billing_country == $country ? 'selected' : '' }}>
                                            {{ $country }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('billing_country'))
                                    <span
                                        class="help-block text-danger">{{ $errors->first('billing_country') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="billing_zipcode"
                                    class="form-label">{{ __('Zip Code') }}</label>
                                <input type="number" name="billing_zipcode" id="billing_zipcode"
                                    class="form-control @error('billing_zipcode') is-invalid @enderror"
                                    value="{{ $user->billing_zipcode }}" required>
                                @if ($errors->has('billing_zipcode'))
                                    <span
                                        class="help-block text-danger">{{ $errors->first('billing_zipcode') }}</span>
                                @endif
                            </div>
                            <div class="modal-footer pb-3">
                                <button type="button" class="btn btn-danger"
                                    data-dismiss="modal">{{ __('Cancel') }}</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                    <span class="btn-txt">{{ __('Save Billing Details') }}</span>
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
        <div class="modal fade" id="paymentModal" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- modal header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="paymentModalLabel">
                            {{ __('Payment Details') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal_body">
                        <form action="{{ route('user.payment-info.update') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="card_number"
                                    class="form-label">{{ __('Credit card number') }}</label>
                                <input type="text" name="card_number" id="card_number"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ $user->card_number }}" required autocomplete="cc-number"
                                    autocorrect="off" spellcheck="false" type="text"
                                    aria-label="Credit or debit card number"
                                    placeholder="1234 1234 1234 1234" aria-invalid="false"
                                    tabindex="1">
                                @if ($errors->has('card_number'))
                                    <span
                                        class="help-block text-danger">{{ $errors->first('card_number') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="card_expiration_date"
                                            class="form-label">{{ __('Expiration date') }}</label>
                                        <input autocomplete="cc-exp" autocorrect="off" spellcheck="false"
                                            type="text" name="card_expiration_date"
                                            id="card_expiration_date"
                                            class="form-control @error('card_expiration_date') is-invalid @enderror"
                                            required aria-label="Credit or debit card expiration date"
                                            placeholder="MM / YY" aria-invalid="false" tabindex="2"
                                            value="{{ $user->card_expiration_date }}">
                                        @if ($errors->has('card_expiration_date'))
                                            <span
                                                class="help-block text-danger">{{ $errors->first('card_expiration_date') }}</span>
                                        @endif
                                    </div>
<<<<<<< HEAD
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="card_cvc"
                                            class="form-label">{{ __('CVC') }}</label>
                                        <input class="form-control @error('card_cvc') is-invalid @enderror"
                                            autocomplete="cc-csc" autocorrect="off" spellcheck="false"
                                            type="text" name="card_cvc" inputmode="numeric"
                                            aria-label="Credit or debit card CVC/CVV" placeholder="CVC"
                                            aria-invalid="false" tabindex="3"
                                            value="{{ $user->card_cvc }}">
                                        @if ($errors->has('card_cvc'))
                                            <span
                                                class="help-block text-danger">{{ $errors->first('card_cvc') }}</span>
                                        @endif
=======

                                    <!-- modal body -->
                                    <div class="modal_body">
                                        <form method="POST" id="accountDeletionForm"
                                            action="{{ route('user.deletion-request') }}">
                                            @csrf
                                            <h5>{{ __("Type 'delete' to delete your account.") }}</h5>
                                            <p>{{ __('All contacts and other data associated with this account will be permanently deleted.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        This cannot be undone.') }}
                                            </p>

                                            <div class="mb-3">
                                                <input type="text" name="confirm" id="confirm"
                                                    class="form-control @error('confirm') is-invalid @enderror"
                                                    placeholder="Type 'delete' to delete your account." required>
                                                @if ($errors->has('confirm'))
                                                    <span
                                                        class="help-block text-danger">{{ $errors->first('confirm') }}</span>
                                                @endif
                                            </div>
                                            <div class="modal-footer pb-3">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">{{ __('Cancel') }}</button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                    <span class="btn-txt">{{ __('Delete Account') }}</span>
                                                </button>
                                            </div>
                                        </form>
>>>>>>> rabin_dev
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name_on_card"
                                    class="form-label">{{ __('Name on the card') }}</label>
                                <input type="text" name="name_on_card" id="name_on_card"
                                    class="form-control @error('name_on_card') is-invalid @enderror"
                                    value="{{ $user->name_on_card }}" required autocomplete="cc-number"
                                    autocorrect="off" spellcheck="false" type="text"
                                    aria-label="Credit or debit card number" placeholder="John wick"
                                    aria-invalid="false" tabindex="4">
                                @if ($errors->has('name_on_card'))
                                    <span
                                        class="help-block text-danger">{{ $errors->first('name_on_card') }}</span>
                                @endif
                            </div>
                            <div class="modal-footer pb-3">
                                <button type="button" class="btn btn-danger"
                                    data-dismiss="modal">{{ __('Cancel') }}</button>
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
    <script src="{{ asset('assets/js/summernote.js') }}"></script>

    <script>
        // $(this).find(":submit").prop('disabled', true);
        $("#supportmailForm").submit(function() {
            $(this).find(":submit").children(".loading-spinner").toggleClass('active');
            $(this).find(":submit").attr("disabled", true);
            $(this).find(":submit").children(".btn-txt").text("Processing");
            $("*").css("cursor", "wait");
        });
        // $("#featureRequest").submit(function () {
        //     $(this).find(":submit").children(".loading-spinner").toggleClass('active');
        //     $(this).find(":submit").attr("disabled", true);
        //     $(this).find(":submit").children(".btn-txt").text("Processing");
        //     $("*").css("cursor", "wait");
        // });
        $("#updateProfile").submit(function() {
            $(this).find(":submit").children(".loading-spinner").toggleClass('active');
            $(this).find(":submit").attr("disabled", true);
            $(this).find(":submit").children(".btn-txt").text("Processing");
            $("*").css("cursor", "wait");
        });



        $(document).on('submit', "#accountDeletionForm", function(e) {
            e.preventDefault();
            var form = $("#accountDeletionForm");
            var _this = $(this).find(":submit");
            $.ajax({
                type: 'post',
                data: form.serialize(),
                url: form.attr('action'),
                async: true,
                beforeSend: function() {
                    $("body").css("cursor", "progress");
                    $(_this).children(".loading-spinner").toggleClass('active');
                    $(_this).attr("disabled", true);
                    $(_this).children(".btn-txt").text("Processing");
                },
                success: function(response) {
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
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                    $(_this).attr("disabled", false);
                    $(_this).children(".loading-spinner").removeClass('active');
                    $(_this).children(".btn-txt").text("Delete Account");
                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                }
            });
        });
        $(document).on('click', ".reset_password_request", function(e) {
            e.preventDefault();
            var route = $(this).attr('href');
            var _this = this;
            $.ajax({
                type: 'get',
                url: route,
                async: true,
                beforeSend: function() {
                    $("body").css("cursor", "progress");
                    $(_this).children(".loading-spinner").toggleClass('active');
                    $(_this).attr("disabled", true);
                    $(_this).children(".btn-txt").text("Processing");
                },
                success: function(response) {
                    if (response.status == 1) {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                    $(_this).attr("disabled", false);
                    $(_this).children(".loading-spinner").removeClass('active');
                    $(_this).children(".btn-txt").text("Reset Your Password");
                },
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                    $(_this).attr("disabled", false);
                    $(_this).children(".loading-spinner").removeClass('active');
                    $(_this).children(".btn-txt").text("Reset Your Password");

                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                    $('#reset_password').modal('hide');
                }
            });

        });


        $(document).on('change', '.switcher_', function(e) {
            var checked = $(this).is(':checked');
            console.log(checked);
            if (checked == true) {
                var current_val = $('input[name="notification"]:checked').val();
                $.ajax({
                    url: `{{ route('user.notification-status') }}`,
                    type: "get",
                    data: {
                        "current_val": current_val
                    },
                    beforeSend: function() {
                        $("body").css("cursor", "progress");
                    },
                    success: function(response) {
                        if (response.status == 1) {
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(jqXHR, exception) {
                        toastr.error('Something wrong');
                    },
                    complete: function(response) {
                        $("body").css("cursor", "default");
                    }
                });
            }
        })
        $(document).ready(function() {
            $('#site_disclaimer').summernote({

                height: 150,
                toolbar: [
                    ['style', ['bold', 'underline', 'italic', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ],

            });
        });
        $(document).ready(function() {
            $('#user_disclimer').summernote({

                height: 150,
                toolbar: [
                    ['style', ['bold', 'underline', 'italic', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ],

            });
        });
    </script>
@endpush
