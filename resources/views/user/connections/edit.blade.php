@extends('user.layouts.app')
@section('title') {{ __('Edit card') }}  @endsection
@push('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
@endpush
@push('top_js')
@endpush
@php
$tabindex = 1;
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
                        <div class="view-card card">
                            <div class="card-body">
                                <form action="{{route('user.connections.update',$row->id)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group profile_group">
                                                <label class="form-label">{{ __('Profile picture') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Ideal dimensions: 540px x 540px (1:1)"></i></label>
                                                <div
                                                    class="slim"
                                                     data-ratio="1:1"
                                                     data-size="540,540"
                                                     data-max-file-size="100">
                                                    <img src="{{ asset($row->profile) }}" alt="{{ $row->name }}"/>
                                                    <input type="file" name="profile_pic" id="profile_pic">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" name="name" id="name" value="{{ $row->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" required tabindex="{{$tabindex++}}">
                                                @if($errors->has('name'))
                                                <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" name="email" id="email" value="{{ $row->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required tabindex="{{$tabindex++}}">
                                                @if($errors->has('email'))
                                                <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>



                                        <div class="mb-3">
                                            <input type="tel" name="phone" id="phone" value="{{$row->phone}}" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ __('Phone Number') }}" required tabindex="{{$tabindex++}}">
                                            @if($errors->has('phone'))
                                            <span class="help-block text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="job_title" id="job_title" value="{{ $row->title }}" class="form-control @error('job_title') is-invalid @enderror" placeholder="{{ __('Job Title') }}" required tabindex="{{$tabindex++}}">
                                            @if($errors->has('job_title'))
                                            <span class="help-block text-danger">{{ $errors->first('job_title') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="company" id="company" value="{{$row->company_name }}" class="form-control @error('company') is-invalid @enderror" placeholder="{{ __('Company') }}" required tabindex="{{$tabindex++}}">
                                            @if($errors->has('company'))
                                            <span class="help-block text-danger">{{ $errors->first('company') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <textarea name="note" id="note" cols="30" rows="10" value="{{ old('note') }}" class="form-control @error('note') is-invalid @enderror" placeholder="{{ __('Notes on this interaction') }}" tabindex="{{$tabindex++}}">{{$row->message }}</textarea>
                                            @if($errors->has('note'))
                                            <span class="help-block text-danger">{{ $errors->first('note') }}</span>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="background: #111 !important;">{{ __('Update') }}</button>
                                    </form>

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
<script type="text/javascript" src="{{ asset('assets/js/slim.kickstart.min.js') }}"></script>
<script>
</script>
@endpush
