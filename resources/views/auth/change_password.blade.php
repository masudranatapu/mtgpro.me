@extends('desktop.layouts.app')
@section('title'){{ __('Change Password')}}@endsection
@section('content')
{{-- <div class="container">
    <nav class="breadcrumb_sec">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('profile') }}">{{ __('User')}} </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Change password')}}</li>
        </ol>
    </nav>
</div> --}}
<div class="container">
        <div class="row justify-content-center my-4 min-height">
            <div class="col-md-8">
                <div class="card">
                    @include('common.flash')
                    <div class="card-header">{{ __('Change your password') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.change-password.update') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="current_password" class="col-form-label text-md-right">{{ __('Old Password') }}</label>
                                    <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" value="{{ old('current_password') }}" required autocomplete="current-password">
                                    {!! $errors->first('current_password', '<span class="help-block text-danger">:message</span>') !!}

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password" class="col-form-label text-md-right">{{ __('New Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                                    {!! $errors->first('password', '<span class="help-block text-danger">:message</span>') !!}

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="confirm_password" class="col-form-label text-md-right">{{ __('Re-type new Password') }}</label>
                                    <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="{{ old('confirm_password') }}" required>
                                    {!! $errors->first('confirm_password', '<span class="help-block text-danger">:message</span>') !!}

                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
