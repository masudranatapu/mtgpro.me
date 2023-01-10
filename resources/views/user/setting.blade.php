@extends('user.layouts.app')
@section('title') {{ __('Settings') }}  @endsection
@push('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
<style>
    .setting_form .slim {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}
</style>
@endpush

@php
    $settings = getSetting();
    $countries = \App\Helpers\CountryHelper::CountryCodes();
    $subscription_end = new \Carbon\Carbon($user->plan_validity);
    $plan_price_monthly = $plan->plan_price_monthly;
    $plan_price_yearly =$plan->plan_price_yearly;
    // echo $subscription_end->diffForHumans();
    $duration = now()->diffInDays(\Carbon\Carbon::parse($user->plan_validity));

    if($plan->is_yearly_plan){
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
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                    <!-- My Subscription -->
                                    <a class="nav-link active" id="vert-tabs-subscription-tab" data-toggle="pill" href="#vert-tabs-subscription" role="tab" aria-controls="vert-tabs-subscription" aria-selected="true">
                                        <img src="{{ asset('assets/img/icon/plan.svg') }}" alt="icon">
                                        {{ __('My Subscription') }}
                                    </a>
                                    <!-- account settings -->
                                    <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">
                                        <img src="{{ asset('assets/img/icon/settings.svg') }}" alt="icon">
                                            {{ __('Account Settings') }}
                                    </a>
                                    <!-- support -->
                                    <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">
                                        <img src="{{ asset('assets/img/icon/support.svg') }}" alt="icon">
                                        {{ __('Support') }}
                                    </a>
                                    <!-- request a feature -->
                                    <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">
                                        <img src="{{ asset('assets/img/icon/request.svg') }}" alt="icon">
                                        {{ __('Request a Feature') }}
                                    </a>
                                    <!-- logout -->
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="{{ __('Logout') }}">
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
                                            <div class="tab-pane fade active show" id="vert-tabs-subscription" role="tabpanel" aria-labelledby="vert-tabs-subscription-tab">
                                                <div class="setting_tab_contetn">
                                                    <div class="subscription_info mb-4">
                                                        <div class="card">

                                                            @if (checkPackage())
                                                            <div class="card-header">
                                                                {{-- 10 days left --}}
                                                                <h3>
                                                                       {{-- Subscription --}}
                                                                    <span class="text-uppercase">{{ __($plan->plan_name) }}</span>

                                                                    @if ($duration > 0)
                                                                           <span class="float-right">{{__($duration)}} {{ __(Str::plural('day',$duration)) }} {{ __('left') }}</span>
                                                                    @else
                                                                    @endif
                                                                </h3>
                                                            </div>
                                                            <div class="card-body">
                                                                @if ($plan->is_yearly_plan)
                                                                <h5>${{ CurrencyFormat($plan->plan_price_yearly,2) }}</h5>
                                                                <p>{{ CurrencyFormat($plan->plan_price_monthly,2) }} {{ __('per member per year') }}.</p>
                                                                @else
                                                                <h5>${{ CurrencyFormat($plan->plan_price_monthly,2) }}</h5>
                                                                <p>{{ CurrencyFormat($plan->plan_price_monthly,2) }} {{ __('per member per month') }}.</p>
                                                                @endif
                                                                {{-- <p>$14.99 per member per month.</p> --}}
                                                                {{-- <p>You will be charged <strong>$14.99 / month starting  Jan 19</strong></p> --}}
                                                                <p>{{ __('You will be charged') }} <strong>{{ CurrencyFormat($plan->plan_price_monthly,2) }} / month starting {{  date('M d, Y', strtotime($user->plan_activation_date) ) }}</strong></p>
                                                            </div>
                                                            @else
                                                            <div class="card-body">
                                                                <div class="plan_upgrade text-center mb-5">
                                                                    <a href="{{ route('user.plans') }}">{{ __('Upgrade now') }}</a>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-6 mb-4">
                                                            <div class="billing_info_card subs_info">
                                                                <div class="card-header">
                                                                    <h4>{{ __('Billing Infomation') }} <a href="#" data-toggle="modal" data-target="#billingModal" class="float-right">{{ __('Edit') }}</a>
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
                                                                            <a href="#" class="float-right" data-toggle="modal" data-target="#paymentModal">{{ __($user->card_number !='' ? 'Edit':'Add') }}</a>
                                                                        </h4>
                                                                    </div>
                                                                    @if (!empty($user->card_number))
                                                                    <div class="card-body">
                                                                       <div class="media p-1">
                                                                           <img class="mr-3" src="{{ asset('assets/img/icon/mastercard2.png') }}" alt="Generic placeholder image">
                                                                           <div class="media-body">
                                                                               <div class="">
                                                                                   <?php
                                                                                       $number = $user->card_number;
                                                                                    ?>
                                                                                   <span class="d-block">{{'•••• •••• •••• ' . substr($number, -4) }}</span>
                                                                                   <span class="d-block pb-1"><small>{{ $user->card_type }} - {{ __('Expires') }} {{date('m/Y', strtotime($user->card_expiration_date))}}
                                                                                    {{-- 03/2024 --}}
                                                                                </small></span>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="p-3">
                                                                        <span class="d-block py-1"><small>{{ __('Billed on the') }} {{ $bill_date }}th of every
                                                                            @if ($plan->is_yearly_plan)
                                                                            year
                                                                            @else
                                                                            month
                                                                           @endif .</small></span>
                                                                           <span class="d-block py-1">
                                                                               <small>
                                                                                   {{ __('Next billing on') }}
                                                                                   <span class=""><b>{{ $next_bill_date }}</b></span>
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
                                                                        <p>{{ __('Here are your previous invoices and receipts') }}</p>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <a href="{{ route('user.all-invoice.download') }}" class="btn btn-secondary float-md-right">{{ __('Download all Invoice') }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('Date') }}</th>
                                                                        <th>{{ __('Description') }}</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   @foreach ($transections as $transection)
                                                                    <tr>
                                                                        <td>{{date('M d, Y', strtotime($transection->transaction_date))}}</td>
                                                                        <td>{!! $transection->desciption !!}</td>
                                                                        <td class="text-right download_invoice">
                                                                            <a href="{{ route('user.invoice.download',$transection->id) }}">
                                                                               {{ __('Download') }}
                                                                              <img src="{{ asset('assets/img/icon/download.svg') }}" alt="">
                                                                           </a>
                                                                        </td>
                                                                    </tr>
                                                                   @endforeach
                                                                   {{-- @else --}}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        @endif
                                                </div>
                                            </div>
                                            <!-- account settings -->
                                            <div class="tab-pane text-left fade" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                                <div class="setting_tab_contetn">
                                                    <div class="heading mb-4">
                                                        <h3>{{ __('Account Settings') }}</h3>
                                                    </div>
                                                    <div class="setting_form">
                                                        <form action="{{ route('user.profile-info.update') }}" method="post">
                                                            @csrf
                                                            {{-- <div class="form-group">
                                                                <label for="profile_url" class="form-label">
                                                                    {{ __('Profile URL') }}
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="icon">
                                                                    </a>
                                                                </label>
                                                                <input type="text" name="profile_url" id="profile_url" class="form-control" value="mtgpr/">
                                                            </div> --}}

                                                            <div class="form-group profile-pic">
                                                                <label class="form-label">{{ __('Profile picture') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="top"  title="Ideal dimensions: 300px x 300px (1:1)"></i> </label>
                                                                <div class="slim"
                                                                    data-ratio="1:1"
                                                                    data-size="540,540"
                                                                    data-max-file-size="100">
                                                                <img src="{{ getAvatar($user->profile_image) }}" alt=""/>
                                                                <input type="file" name="profile_pic" id="profile_pic">
                                                                </div>
                                                                @if($errors->has('profile_pic'))
                                                                    <span class="help-block text-danger">{{ $errors->first('profile_pic') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                                                                @if($errors->has('email'))
                                                                <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                                            </div>
                                                        </form>
                                                       <div class="float-right">
                                                            <a href="#" class="text-primary p-2">{{ __('Reset Your Password') }}</a>
                                                            <a href="#" class="text-danger p-2" data-toggle="modal" data-target="#deleteAccount">{{ __('Delete Account') }}</a>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Support -->
                                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                                <!-- Support -->
                                                <div class="setting_tab_contetn">
                                                    <div class="heading mb-4">
                                                        <h3>{{ __('Support') }}</h3>
                                                    </div>
                                                    <div class="setting_form">
                                                        <form action="{{ route('user.support.send-mail') }}" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="emalil_to" class="form-label">{{ __('To') }}</label>
                                                                    <div>{{ $settings->email }}</div>
                                                                    <hr>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject" class="form-label">{{ __('Subject') }} <span class="text-dark">*</span></label>
                                                                <input type="text" name="subject" id="subject" class="form-control" placeholder="{{ __('Subject') }}" required>
                                                                @if($errors->has('subject'))
                                                                <span class="help-block text-danger">{{ $errors->first('subject') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message" class="form-label">{{ __('Message') }} <span class="text-dark">*</span></label>
                                                                <textarea name="message" id="message" cols="30" rows="7" placeholder="{{ __('Message') }}" class="form-control" required style="height:120px;"></textarea>
                                                                @if($errors->has('message'))
                                                                <span class="help-block text-danger">{{ $errors->first('message') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  Request Feature -->
                                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                                                <div class="setting_tab_contetn">
                                                    <div class="heading mb-4">
                                                        <h3>{{ __('Request a Feature') }}</h3>
                                                        <p>{{ __('Do you have an idea for a feature that would make better for you? Let us know!') }}</p>
                                                    </div>
                                                    <div class="setting_form">


                                                        <form action="{{ route('user.support.feature-request') }}" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="request_message" class="form-label">{{ __('Message') }} <span class="text-dark">*</span></label>
                                                                <textarea name="request_message" id="request_message" cols="30" rows="7" placeholder="{{ __('Messag') }}e" class="form-control" required style="height:120px;"></textarea>
                                                                @if($errors->has('request_message'))
                                                                <span class="help-block text-danger">{{ $errors->first('request_message') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary">{{ __('Send Feedback') }}</button>
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
    <div class="modal fade" id="deleteAccount" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <h5>{{ __("Type 'delete' to delete your account.") }}</h5>
                    <p>{{ __('All contacts and other data associated with this account will be permanently deleted. This cannot be undone.') }}</p>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <input type="text" name="delete" id="" class="form-control" placeholder="Type 'delete' to delete your account." required>
                            @if($errors->has('delete'))
                            <span class="help-block text-danger">{{ $errors->first('delete') }}</span>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="modal-footer pb-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="button" class="btn btn-primary">{{ __('Delete Account') }}</button>
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
                            <input type="text" name="billing_email" id="billing_email" class="form-control" value="{{ $user->billing_email }}" required>
                            @if($errors->has('billing_email'))
                            <span class="help-block text-danger">{{ $errors->first('billing_email') }}</span>
                            @endif
                        </div>
                         <div class="mb-3">
                            <label for="billing_country" class="form-label">{{ _('Country / Region') }}</label>
                            <select name="billing_country" id="billing_country" class="form-control">
                                <option value="" class="d-none">-- {{ __('Choose') }} --</option>
                                @foreach ($countries as $key=>$country)
                                <option value="{{ $country }}" {{ $user->billing_country==$country ? 'selected':'' }}>{{ $country }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('billing_country'))
                            <span class="help-block text-danger">{{ $errors->first('billing_country') }}</span>
                            @endif
                        </div>
                         <div class="mb-3">
                            <label for="billing_zipcode" class="form-label">{{ __('Zip Code') }}</label>
                            <input type="number" name="billing_zipcode" id="billing_zipcode" class="form-control" value="{{ $user->billing_zipcode }}" required>
                            @if($errors->has('billing_zipcode'))
                            <span class="help-block text-danger">{{ $errors->first('billing_zipcode') }}</span>
                            @endif
                        </div>
                        <div class="modal-footer pb-3">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Save billing details') }}</button>
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
                            <input type="text" name="card_number" id="card_number" class="form-control @error('name') is-invalid @enderror" value="{{ $user->card_number }}" required
                            autocomplete="cc-number" autocorrect="off"
                            spellcheck="false" type="text"
                            aria-label="Credit or debit card number"
                            placeholder="1234 1234 1234 1234" aria-invalid="false" tabindex="1">
                            @if($errors->has('card_number'))
                            <span class="help-block text-danger">{{ $errors->first('card_number') }}</span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="card_expiration_date" class="form-label">{{ __('Expiration date') }}</label>
                                    <input autocomplete="cc-exp" autocorrect="off" spellcheck="false" type="text" name="card_expiration_date" id="card_expiration_date" class="form-control @error('card_expiration_date') is-invalid @enderror"
                                    required aria-label="Credit or debit card expiration date" placeholder="MM / YY" aria-invalid="false" tabindex="2" value="{{ $user->card_expiration_date }}">
                                    @if($errors->has('card_expiration_date'))
                                    <span class="help-block text-danger">{{ $errors->first('card_expiration_date') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="card_cvc" class="form-label">{{ __('CVC') }}</label>
                                    <input class="form-control @error('card_cvc') is-invalid @enderror" autocomplete="cc-csc" autocorrect="off" spellcheck="false" type="text" name="card_cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV" placeholder="CVC" aria-invalid="false" tabindex="3" value="{{ $user->card_cvc }}">
                                    @if($errors->has('card_cvc'))
                                    <span class="help-block text-danger">{{ $errors->first('card_cvc') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name_on_card" class="form-label">{{ __('Name on the card') }}</label>
                            <input type="text" name="name_on_card" id="name_on_card" class="form-control @error('name_on_card') is-invalid @enderror" value="{{ $user->name_on_card }}" required
                            autocomplete="cc-number" autocorrect="off"
                            spellcheck="false" type="text"
                            aria-label="Credit or debit card number"
                            placeholder="John wick" aria-invalid="false" tabindex="4">
                            @if($errors->has('name_on_card'))
                                <span class="help-block text-danger">{{ $errors->first('name_on_card') }}</span>
                            @endif
                        </div>
                        <div class="modal-footer pb-3">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Save payment method') }}</button>
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
// var cropper = new Slim(document.getElementById('profile_pic'), {
//         ratio: '1:1',
//         minSize: {
//             width: 150,
//             height: 150,
//         },
//         size: {
//             width: 600,
//             height: 600,
//         },
//         willSave: function(data, ready) {
//             $('#profilePic_2').attr('src',data.output.image);
//           ready(data);
//         },
//         meta: {
//             viewid:1
//       },
//         download: false,
//         instantEdit: true,
//     });
</script>
@endpush
