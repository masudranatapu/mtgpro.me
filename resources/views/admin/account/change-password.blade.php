@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')
@section('change_password', 'active')
@section('title') {{ __('Change Password') }} @endsection
@section('content')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="page-pretitle">
                            {{ __('Overview') }}
                        </div>
                        <h2 class="page-title">
                            {{ __('Change Password') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-12 col-lg-12">
                        <form action="{{ route('admin.update.password') }}" method="post" class="card">
                            @csrf
                            <div class="card-header" style="flex-direction: row-reverse">
                                <div class="float-right">
                                    <a href="{{ route('admin.account') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 mx-auto">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Old Password') }}</label>
                                                    <input type="password" class="form-control" name="current_password"
                                                        placeholder="{{ __('Old Password') }}..." required>
                                                    @if ($errors->has('current_password'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('current_password') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('New Password') }}</label>
                                                    <input type="password" class="form-control" name="new_password"
                                                        placeholder="{{ __('New Password') }}..." required>
                                                    @if ($errors->has('new_password'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('new_password') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Confirm Password') }}</label>
                                                    <input type="password" class="form-control" name="confirm_password"
                                                        placeholder="{{ __('Confirm Password') }}..." required>
                                                    @if ($errors->has('confirm_password'))
                                                        <span
                                                            class="help-block text-danger">{{ $errors->first('confirm_password') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xl-4 my-3">
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-edit" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                            </path>
                                                            <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3">
                                                            </path>
                                                            <line x1="16" y1="5" x2="19"
                                                                y2="8"></line>
                                                        </svg>
                                                        {{ __('Change Password') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
@endsection
