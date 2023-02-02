@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('porducts', 'active')
@section('title'){{ __('Product Images') }} @endsection
@section('page-name') {{ __('Product Images') }} @endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/image-uploder.css') }}">
@endpush
<?php
$rows = $data ?? [];
?>

@section('content')
    <div class="page-wrapper">
        {{--     <div class="container-xl">
        <div class="page-header d-print-none mt-2">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                        {{ __('Faqs') }}
                    </h2>
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
                                        {{ __('Product Image') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.product.index') }}"
                                            class="btn btn-primary">{{ __('Back') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('admin.product.images.upload', ['product' => $product->id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 col-sm-12 col-ml-12 col-lg-12 col-xl-12 mb-2">
                                        <div class="input-field">
                                            <label class="active">Photos</label>
                                            <div class="input-images-1" style="padding-top: .5rem;"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-ml-12 col-lg-12 col-xl-12 mb-2 text-center">
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                </form>



                                <div class="table-responsive px-2 py-2">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="5%">{{ __('SL') }}</th>
                                                <th width="30%">{{ __('Images') }}</th>
                                                <th width="30%">{{ __('Procuct Title') }}</th>
                                                <th width="10%">{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($product->hasImages) && count($product->hasImages) > 0)
                                                @foreach ($product->hasImages as $key => $row)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td style="vertical-align: middle">
                                                            <img class=" float-start" width="50px"
                                                                src="{{ getPhoto($row->image_name) }}" alt="">

                                                        </td>
                                                        <td>
                                                            {{ $product->product_name }}
                                                        </td>
                                                        <td style="width: 150px;">


                                                            <a class="btn btn-sm btn-warning"
                                                                onclick="productDelete({{ $row->id }})"
                                                                href="javascript:void(0)">{{ __('Delete') }}</a>

                                                            <form
                                                                action="{{ route('admin.product.images.delete', ['productImage' => $row->id]) }}"
                                                                id="delete_{{ $row->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>


                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr class="alert">
                                                    <td colspan="4">{{ __('Data Not Found') }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/image-uploder.js') }}"></script>
        <script>
            $('.input-images-1').imageUploader();

            function productDelete(id) {
                console.log(id);
                $('#delete_' + id).submit()
            }
        </script>
    @endpush
@endsection
