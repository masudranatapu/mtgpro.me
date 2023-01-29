@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('porducts', 'active')
@section('title'){{ __('Product Create') }} @endsection
@section('page-name') {{ __('Product Create') }} @endsection
@push('css')
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
                                        {{ __('Product Add') }}
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
                                <form action="{{ route('admin.product.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-ml-12 col-lg-12 col-xl-12 mb-2">
                                            <div class="input-field">
                                                <img src="{{ asset('assets/img/no-image.jpg') }}" id="image"
                                                    width="100px" onclick="pro()" ;>
                                                <input required type="file" name="images" id="file"
                                                    onchange="fileView()" style="display: none">
                                            </div>
                                            <label for="images">Thumbnail Images <small>(Preferred size 600X600 px)</small> </label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-ml-6 col-lg-6 col-xl-6">
                                            <div class="form-group m-1">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input required type="text" name="name" id="name"
                                                    class="form-control @error('name') border-danger @enderror"
                                                    value="{{ old('name') }}" />
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-ml-6 col-lg-6 col-xl-6">
                                            <div class="form-group m-1">
                                                <label for="price">{{ __('Unit Price') }}</label>
                                                <input required type="number" name="price" id="price"
                                                    class="form-control @error('price') border-danger @enderror"
                                                    value="{{ old('price') }}" />
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-ml-6 col-lg-6 col-xl-6">
                                            <div class="form-group m-1">
                                                <label for="regular_price">{{ __('Regular Price') }}</label>
                                                <input required type="number" name="regular_price" id="regular_price"
                                                    class="form-control @error('regular_price') border-danger @enderror"
                                                    value="{{ old('regular_price') }}" />
                                                @error('regular_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-ml-6 col-lg-6 col-xl-6">
                                            <div class="form-group m-1">
                                                <label for="product_type">{{ __('Type') }}</label>
                                                <select required name="product_type"
                                                    class="form-control @error('product_type') border-danger @enderror"
                                                    id="product_type">
                                                    <option class="d-none" value="">Select Product Type</option>
                                                    <option @if (old('product_type') == 1) selected @endif
                                                        value="1">Virtual
                                                    </option>
                                                    <option @if (old('product_type') == 2) selected @endif
                                                        value="2">
                                                        Physical</option>

                                                </select>
                                                @error('product_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-ml-6 col-lg-6 col-xl-6">
                                            <div class="form-group m-1">
                                                <label for="product_status">{{ __('Status') }}</label>
                                                <select required name="product_status"
                                                    class="form-control @error('product_status') border-danger @enderror"
                                                    id="product_status">
                                                    <option class="d-none" value="">Select Product status</option>
                                                    <option value="1">Publish</option>
                                                    <option value="0">Draft</option>

                                                </select>
                                                @error('product_status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-ml-12 col-lg-12 col-xl-12 mt-3">
                                            <div class="input-field">
                                                <label class="active">Details</label>
                                                <textarea required name="details" id="details" cols="25" rows="8"
                                                    class="form-control @error('details') border-danger @enderror">{{ old('details') }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            function fileView() {
                var imgInp = document.getElementById('file');
                var blah = document.getElementById('image');
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }

            function pro() {
                document.getElementById("file").click();
            }
        </script>
    @endpush
@endsection
