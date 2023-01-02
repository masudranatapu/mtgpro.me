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
                                    <form action="{{route('admin.social-icon.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                 <label for="" class="form-label">Preview Image</label>
                                                 <img id="output" src="{{ asset('assets/img/no-image.jpg') }}" class="border rounded" width="80" height="80" alt="image">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Icon Image')}}</label>
                                                <input type="file" name="icon_image" onchange="loadFile(event)" class="form-control" placeholder="{{ __('Icon image')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Icon Group')}}</label>
                                                <select name="icon_group" id="icon_group" class="form-control">
                                                     <option value="" class="d-none">-- Choose --</option>
                                                     <option value="Recommended">Recommended</option>
                                                     <option value="Contact">Contact</option>
                                                     <option value="Social Media">Social Media</option>
                                                     <option value="Music Media">Music Media</option>
                                                     <option value="Payment">Payment</option>
                                                     <option value="More">More</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Icon Name')}}</label>
                                                <input type="text" name="icon_name" value="{{ old('icon_name') }}" class="form-control" placeholder="{{ __('Icon name')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Icon fa')}}</label>
                                                <input type="text" name="icon_fa" value="{{ old('icon_fa') }}" class="form-control" placeholder="{{ __('Icon  name fa')}}">
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Icon Title')}}</label>
                                                <input type="text" name="icon_title" value="{{ old('icon_title') }}" class="form-control" placeholder="{{ __('Icon Title')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Icon Example')}}</label>
                                                <input type="text" name="example_text" value="{{ old('example_text') }}" class="form-control" placeholder="{{ __('Icon Example')}}">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Order Id')}}</label>
                                                <input type="number" name="order_id" value="{{ old('order_id') }}" class="form-control" placeholder="{{ __('Order id')}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">{{ __('Status')}}</label>
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
<!-- Preview image -->
<script>
    var loadFile = function(event) {
       var image = document.getElementById('output');
       image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

        
@endsection


    