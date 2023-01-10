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
                    <a href="{{ route('user.connections.details',[$row->email,$row->id]) }}" class="back_btn" title="Tooltip on top"><i class="fa fa-angle-left"></i></a>
                    <img src="{{ getProfile('assets/img/user2.jpg') }}" width="50" class="img-circle mr-2" alt="{{ $row->name }}">
                    {{ $row->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="account_setting create_card_wrapper p-5">
                <div class="row d-flex justify-content-center align-item-center">
                    <div class="col-xl-8">
                         <form action="{{route('user.connections.update',$row->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="card_id" id="card_id" value="{{$row->card_id}}" />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group profile_group">
                                                <label class="form-label">{{ __('Profile picture') }} <i class="fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Ideal dimensions: 540px * 540px (1:1)"></i></label>
                                                <div
                                                    class="slim"
                                                    data-ratio="1:1"
                                                    data-size="540,540"
                                                    data-max-file-size="100">
                                                    <img src="{{ asset($row->profile_image) }}" alt="{{ $row->name }}"/>
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
                                        <input type="text" name="title" id="title" value="{{ $row->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('Job Title') }}" required tabindex="{{$tabindex++}}">
                                        @if($errors->has('title'))
                                        <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="company_name" id="company_name" value="{{$row->company_name }}" class="form-control @error('company_name') is-invalid @enderror" placeholder="{{ __('company_name') }}" required tabindex="{{$tabindex++}}">
                                        @if($errors->has('company_name'))
                                        <span class="help-block text-danger">{{ $errors->first('company_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="message" id="message" cols="30" rows="10" value="{{ old('message') }}" class="form-control @error('message') is-invalid @enderror" placeholder="{{ __('Notes on this interaction') }}" tabindex="{{$tabindex++}}" style="height: 220px;">{{$row->message }}</textarea>
                                        @if($errors->has('message'))
                                        <span class="help-block text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                    <a href="{{ route('user.connections.details',[$row->email,$row->id]) }}" class="btn btn-secondary mr-2">{{ __('Cancel') }}</a>
                                    <button type="submit" class="btn btn-primary" style="background: #111 !important;">{{ __('Update') }}</button>
                                </form>
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