@extends('user.layouts.app')
@section('title') {{ __('Edit card') }}  @endsection
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
                    <a href="{{ route('user.connections') }}" class="back_btn" title="Tooltip on top"><i class="fa fa-angle-left"></i></a>
                    <img src="{{ getProfile(Auth::user()->profile_image) }}" width="50" class="img-circle mr-2" alt="{{ $row->name }}">
                    {{ $row->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="account_setting create_card_wrapper p-5">
                <a href="{{ route('user.connections.edit',$row->id) }}" class="btn btn-secondary mr-2">
                    <img src="{{ asset('assets/img/icon/edit.svg') }}" alt="{{ $row->name }}"> {{ __('Edit') }}
                </a>
                <a href="{{ route('user.connections.download',$row->id) }}" class="btn btn-secondary mr-2">
                    <img src="{{ asset('assets/img/icon/download.svg') }}" alt="{{ $row->name }}">
                    {{ __('Save as contact') }}
                </a>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#connectMail" class="btn btn-secondary">
                    <img src="{{ asset('assets/img/icon/message.svg') }}" alt="{{ $row->name }}"> {{ __('Email lead') }}
                </a>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="connection_view view-card mt-4">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                     <h5>Connected with</h5>
                                     <img src="{{ getProfile($row->profile_image) }}" width="50" class="img-circle mt-2 mr-2" alt="{{ $row->name }}" title="{{ $row->name }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h5>
                                        Name
                                        <a href="javascript:void(0)" class="copy_btn position-relative" data-clipboard-target="{{ $row->name }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}">
                                            <span class="notice d-none position-absolute" style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
                                        </a>
                                    </h5>
                                   <span> {{ $row->name }}</span>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h5>
                                        Email
                                            <a href="javascript:void(0)" class="copy_btn position-relative" data-clipboard-target="{{ $row->email }}">
                                        <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->email }}">
                                        <span class="notice d-none position-absolute" style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
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
                                         <a href="javascript:void(0)" class="copy_btn position-relative" data-clipboard-target="{{ $row->phone }}">
                                        <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}">
                                        <span class="notice d-none position-absolute" style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
                                    </a>
                                     </h5>
                                    <span><a href="tel:{{ $row->phone }}">{{ $row->phone }}</a></span>
                                </div>
                                <div class="col-md-8 mb-4">
                                     <h5>Note</h5>
                                    <span>{{ $row->message }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user.connections._send_mail_modal')
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
