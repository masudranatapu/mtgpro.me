@extends('user.layouts.app')
@section('title') {{ __('Edit card') }}  @endsection
@push('custom_css')
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
                        <a href="" class="btn"> <a href="{{ route('user.connections.edit',$row->id) }}"><img src="{{ asset('assets/img/icon/edit.svg') }}" alt="{{ $row->name }}"> {{ __('Edit') }}</a>
                        <a href="" class="btn"> <a href="{{ route('user.connections.download',$row->id) }}"><img src="{{ asset('assets/img/icon/download.svg') }}" alt="{{ $row->name }}"> {{ __('Save as contact') }}</a>
                        <a href="" class="btn"> <a href="javascript::void(0)" data-toggle="modal" data-target="#connectMail"><img src="{{ asset('assets/img/icon/message.svg') }}" alt="{{ $row->name }}"> {{ __('Email lead') }}</a>

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
   <!-- Contact Modal -->
<div class="contact_modal modal fade" id="connectMail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="{{ route('user.connections') }}" title="Tooltip on top"><i class="fa fa-angle-left"></i> Back</a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
                <form action="{{route('user.connection.send-mail',$row->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="connection_id" id="connection_id" value="{{$row->id}}" />
                    <div class="mb-3">
                        <label for="">{{ __('Recepients') }} <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" disabled value="{{ $row->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required tabindex="{{$tabindex++}}">
                        @if($errors->has('email'))
                        <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="subject">{{ __('Subject') }} <span class="text-danger">*</span></label>
                        <input type="text" name="text" id="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" placeholder="{{ __('Subject') }}" required tabindex="{{$tabindex++}}">
                        @if($errors->has('subject'))
                        <span class="help-block text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="message">{{ __('Message') }}  <span class="text-danger">*</span></label>
                        <textarea name="message" id="message" cols="30" rows="5" value="{{ old('message') }}" class="form-control @error('message') is-invalid @enderror" placeholder="{{ __('Message') }}" tabindex="{{$tabindex++}}"></textarea>
                        @if($errors->has('message'))
                        <span class="help-block text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary w-100">{{ __('Send Message') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
<script>
</script>
@endpush
