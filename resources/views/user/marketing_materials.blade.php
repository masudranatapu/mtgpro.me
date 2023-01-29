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
        .custom_table{
            background: rgb(255, 255, 255);
            padding: 30px;
            border-radius: 16px;
        }
        .custom_image {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 85px;
            height: 80px;
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

@section('marketing_metarials','active')

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
                <div class="col-sm-12">
                    <div class="card-body custom_table">
                            <div class="px-2 py-2">
                                <table id="dataTable" class="table table-vcenter card-table table-responsive" id="table-plan">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Title') }}</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('PDF') }}</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @if (!empty($marketing_materials) && $marketing_materials->count())

                                            @foreach ($marketing_materials as $key => $value)
                                              
                                                <tr>
                                                    <td>{{ $marketing_materials->firstItem() + $key}}</td>
                                                    <td> <a href="{{ route('user.marketing.materials.details',$value->id)}}" style="color:black">{{ $value->title}}</a> </td>
                                                    <td>
                                                        <img class="custom_image" src="{{ $value->image}}" alt="Paris">
                                                    </td>
                                                    <td>
                                                        @if ($value->file)
                                                            <a class="" href="{{$value->file}}" download><i class="fa-solid fa-arrow-down"></i> Download</a>
                                                        @endif
                                                    </td>
                                              </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                               <div>
                                 <center>
                                    {{$marketing_materials->links() }}
                                </center>
                               </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom_js')

@endpush
