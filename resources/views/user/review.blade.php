@extends('user.layouts.app')

@section('title') {{ __('My Cards') }}  @endsection

@push('custom_css')
    <style>
        .card {
            box-shadow: rgb(35 46 60 / 4%) 0 2px 4px 0;
            border: 1px solid rgba(101, 109, 119, .16);
            border-radius: 1px;
            background: #fff !important;
        }
        .profile_info h3 {
            font-size: 17px;
            font-weight: 600;
            font-family: 'Inter';
            margin: 0;
            color: #070707;
        }
        .profile_info span {
            color: #888888;
            font-size: 14px;
            font-family: 'Inter';
            font-weight: 400;
        }
        .divider {
            border-bottom: 1px dashed #DDD;
            position: relative;
            margin: 23px 0px;
        }
        .divider i {
            position: absolute;
            top: -12px;
            right: 0;
            left: 0;
            text-align: center;
            margin: 0 auto;
            font-size: 28px;
            background: #fff;
            width: 53px;
            color: orange;
        }
        /* .review_content p {
            margin: 0;
            font-size: 14px;
            text-align: justify;
            color: #5e5e5e;
            line-height: 26px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }
        .edit_review {
            position: absolute;
            top: 8px;
            right: 13px;
            cursor: pointer;
        }
        .edit_review i {
            color: #BBB;
            font-size: 19px;
            transition: all 0.3s ease;
        }


        .review_edit_form label {
            font-size: 14px;
            color: #3b3b3b;
            font-family: 'Poppins';
            font-weight: 400;
        }

        .review_edit_form .form-control {
            height: 44px;
            border: 1px solid #DDD;
            outline: none;
            box-shadow: none;
            border-radius: 3px;
        }
        .review_edit_form .btn {
            padding: 6px 33px;
            border-radius: 2px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 15px;
            border: none !important;
        }
        .status{
        margin: 20px;
        float: right;
        }
        .active{
            color: orange;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }
        .pending{
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        } */
    </style>
@endpush

@section('review','active')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Write a Review') }}</h1>
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
                                                        <img src="{{ getAvatar($review->user_image) }} " class="rounded-circle border" width="60" alt="image" class="img-fluid">
                                                    @else
                                                        <img src="{{ getProfile() }} " class="rounded-circle border" width="60" alt="image" class="img-fluid">
                                                    @endif
                                                </div>
                                                <div style="margin-left: 10px;" class="profile_info">
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
                                                    <p style="color: #ffc107" class="pending">{{__('Pending')}}</p>
                                                @else
                                                    <p style="color: #198754" class="active" >{{__('Active')}}</p>
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
                                    <form action="{{ route('user.review.store') }}" id="reviewForm" method="post">
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
                                        <textarea class="form-control @error('details') is-invalid @enderror" onkeyup="countChars(this);" name="details" id="details" style="height: 120px !important;" required>{{ old('details') }}</textarea>
                                        <p id="charNum"></p>
                                        @if($errors->has('details'))
                                            <span class="help-block text-danger">{{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                            <span class="btn-txt">{{ __('Save') }}</span>
                                        </button>
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
                                    <form action="{{ route('user.review.update',$review->id ?? '') }}" id="reviewForm" method="post">
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
                                            <button type="submit" class="btn btn-primary">
                                                <i class="loading-spinner fa-lg fas fa-spinner fa-spin"></i>
                                                <span class="btn-txt">{{ __('Update') }}</span>
                                            </button>
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
        $("#reviewForm").submit(function () {
            $(this).find(":submit").children(".loading-spinner").toggleClass('active');
            $(this).find(":submit").attr("disabled", true);
            $(this).find(":submit").children(".btn-txt").text("Processing");
            $("*").css("cursor", "wait");
        });
        $(document).ready(function(){
            $('.edit_review').on('click', function(){
                $('.edit_review').fadeOut()
                $('.show_form').fadeIn()
            });
        });

        function countChars(obj){
            var maxLength = 250;
            var strLength = obj.value.length;

            if(strLength > maxLength){
                document.getElementById("charNum").innerHTML = '<span style="color: red;">'+strLength+' out of '+maxLength+' characters</span>';
            }else{
                document.getElementById("charNum").innerHTML = '<span style="color: green;">'+strLength+' out of '+maxLength+' characters</span>';
            }

        }
    </script>
@endpush
