@extends('user.layouts.app')
@section('title') {{ __('Edit card') }} @endsection
@push('custom_css')
<style>
    span.notice {
        top: 3px;
        right: -42px;
        font-size: 12px;
        color: rgb(34, 34, 34);
        transition: all 0.2s ease 0s;
    }

    td {
        width: 0;
        color: #444;
        font-size: 14px;
    }
</style>
@endpush
@php
$tabindex =1;
@endphp
@section('connections','active')
@section('content')
<!-- main content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <a href="{{ route('user.crm') }}" class="back_btn" title="Tooltip on top"><i
                                class="fa fa-angle-left"></i></a>
                        <img src="{{ getProfile(Auth::user()->profile_image) }}" width="50" class="img-circle mr-2"
                            alt="{{ $row->name }}">
                        {{ $row->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="account_setting create_card_wrapper p-3 p-md-5">
                <a href="{{ route('user.crm.edit',$row->id) }}" class="btn btn-secondary m-1">
                    <img src="{{ asset('assets/img/icon/edit.svg') }}" alt="{{ $row->name }}"> {{ __('Edit') }}
                </a>
                <a href="{{ route('user.crm.download',$row->id) }}" class="btn btn-secondary m-1">
                    <img src="{{ asset('assets/img/icon/download.svg') }}" alt="{{ $row->name }}">
                    {{ __('Save as contact') }}
                </a>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="connection_view view-card mt-4">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h5>Connected with</h5>
                                    <img src="{{ getProfile($row->profile_image) }}" width="50"
                                        class="img-circle mt-2 mr-2" alt="{{ $row->name }}" title="{{ $row->name }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h5>
                                        Name
                                        <a href="javascript:void(0)" class="copy_btn position-relative"
                                            data-clipboard-target="{{ $row->name }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}">
                                            <span class="notice d-none position-absolute"
                                                style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>

                                        </a>
                                    </h5>
                                    <span> {{ $row->name }}</span>

                                    <br>
                                    @if($row->query_type == 1)
                                    <small>Connections</small>
                                    @elseif($row->query_type == 2)
                                    <small>Credit report authorization</small>
                                    @elseif($row->query_type == 3)
                                    <small>Quick applications</small>
                                    @endif

                                </div>

                                <div class="col-md-6 mb-4">
                                    <h5>
                                        Email
                                        <a href="javascript:void(0)" class="copy_btn position-relative"
                                            data-clipboard-target="{{ $row->email }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->email }}">
                                            <span class="notice d-none position-absolute"
                                                style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
                                        </a>
                                    </h5>
                                    <span> <a href="mailto:{{ $row->email }}">{{ $row->email }}</a></span>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h5>Job title</h5>
                                    <span>{{ $row->title }}</span>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h5>Company</h5>
                                    <span>{{ $row->company_name }}</span>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h5>
                                        Number
                                        <a href="javascript:void(0)" class="copy_btn position-relative"
                                            data-clipboard-target="{{ $row->phone }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}">
                                            <span class="notice d-none position-absolute"
                                                style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
                                        </a>
                                    </h5>
                                    <span><a href="tel:{{ $row->phone }}">{{ $row->phone }}</a></span>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <h5>Note</h5>
                                    <span>{{ $row->message }}</span>
                                </div>


                                @if($row->applicant_name)
                                <div class="col-md-8 mb-4">
                                    <h5>Applicant name</h5>
                                    <span>{{ $row->applicant_name }}</span>
                                </div>
                                @endif

                                @if($row->social_security_number)
                                <div class="col-md-8 mb-4">
                                    <h5>Social security number</h5>
                                    <span>{{ $row->social_security_number }}</span>
                                </div>
                                @endif

                                @if($row->date_of_birth)
                                <div class="col-md-8 mb-4">
                                    <h5>Date of birth</h5>
                                    <span>{{ $row->date_of_birth }}</span>
                                </div>
                                @endif

                                @if($row->current_street)
                                <div class="col-md-8 mb-4">
                                    <h5>Current street</h5>
                                    <span>{{ $row->current_street }}</span>
                                </div>
                                @endif

                                @if($row->current_city)
                                <div class="col-md-8 mb-4">
                                    <h5>Current city</h5>
                                    <span>{{ $row->current_city }}</span>
                                </div>
                                @endif

                                @if($row->current_state)
                                <div class="col-md-8 mb-4">
                                    <h5>Current state</h5>
                                    <span>{{ $row->current_state }}</span>
                                </div>
                                @endif


                                @if($row->current_date)
                                <div class="col-md-8 mb-4">
                                    <h5>Current date</h5>
                                    <span>{{ $row->current_date }}</span>
                                </div>
                                @endif



                                @if($row->prior_address)
                                <div class="col-md-8 mb-4">
                                    <h5>Prior address</h5>
                                    <span>{{ $row->prior_address }}</span>
                                </div>
                                @endif

                                @if($row->prior_city)
                                <div class="col-md-8 mb-4">
                                    <h5>Prior city</h5>
                                    <span>{{ $row->prior_city }}</span>
                                </div>
                                @endif


                                @if($row->purpose)
                                <div class="col-md-8 mb-4">
                                    <h5>Purpose of Mortgage or Loan</h5>
                                    <span>{{ $row->purpose }}</span>
                                </div>
                                @endif


                                @if($row->price)
                                <div class="col-md-8 mb-4">
                                    <h5>Price</h5>
                                    <span>{{ $row->price }}</span>
                                </div>
                                @endif

                                @if($row->down_amount)
                                <div class="col-md-8 mb-4">
                                    <h5>Down Amount</h5>
                                    <span>{{ $row->down_amount }}</span>
                                </div>
                                @endif


                                @if($row->property_type)
                                <div class="col-md-8 mb-4">
                                    <h5>Type of Property</h5>
                                    <span>{{ $row->property_type }}</span>
                                </div>
                                @endif


                                @if($row->location)
                                <div class="col-md-8 mb-4">
                                    <h5>Location</h5>
                                    <span>{{ $row->location }}</span>
                                </div>
                                @endif


                                @if($row->query_type == 3)
                                @if($row->purpose == 'Purchase')
                                <div class="col-md-8 mb-4">
                                    <h5>Referral to Real Estate Agent</h5>
                                    <span>{{ $row->agent ==1 ? 'Yes' : 'No' }}</span>
                                </div>
                                @endif
                                @endif


                                @if($row->occupation)
                                <div class="col-md-8 mb-4">
                                    <h5>Occupation</h5>
                                    <span>{{ $row->occupation }}</span>
                                </div>
                                @endif


                                @if($row->current_employer)
                                <div class="col-md-8 mb-4">
                                    <h5>Employed by your current emmployer</h5>
                                    <span>{{ $row->current_employer }}</span>
                                </div>
                                @endif


                                @if($row->annual_income)
                                <div class="col-md-8 mb-4">
                                    <h5>Annual Income</h5>
                                    <span>{{ $row->annual_income }}</span>
                                </div>
                                @endif


                                @if($row->credit_score)
                                <div class="col-md-8 mb-4">
                                    <h5>Credit Score</h5>
                                    <span>{{ $row->credit_score }}</span>
                                </div>
                                @endif


                                @if($row->contact_infomation)
                                <div class="col-md-8 mb-4">
                                    <h5>Contact Information</h5>
                                    <span>{{ $row->contact_infomation }}</span>
                                </div>
                                @endif




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user.crm._send_mail_modal')
@endsection
@push('custom_js')
<script>
    $(document).on('click', '.copy_btn', function(e) {
    e.preventDefault();
    var url = $(this).attr('data-clipboard-target');
    var textarea = document.createElement("textarea");
    textarea.textContent = url;
    textarea.style.position = "fixed";
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
    // $('.notice').hide();
    $('.notice').addClass('d-none');
    $(this).children('span').removeClass('d-none').addClass('d-block');
    // console.log($(this).children('.notice').html('Copied'));
    // toastr.success("The link to your card has been copied to the clipboard. "+url, 'Success', {
    //     closeButton: true,
    //     progressBar: true,
    // });
});

</script>
@endpush