@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('content')
@section('title') {{ __('Review List')}} @endsection
@section('reviews', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Review/Testimonial Create') }} |
                                    <a href="{{ route('admin.review.index') }}" class="@yield('user_list')"><i class="fa fa-user"></i> {{ __('All Review') }}</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{ route('admin.review.index') }}"
                                        class="btn btn-primary">{{ __('Back') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-2 py-2">
                                <form action="{{ route('admin.review.store') }}" id="reviewForm" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="display_name" class="form-label">{{ __('Display Name') }}</label>
                                        <input type="text" class="form-control @error('display_name') is-invalid @enderror"  name="display_name" id="display_name" required value="{{ old('display_name') ?? Auth::user()->name }}">
                                        @if($errors->has('display_name'))
                                            <span class="help-block text-danger">{{ $errors->first('display_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="display_title" class="form-label">{{ __('Display Title') }}</label>
                                        <input type="text" class="form-control @error('display_title') is-invalid @enderror" name="display_title" id="display_title" required value="{{ old('display_title') ?? Auth::user()->designation }}">
                                        @if($errors->has('display_title'))
                                            <span class="help-block text-danger">{{ $errors->first('display_title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="details" class="form-label">{{ __('Review') }}</label>
                                        <textarea class="form-control @error('details') is-invalid @enderror" onkeyup="countChars(this);" name="details" id="details" style="height: 120px !important;" required>{{ old('details') }}</textarea>
                                        <p id="charNum"></p>
                                        @if($errors->has('details'))
                                            <span class="help-block text-danger">{{ $errors->first('details') }}</span>
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
@push('scripts')
@endpush
