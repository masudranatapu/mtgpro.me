@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings','active')
@section('social_icon','active')
@section('title') {{ __('Social Icon Edit')}} @endsection
@section('content')
<div class="page-wrapper">
    {{--         <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Edit') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Edit Social Icon') }}
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
                                    {{ __('Edit Social Icon') }}
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
                                    <form action="{{route('admin.social-icon.update', $socileicons->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon Name')}}</label>
                                                <input type="text" name="icon_name" class="form-control" value="{{$socileicons->icon_name}}" placeholder="Icon name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon fa')}}</label>
                                                <input type="text" name="icon_fa" class="form-control" value="{{$socileicons->icon_fa}}" placeholder="Icon  name fa">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon Title')}}</label>
                                                <input type="text" name="icon_title" class="form-control" value="{{$socileicons->icon_title}}" placeholder="Icon Title">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">{{ __('Icon Exampl')}}e</label>
                                                <input type="text" name="example_text" class="form-control" value="{{$socileicons->example_text}}" placeholder="Icon Example">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="">{{ __('Order Id')}}</label>
                                                <input type="text" name="order_id" class="form-control" value="{{$socileicons->order_id}}" placeholder="Order id">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">{{ __('Status')}}</label>
                                                <select name="status"  class="form-control">
                                                    <option disabled>Select One</option>
                                                    <option @if($socileicons->status == 1) selected @endif value="1" selected>{{ __('Active')}}</option>
                                                    <option @if($socileicons->status == 0) selected @endif value="0">{{ __('Inactive')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-success">{{ __('Update')}}</button>
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
