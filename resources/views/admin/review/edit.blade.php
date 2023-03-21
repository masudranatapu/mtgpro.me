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
                                <form action="{{ route('admin.review.update',$review->id) }}" id="reviewForm" method="post">
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
                                        <textarea class="form-control @error('details') is-invalid @enderror" name="details" onkeyup="countChars(this);"  id="details" style="height: 120px !important;" required>{{ old('details') ?? $review->details }}</textarea>
                                        <p id="charNum"></p>
                                        @if($errors->has('details'))
                                            <span class="help-block text-danger">{{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="display_title" class="form-label">{{ __('Status') }}</label>
                                            <select id="my-select" class="form-control" name="status">
                                                <option value="1" {{ $review->id==1 ? 'selected':''  }}>Yes</option>
                                                <option value="0" {{ $review->id==0 ? 'selected':''  }}>No</option>
                                            </select>
                                        @if($errors->has('status'))
                                        <span class="help-block text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="order_id" class="form-label">{{ __('Order id') }}</label>
                                        <input type="text" class="form-control @error('order_id') is-invalid @enderror" value="{{ old('order_id') ?? $review->order_id }}" name="order_id" id="order_id" required>
                                        @if($errors->has('order_id'))
                                        <span class="help-block text-danger">{{ $errors->first('order_id') }}</span>
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
@endpush
