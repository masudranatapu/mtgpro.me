@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
<!--push from page-->
@push('css')
@endpush('css')
@section('settings', 'active')
@section('faq', 'active')
@section('title') {{ __('Create Faq')}} @endsection
@section('page-name') {{ __('Create Faq')}} @endsection
<?php
$row = $data ?? [] ;
$tabindex = 1;
?>
@section('content')
<div class="page-wrapper">
    {{--     <div class="container-xl">
        <div class="page-header d-print-none mt-2">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Create Faq') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card card-sm card-success" >
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="la la-times"></i></button>
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="la la-times"></i></button>
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Create Faq') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.faq.list')}}" class="btn btn-primary">{{ __('Back')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <form action="{{ route('admin.faq.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group {!! $errors->has('title') ? 'error' : '' !!}">
                                                        <label for="title">{{ __('Title')}} <span class="text-danger">*</span></label>
                                                        <div class="controls">
                                                            <input type="text" name="title" id="title" class="form-control mb-1" placeholder="{{ __('Enter title')}}" required tabindex="{{ $tabindex++ }}">
                                                            {!! $errors->first('title', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group {!! $errors->has('body') ? 'error' : '' !!}">
                                                        <label for="body">{{ __('Body')}} <span class="text-danger">*</span></label>
                                                        <div class="controls">
                                                            <textarea name="body" cols="30" rows="10" class="form-control" placeholder="{{ __('Enter page body')}}" required tabindex="{{ $tabindex++ }}"></textarea>
                                                            {!! $errors->first('body', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group {!! $errors->has('is_active') ? 'error' : '' !!}">
                                                        <label for="is_active">{{ __('Is Active')}} <span class="text-danger">*</span></label>
                                                        <div class="controls">
                                                            <select id="is_active" class="form-control" name="is_active" required tabindex="{{ $tabindex++ }}">
                                                                <option value="1">{{ __('Yes')}}</option>
                                                                <option value="0">{{ __('No')}}</option>
                                                            </select>
                                                            {!! $errors->first('is_active', '<label class="help-block text-danger">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-actions text-center">
                                                        <a href="{{route('admin.custom-page.list')}}" class="btn btn-warning mr-1"><i class="ft-x"></i> {{ __('Cancel')}}</a>
                                                        <button type="submit" class="btn bg-primary bg-darken-1 text-white">
                                                        <i class="la la-check-square-o"></i> {{ __('Save')}} </button>
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
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush('custom_js')
