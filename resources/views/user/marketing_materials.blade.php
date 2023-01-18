@extends('user.layouts.app')

@section('title') {{ __('Marketing Materials') }}  @endsection

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
                    <h1 class="m-0">{{ __('Marketing Materials') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                <p>Coming soon.....</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('custom_js')

@endpush
