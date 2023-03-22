@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')

@section('admin-users', 'active')

@section('title') User Edit @endsection

@section('page-name') User Edit @endsection

@section('edit_user', 'active')

@section('content')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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
                            {{ __('Create Admin User') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col">
                                    <div class="float-left">
                                        {{ __('Create Admin User') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.admin-users') }}"
                                            class="btn btn-primary">{{ __('Back') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.admin-users.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-xl-10">
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label required">{{ __('Full Name') }}</label>
                                                        <input type="text" class="form-control" value="{{ old('full_name') }}" name="full_name"
                                                            placeholder="{{ __('Full Name') }}" required>
                                                        {!! $errors->first('full_name', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label required">{{ __('Username') }}</label>
                                                        <input type="text" class="form-control" value="{{ old('username') }}" name="username"
                                                            placeholder="{{ __('Username') }}" required>
                                                        {!! $errors->first('username', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label required">{{ __('Email') }} </label>
                                                        <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                                            placeholder="{{ __('Email') }}" required>
                                                        {!! $errors->first('email', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            id="profile_image">{{ __('Profile Photo') }} <span
                                                                class="text-danger"><small>Prefered size(200 x 200
                                                                    px)</small></span></label>
                                                        <input type="file" class="form-control" name="profile_image"
                                                            placeholder="{{ __('Profile Photo') }}">
                                                        {!! $errors->first('profile_image', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="phone">{{ __('Phone') }}
                                                        </label>
                                                        <input type="number" min="0" class="form-control" value="{{ old('phone') }}" name="phone"
                                                            placeholder="{{ __('Phone') }}">
                                                        {!! $errors->first('phone', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" id="designation">{{ __('Designation') }}
                                                        </label>
                                                        <input type="text" class="form-control" value="{{ old('designation') }}" name="designation"
                                                            placeholder="{{ __('Designation') }}">
                                                        {!! $errors->first('designation', '<label class="help-block text-danger">:message</label>') !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="status">{{ __('Status') }} </label>
                                                            <select id="status" class="form-control" name="status">
                                                                <option value="1">{{ __('Active') }}</option>
                                                                <option value="0">{{ __('Inactive') }}</option>
                                                            </select>
                                                            {!! $errors->first('status', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label required"
                                                                for="user_type">{{ __('User type') }} </label>
                                                            <select id="user_type" class="form-control" name="user_type">
                                                                <option value="1">{{ __('Admin') }}</option>
                                                                <option value="2">{{ __('User') }}</option>
                                                            </select>
                                                            {!! $errors->first('user_type', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">{{ __('Password') }} </label>
                                                        <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                                                            placeholder="{{ __('Password') }}" autocomplete="password">
                                                        {!! $errors->first('password', '<label class="help-block text-danger">:message</label>') !!}

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
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path
                                                                    d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                                </path>
                                                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3">
                                                                </path>
                                                                <line x1="16" y1="5" x2="19"
                                                                    y2="8"></line>
                                                            </svg>
                                                            {{ __('Save') }}
                                                        </button>
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
            </div>
        </div>
        @include('admin.includes.footer')
    </div>
    <script>
        $(function() {
            $('#datepicker').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                onSelect: function(selectedDate) {
                    // we can write code here
                }
            });
        });
    </script>
@endsection
