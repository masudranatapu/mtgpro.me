@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings','active')
@section('social_icon','active')
@section('title') Social Icon Create @endsection

@section('content')
<div class="page-wrapper">
    {{--         <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('OVERVIEW') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Add New Social Icon') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.social-icon.index')}}" class="btn btn-primary">{{ __('Back')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Create Social Icon') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.social-icon.index')}}" class="btn btn-primary">{{ __('Back')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <form action="{{route('admin.social-icon.store')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon Name')}}</label>
                                                <input type="text" name="icon_name" class="form-control" placeholder="{{ __('Icon name')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon fa')}}</label>
                                                <input type="text" name="icon_fa" class="form-control" placeholder="{{ __('Icon  name fa')}}">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon Title')}}</label>
                                                <input type="text" name="icon_title" class="form-control" placeholder="{{ __('Icon Title')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon Example')}}</label>
                                                <input type="text" name="example_text" class="form-control" placeholder="{{ __('Icon Example')}}">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="">{{ __('Order Id')}}</label>
                                                <input type="text" name="order_id" class="form-control" placeholder="{{ __('Order id')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">{{ __('Status')}}</label>
                                                <select name="status"  class="form-control">
                                                    <option disabled>{{ __('Select One')}}</option>
                                                    <option value="1" selected>{{ __('Active')}}</option>
                                                    <option value="0">{{ __('Inactive')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-success">{{ __('Create')}}</button>
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
    @include('admin.includes.footer')
</div>
@endsection
