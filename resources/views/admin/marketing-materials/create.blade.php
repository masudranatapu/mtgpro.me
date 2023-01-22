@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush('css')
@section('content')
@section('title') {{ __('Marketing Materials List')}} @endsection
@section('marketing_materials_list', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Marketing Material/Create') }} |
                                    <a href="{{ route('admin.marketing.materials')}}" class="@yield('user_list')"><i class="fa fa-user"></i> {{ __('All Marketing Materials') }}</a>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-2 py-2">
                                <form action="{{ route('admin.marketing.material.store')}}" id="reviewForm" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">{{ __('Title') }}</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="{{__('Title')}}"  name="title" id="title" required {{ old('title')  }}>
                                        @if($errors->has('title'))
                                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="order_id" class="form-label">{{ __('Order ID') }}</label>
                                        <input type="text" class="form-control @error('order_id') is-invalid @enderror" placeholder="{{__('Order ID')}}" name="order_id" id="order_id" required value="{{ old('order_id')  }}">
                                        @if($errors->has('order_id'))
                                            <span class="help-block text-danger">{{ $errors->first('order_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label" id="image">{{ __('Image') }} <span class="text-danger"><small>Prefered size(200 x 200 px)</small></span></label>
                                       <input type="file" class="form-control" name="image" placeholder="{{ __('Image') }}" value=""required>
                                        @if($errors->has('image'))
                                            <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label" id="file">{{ __('PDF') }}</label>
                                       <input type="file" class="form-control" name="file" placeholder="{{ __('PDF') }}" value="" accept="application/pdf,application/vnd.ms-excel" required>
                                        @if($errors->has('file'))
                                            <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">{{ __('Status') }}</label>
                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="1">{{__('Active')}}</option>
                                            <option value="0">{{__('inactive')}}</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="help-block text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="author_name" class="form-label">{{ __('Author Name') }}</label>
                                        <input type="text" class="form-control @error('author_name') is-invalid @enderror" placeholder="{{__('Author Name')}}" name="author_name" id="author_name" required value="{{ old('author_name')  }}">
                                        @if($errors->has('author_name'))
                                            <span class="help-block text-danger">{{ $errors->first('author_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">{{ __('Description') }}</label>
                                         <textarea name="description" id="text-editor" cols="30" rows="10" required class="form-control summernote" placeholder="Enter page body" tabindex=""></textarea>
                                        <p id="charNum"></p>
                                        @if($errors->has('description'))
                                            <span class="help-block text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">
                                            <span class="btn-txt">{{ __('Save') }}</span>
                                        </button>
                                    </div>
                                </form>
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/text-editor.js') }}"></script>
@endsection
