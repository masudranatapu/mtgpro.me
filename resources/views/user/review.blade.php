@extends('user.layouts.app')

@section('title') {{ __('My Cards') }}  @endsection

@push('custom_css')

@endpush

@section('review','active')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Write a review') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if ($review)
                    <div class="col-lg-4">
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="review_sow">
                                    <div class="item">
                                        <div class="review_wrap">
                                            <div class="edit_review">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="review_profile me-3">
                                                    @if($review->user_image)
                                                        <img src="{{ asset($review->user_image) }} " class="rounded-circle border" width="60" alt="image" class="img-fluid">
                                                    @else
                                                        <img src="{{ asset('assets/img/avatar/1.jpg') }} " class="rounded-circle border" width="60" alt="image" class="img-fluid">
                                                    @endif
                                                </div>
                                                <div class="profile_info">
                                                    <h3>{{ $review->display_name ?? '' }}</h3>
                                                    <span>{{ $review->display_title ??''}}</span>
                                                </div>
                                            </div>
                                            <div class="divider">
                                                <i class="fa fa-quote-left"></i>
                                            </div>
                                            <div class="review_content">
                                                <p>{{ $review->details ?? ''}}</p>
                                            </div>
                                            <div class="status">
                                                @if ($review->status == 0)
                                                    <p class="pending">{{__('Pending')}}</p>
                                                @else
                                                    <p class="active" >{{__('Active')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-8 col-12">
                        <div class="review-card card card-lg ">
                            <div class="card-body">
                                <div class="review_edit_form">
                                    <form action="{{ route('user.review.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="display_name" class="form-label">{{ __('Display name') }}</label>
                                        <input type="text" class="form-control @error('display_name') is-invalid @enderror"  name="display_name" id="display_name" required value="{{ old('display_name') ?? Auth::user()->name }}">
                                        @if($errors->has('display_name'))
                                            <span class="help-block text-danger">{{ $errors->first('display_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="display_title" class="form-label">{{ __('Display title') }}</label>
                                        <input type="text" class="form-control @error('display_title') is-invalid @enderror" name="display_title" id="display_title" required value="{{ old('display_title') ?? Auth::user()->designation }}">
                                        @if($errors->has('display_title'))
                                            <span class="help-block text-danger">{{ $errors->first('display_title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="details" class="form-label">{{ __('Review') }}</label>
                                        <textarea class="form-control @error('details') is-invalid @enderror" name="details" id="details" style="height: 120px !important;" required>{{ old('details') }}</textarea>
                                        @if($errors->has('details'))
                                            <span class="help-block text-danger">{{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if ($review)
                    <div class="col-lg-8">
                        <div class="card card-lg show_form" style="display: none" >
                            <div class="card-body">
                                <div class="review_edit_form">
                                    <form action="{{ route('user.review.update',$review->id ?? '') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                        <label for="display_name" class="form-label">{{ __('Display Name') }}</label>
                                        <input type="text" class="form-control @error('display_name') is-invalid @enderror" value="{{ old('display_name') ?? $review->display_name }}" name="display_name" id="display_name" required>
                                        @if($errors->has('display_name'))
                                        <span class="help-block text-danger">{{ $errors->first('display_name') }}</span>
                                        @endif
                                        </div>
                                        <div class="mb-3">
                                        <label for="display_title" class="form-label">{{ __('Display Title') }}</label>
                                        <input type="text" class="form-control @error('display_title') is-invalid @enderror" value="{{ old('display_title') ?? $review->display_title }}" name="display_title" id="display_title" required>
                                        @if($errors->has('display_title'))
                                        <span class="help-block text-danger">{{ $errors->first('display_title') }}</span>
                                        @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="details" class="form-label">{{ __('Review') }}</label>
                                            <textarea class="form-control @error('details') is-invalid @enderror" name="details"  id="details" style="height: 120px !important;" required>{{ old('details') ?? $review->details }}</textarea>
                                            @if($errors->has('details'))
                                            <span class="help-block text-danger">{{ $errors->first('details') }}</span>
                                        @endif
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom_js')
    <script>
        $(document).ready(function(){
            $('.edit_review').on('click', function(){
                $('.edit_review').fadeOut()
                $('.show_form').fadeIn()
            });
        });
    </script>
@endpush