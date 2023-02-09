@extends('user.layouts.app')
@section('title') {{ __('My Cards') }} @endsection
@push('custom_css')
<style>
    .card-status input[type=checkbox] {
        height: 0;
        width: 0;
        visibility: hidden;
    }

    .card-status label {
        cursor: pointer;
        text-indent: -9999px;
        width: 50px;
        height: 22px;
        background: grey;
        display: block;
        border-radius: 100px;
        position: relative;
    }

    .card-status label:after {
        content: '';
        position: absolute;
        top: 1px;
        left: 5px;
        width: 19px;
        height: 19px;
        background: #fff;
        border-radius: 90px;
        transition: 0.3s;
    }

    .card-status input:checked+label {
        background: #bada55;
    }

    .card-status input:checked+label:after {
        left: calc(100% - 5px);
        transform: translateX(-100%);
    }

    .card-status label:active:after {
        width: 50px;
    }

    .btn-sm.inactive {
        color: rgb(151 140 140) !important;
    }
</style>
@endpush

@php
$iphone = stripos($_SERVER['HTTP_USER_AGENT'], 'iphone');
$ipad = stripos($_SERVER['HTTP_USER_AGENT'], 'ipad');
@endphp

@section('dashboard', 'active')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-md-2 row">
                    <h1 class="mb-3 mb-md-0">{{ __('My Cards') }}
                        <a class="create_plus_icon" href="{{ route('user.card.create') }}"><i
                                class="fab fa-plus"></i></a>
                        &nbsp; <a href="{{ route('home') }}/{{ Auth::user()->username }}">Live card</a>

                    </h1>
                </div>
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">

                        <a class="btn-sm btn-primary btn-sm" href="javascript:void(0)" onclick="copy(this)"
                            data-url="{{ route('home') }}/{{ auth()->user()->username }}">{{ __('Link To Copy') }}</a>
                        <a class="btn-sm btn-primary btn-sm"
                            href="mailto:?subject=&body=Hi there! Please click this link to check out my professional business card {{ route('home') }}/{{ auth()->user()->username }}">{{
                            __('Email') }}</a>

@if ( $ipad == false || $iphone == false)

    <a class="btn-sm btn-primary btn-sm" href="sms:?body=Hi there! Please click this link to check out my professional business card {{ route('home') }}/{{ auth()->user()->username }}">{{
    __('Text') }}</a>
@endif



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-4">
                    <!-- create new card -->
                    <a href="{{ route('user.card.create') }}">
                        <div class="dashboard_card text-center">
                            <div class="card_body">
                                <span class="plus_icon">
                                    <img src="{{ asset('assets/img/icon/plus.svg') }}"
                                        alt="{{ __('Create New Card') }}">
                                </span>
                                <p>{{ __('Create New Card') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @if (isset($cards) && count($cards) > 0)
                @foreach ($cards as $key => $card)
                <div class="col-sm-6 col-xl-4">
                    <!-- user card -->

                    <div class="dashboard_card user_card" style="background-color: #E8F4ED;">
                        <div class="card_body">
                            <div class="card_cover_bg">
                                <!-- cover image -->
                                <div class="cover_photo">
                                    <img src="{{ getCover($card->cover) }}" class="img-fluid"
                                        alt="{{ $card->title }} {{ $card->title2 }}">
                                </div>
                                <div class="user_card_profile text-center">
                                    <div class="profile_image">
                                        <!-- profile image -->
                                        <div class="profile_photo">
                                            <img src="{{ getProfile($card->profile) }}" class="img-fluid"
                                                alt="{{ $card->title }} {{ $card->title2 }}">
                                        </div>
                                        <!-- logo -->
                                        <div class="logo">
                                            <img src="{{ getLogo($card->logo) }}" alt="{{ $card->company_name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user card info -->
                            <div class="card_info mt-4 text-center">
                                <div class="profile_name">
                                    <h3>{{ $card->title }} {{ $card->title2 }}</h3>
                                    <h5>{{ $card->designation }} {{ __('at') }}
                                        {{ $card->company_name }}</h5>
                                </div>
                                <div class="card_btn mt-3 mb-4">
                                    <a href="{{ route('user.card.edit', $card->id) }}" class="btn-sm btn-secondary"
                                        title="Edit card">{{ __('Edit') }}</a>
                                    @if (checkPackage())
                                    <a href="javascript:void(0)" id="change_status_{{ $card->id }}"
                                        class="btn-sm btn-secondary changeTrg change-status {{ $card->status == 0 ? 'inactive' : '' }} "
                                        data-id="{{ $card->id }}" data-status="{{ $card->status }}">
                                        <i class="fa fa-check" style="@if ($card->status == 0) display:none; @endif"
                                            title="Live Card"></i>
                                        {{ __('Live') }}
                                    </a>
                                    <?php

                                                    if ($card->status == 1) {
                                                        $url = Auth::user()->username;
                                                    } else {
                                                        $url = $card->card_url;
                                                    }
                                                    ?>
                                    <a target="_blank" href="{{ route('card.preview', $url) }}"
                                        class="btn-sm btn-secondary" title="Card Preview">
                                        {{ __('Preview') }}</a>

                                    <a href="{{ route('qr', $card->card_id) }}"
                                        class="download_btn btn-sm btn-secondary" title="{{ __('Download QR code') }}">
                                        {{ __('QR') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('custom_js')
<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '.changeTrg', function() {
            var card_id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            if (confirm('Are you sure ?')) {
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('user.card.change-status') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': card_id,
                        'status': status,
                    },
                    success: function(data) {
                        if (data.status == true) {
                            toastr.success(data.msg);
                            $('.change-status').addClass('inactive');
                            $('.change-status').addClass('changeTrg');
                            $('.change-status').attr('data-status', 0);
                            $('.change-status i').hide();
                            $('#change_status_' + card_id).attr('data-status', 1);
                            $('#change_status_' + card_id).removeClass('inactive');
                            $('#change_status_' + card_id).removeClass('changeTrg');
                            $('#change_status_' + card_id + ' i').show();

                        } else {
                            toastr.warning(data.msg);
                        }
                    },
                });
            }

        })

        function copy(event) {
            let url = event.dataset.url;
            console.log(url);
            var temp = $("<input>");
            $("body").append(temp);
            temp.val(url).select();
            document.execCommand("copy");
            temp.remove();
            toastr.success('Link copy to clipsboard');


        }
</script>
@endpush
