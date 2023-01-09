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
            <div class="account_setting create_card_wrapper">
                <div class="row align-item-center">
                    <div class="col-xl-8">
                        <a href="{{ route('user.connections.edit',$row->id) }}"><img src="{{ asset('assets/img/icon/edit.svg') }}" alt="{{ $row->name }}"> {{ __('Edit') }}</a>
                        <a href="{{ route('user.connections.download',$row->id) }}"><img src="{{ asset('assets/img/icon/download.svg') }}" alt="{{ $row->name }}"> {{ __('Save as contact') }}</a>
                       <a href="javascript:void(0)" data-toggle="modal" data-target="#connectMail"><img src="{{ asset('assets/img/icon/message.svg') }}" alt="{{ $row->name }}"> {{ __('Email lead') }}</a>

                        <div class="view-card card">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Name') }}
                                        <a href="javascript:void(0)" class="copy_btn position-relative" data-clipboard-target="{{ $row->name }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}">
                                            <span class="notice d-none position-absolute" style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
                                        </a>
                                    </div>
                                    <div>
                                        {{ $row->name }}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Email') }}
                                        <a href="javascript:void(0)" class="copy_btn position-relative" data-clipboard-target="{{ $row->email }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->email }}">
                                            <span class="notice d-none position-absolute" style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>
                                        </a>
                                    </div>
                                    <div>
                                        {{ $row->email }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Job Title') }}
                                    </div>
                                    <div>
                                        {{ $row->title }}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Company') }}
                                    </div>
                                    <div>
                                        {{ $row->company_name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Number') }}
                                        <a href="javascript:void(0)" class="copy_btn position-relative" data-clipboard-target="{{ $row->phone }}">
                                            <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}">
                                            <span class="notice d-none position-absolute" style="color: rgb(34, 34, 34); transition: all 0.2s ease 0s;">Copied</span>

                                        </a>
                                    </div>
                                    <div>
                                        {{ $row->phone }}
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        {{ __('Note') }}
                                    </div>
                                    <div>
                                        {{ $row->message }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        {{ __('Connected with') }}
                                    </div>
                                    <div>
                                        <img src="{{ getProfile($row->profile_image) }}" width="50" class="img-circle mr-2" alt="{{ $row->name }}" title="{{ $row->name }}">
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
