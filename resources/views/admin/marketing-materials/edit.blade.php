@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<style>
        img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 85px;
        height: 80px;
        margin-top: 9px;
        }
    </style>
@endpush('css')
@section('content')
@section('title') {{ __('Marketing Materials Edit')}} @endsection
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
                                    <a href="{{ route('admin.marketing.materials')}}" class="@yield('user_list')"> {{ __('Edit Marketing Materials') }}</a> |
                                    {{ __('Marketing Material/Edit') }}

                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{ route('admin.marketing.materials') }}"
                                        class="btn btn-primary">{{ __('Back') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-2 py-2">
                                <form action="{{ route('admin.marketing.material.update',$marketingMetarial->id) }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">{{ __('Title') }}</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="{{__('Title')}}"  name="title" id="title" required value="{{ $marketingMetarial->title}}" }}>
                                        @if($errors->has('title'))
                                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="order_id" class="form-label">{{ __('Order ID') }}</label>
                                        <input type="text" class="form-control @error('order_id') is-invalid @enderror" placeholder="{{__('Order ID')}}" name="order_id" id="order_id" required value="{{ $marketingMetarial->order_id}}">
                                        @if($errors->has('order_id'))
                                            <span class="help-block text-danger">{{ $errors->first('order_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label" id="image">{{ __('Image') }} <span class="text-danger"><small>Prefered size(400 x 400 px)</small></span></label>
                                       <input type="file" class="form-control" name="image" placeholder="{{ __('Image') }}">
                                       <img class="custom_image" src="{{ $marketingMetarial->image}}" alt="Paris">
                                        @if($errors->has('image'))
                                            <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label" id="file">{{ __('PDF') }}</label>
                                       <input type="file" class="form-control" name="file" placeholder="{{ __('PDF') }}" value="" accept="application/pdf,application/vnd.ms-excel" >
                                        <a href="{{$marketingMetarial->file}}" target="_blank" download><span class="text-success"><small>Download PDF</small></span></a>

                                        @if($errors->has('file'))
                                            <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">{{ __('Status') }}</label>
                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="1" {{ $marketingMetarial->status == 1? 'selected' : ''}}>{{__('Active')}}</option>
                                            <option value="0" {{ $marketingMetarial->status == 0? 'selected' : ''}}>{{__('inactive')}}</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="help-block text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="author_name" class="form-label">{{ __('Author Name') }}</label>
                                        <input type="text" class="form-control @error('author_name') is-invalid @enderror" placeholder="{{__('Author Name')}}" name="author_name" id="author_name" required value="{{$marketingMetarial->author_name}}">
                                        @if($errors->has('author_name'))
                                            <span class="help-block text-danger">{{ $errors->first('author_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">{{ __('Description') }}</label>
                                         <textarea name="description" id="text-editor" cols="30" rows="10" required class="form-control summernote" placeholder="Enter page body" tabindex="">{{$marketingMetarial->description}}</textarea>
                                        <p id="charNum"></p>
                                        @if($errors->has('description'))
                                            <span class="help-block text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">
                                            <span class="btn-txt">{{ __('Update') }}</span>
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
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/text-editor.js') }}"></script>
@endpush
