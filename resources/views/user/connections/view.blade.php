@extends('user.layouts.app')
@section('title') {{ __('Edit card') }}  @endsection

@push('custom_css')

@endpush
@push('top_js')
@endpush
@php

@endphp
@section('tab_content','active')
@section('content')
<!-- main content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <a href="{{ route('user.card') }}" class="back_btn" title="Tooltip on top"><i class="fa fa-angle-left"></i></a>
                        <img src="{{ getProfile('assets/img/user2.jpg') }}" width="50" class="img-circle mr-2" alt="{{ $row->name }}">
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
                        <a href="" class="btn"> <a href="{{ route('user.connections.edit',$row->id) }}"><img src="{{ asset('assets/img/icon/edit.svg') }}" alt="{{ $row->name }}"> {{ __('Edit') }}</a>
                        <a href="" class="btn"> <a href="{{ route('user.connections.edit',$row->id) }}"><img src="{{ asset('assets/img/icon/download.svg') }}" alt="{{ $row->name }}"> {{ __('Save as contact') }}</a>
                        <a href="" class="btn"> <a href="{{ route('user.connections.edit',$row->id) }}"><img src="{{ asset('assets/img/icon/message.svg') }}" alt="{{ $row->name }}"> {{ __('Email lead') }}</a>

                        <div class="view-card card">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Name') }} <a href="#"><img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}"></a>
                                    </div>
                                    <div>
                                        {{ $row->name }}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        {{ __('Email') }} <a href="#"><img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}"></a>
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
                                        {{ __('Number') }} <a href="#"><img src="{{ asset('assets/img/icon/copy.svg') }}" alt="{{ $row->name }}"></a>
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

@endsection
@push('custom_js')
<script>
</script>
@endpush
