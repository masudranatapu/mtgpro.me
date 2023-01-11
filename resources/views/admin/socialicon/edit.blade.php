@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings','active')
@section('social_icon','active')
@section('title') {{ __('Social Icon Edit')}} @endsection

@php
$social_type =  Config::get('app.social_type');

@endphp


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
                                    <form action="{{route('admin.social-icon.update', $socileicons->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                 <label for="" class="form-label">Preview Image</label>
                                                 <img id="output" src="{{ asset($socileicons->icon_image ?? 'assets/img/no-image.jpg') }}" class="border rounded" width="80" height="80" alt="image">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6 mb-2">
                                                    <label for="" class="form-label">{{ __('Icon Image')}}</label>
                                                <input type="file" name="icon_image" onchange="loadFile(event)" class="form-control" placeholder="{{ __('Icon image')}}">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Icon Group')}}</label>
                                                <select name="icon_group" id="icon_group" class="form-control">
                                                     <option value="Recommended" {{$socileicons->icon_group == 'Recommended' ? 'selected' : '' }}>Recommended</option>
                                                     <option value="Contact" {{$socileicons->icon_group == 'Contact' ? 'selected' : '' }}>Contact</option>
                                                     <option value="Social Media" {{$socileicons->icon_group == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                                                     <option value="Music Media" {{$socileicons->icon_group == 'Music Media' ? 'selected' : '' }}>Music Media</option>
                                                     <option value="Payment" {{$socileicons->icon_group == 'Payment' ? 'selected' : '' }}>Payment</option>
                                                     <option value="More" {{$socileicons->icon_group == 'More' ? 'selected' : '' }}>More</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Icon Name')}}</label>
                                                <input type="text" name="icon_name" class="form-control" value="{{$socileicons->icon_name}}" placeholder="Icon name">
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Icon Title')}}</label>
                                                <input type="text" name="icon_title" class="form-control" value="{{$socileicons->icon_title}}" placeholder="Icon Title">
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Type')}}</label>
                                                <select name="type" class="form-control" >
                                                    @if(isset($social_type) && count($social_type)>0)
                                                        @foreach($social_type as $key => $typ)
                                                            <option value="{{ $typ }}" {{ $socileicons->type == $typ ? 'selected' : '' }} >{{ $typ }}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Main Link')}}</label>
                                                <input type="text" name="main_link" class="form-control" value="{{$socileicons->main_link}}" placeholder="Enter main link (if type is username)">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Icon Example')}}</label>
                                                <input type="text" name="example_text" class="form-control" value="{{$socileicons->example_text}}" placeholder="Icon Example">
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Order Id')}}</label>
                                                <input type="number" name="order_id" class="form-control" value="{{$socileicons->order_id}}" placeholder="Order id">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Status')}}</label>
                                                <select name="status"  class="form-control">
                                                    <option disabled>Select One</option>
                                                    <option @if($socileicons->status == 1) selected @endif value="1">{{ __('Active')}}</option>
                                                    <option @if($socileicons->status == 0) selected @endif value="0">{{ __('Inactive')}}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="" class="form-label">{{ __('Paid Status')}}</label>
                                                <select name="is_paid"  class="form-control">
                                                    <option disabled>{{ __('Select One')}}</option>
                                                    <option value="0" @if($socileicons->is_paid == 0) selected @endif>{{ __('Free')}}</option>
                                                    <option value="1" @if($socileicons->is_paid == 1) selected @endif>{{ __('Paid')}}</option>
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
<!-- Preview image -->
<script>
    var loadFile = function(event) {
       var image = document.getElementById('output');
       image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection
