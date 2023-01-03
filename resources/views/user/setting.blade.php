@extends('user.layouts.app')
@section('title') {{ __('Settings') }}  @endsection
@push('custom_css')

@endpush

@php

$settings = getSetting();

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
                                            <!-- account settings -->
                                            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">
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

                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" title="{{ __('Logout') }}"><img src="{{ asset('assets/img/icon/logout.svg') }}" alt="icon">
                                                {{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-9">
                                        <div class="tab-content" id="vert-tabs-tabContent">
                                            <!-- account settings -->
                                            <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                                <div class="setting_tab_contetn">
                                                    <div class="heading mb-4">
                                                        <h3>{{ __('Account Settings') }}</h3>
                                                    </div>
                                                    <div class="setting_form">
                                                        <form onsubmit="return false;">
                                                            {{-- <div class="form-group">
                                                                <label for="profile_url" class="form-label">
                                                                    {{ __('Profile URL') }}
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/img/icon/copy.svg') }}" alt="icon">
                                                                    </a>
                                                                </label>
                                                                <input type="text" name="profile_url" id="profile_url" class="form-control" value="mtgpr/">
                                                            </div> --}}

                                                            <div class="form-group">
                                                                <label class="form-label">{{ __('Profile picture') }} <i class="fa fa-exclamation-circle" aria-hidden="true" title="Ideal dimensions: 300px x 300px (1:1)"></i> </label>
                                                                <label for="profile_pic" class="form-label" style="display: block;">
                                                                   <img src="{{ getProfile() }}" alt="profile image" style="width:150px;">
                                                                </label>
                                                                <input type="file" onchange="profileloadFile(event)" hidden name="profile_pic" id="profile_pic" value="{{ old('profile_pic') }}" >
                                                                @if($errors->has('profile_pic'))
                                                                <span class="help-block text-danger">{{ $errors->first('profile_pic') }}</span>
                                                                @endif
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                                                            </div>

                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                                            </div>
                                                        </form>
                                                       <div class="float-right">
                                                            <a href="#" class="text-primary p-2">Reset Your Password</a>
                                                            <a href="#" class="text-danger p-2" data-toggle="modal" data-target="#deleteAccount">Delete Account</a>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                                <!-- Support -->
                                                <div class="setting_tab_contetn">
                                                    <div class="heading mb-4">
                                                        <h3>{{ __('Support') }}</h3>
                                                    </div>
                                                    <div class="setting_form">
                                                        <form onsubmit="return false;">
                                                            <div class="form-group">
                                                                <label for="emalil_to" class="form-label">{{ __('To') }}</label>
                                                                    <div>{{ $settings->email }}</div>
                                                                    <hr>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject" class="form-label">{{ __('Subject') }} <span class="text-dark">*</span></label>
                                                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message" class="form-label">{{ __('Message') }} <span class="text-dark">*</span></label>
                                                                <textarea name="message" id="message" cols="30" rows="7" placeholder="Message" class="form-control" required style="height:120px;"></textarea>
                                                            </div>
                                                            <div class="form-group mt-4">
                                                                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                                                <div class="setting_tab_contetn">
                                                    <div class="heading mb-4">
                                                        <h3>{{ __('Request a Feature') }}</h3>
                                                        <p>{{ __('Do you have an idea for a feature that would make better for you? Let us know!') }}</p>
                                                    </div>
                                                    <div class="setting_form">
                                                        <form onsubmit="return false;">
                                                            <div class="form-group">
                                                                <label for="request_message" class="form-label">{{ __('Message') }} <span class="text-dark">*</span></label>
                                                                <textarea name="request_message" id="request_message" cols="30" rows="7" placeholder="Message" class="form-control" required style="height:120px;"></textarea>
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
<div class="delete_modal1">
    <div class="modal fade" id="deleteAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Account Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- modal body -->
                <div class="modal_body">
                    <h5>Type "delete" to delete your account.</h5>
                    <p>All contacts and other data associated with this account will be permanently deleted. This cannot be undone.</p>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Type 'delete' to delete your account." required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer pb-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
</div>




    @endsection
    @push('custom_js')
    @endpush
