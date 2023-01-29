@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('porducts', 'active')
@section('title'){{ __('Product List') }} @endsection
@section('page-name') {{ __('Product List') }} @endsection
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
                                        {{ __('Product List') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.product.create') }}"
                                            class="btn btn-primary">{{ __('Create New') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive px-2 py-2">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5%">{{ __('SL') }}</th>
                                            <th width="30%">{{ __('Title') }}</th>
                                            <th width="10%">{{ __('Product Type') }}</th>
                                            <th width="10%">{{ __('Regular Price') }}</th>
                                            <th width="10%">{{ __('Product Price') }}</th>
                                            <th width="10%">{{ __('Is active') }}</th>
                                            <th width="10%">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($product) && count($product) > 0)
                                            @foreach ($product as $key => $row)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td style="vertical-align: middle">
                                                        <img class=" float-start" width="50px"
                                                            src="{{ getPhoto($row->thumbnail) }}" alt="">

                                                        <span>
                                                            <a
                                                                href="{{ route('product.details', $row->slug) }}"></a>{{ $row->product_name }}
                                                        </span>


                                                    </td>
                                                    <td>
                                                        @if ($row->product_type == +'1')
                                                            {{ __('Virtual') }}
                                                        @else
                                                            {{ __('Physical') }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ getPrice($row->unit_price_regular) }}
                                                    </td>
                                                    <td>
                                                        {{ getPrice($row->unit_price) }}
                                                    </td>
                                                    <td>
                                                        @if ($row->status)
                                                            {{ __('Yes') }}
                                                        @else
                                                            {{ __('No') }}
                                                        @endif
                                                    </td>

                                                    <td style="width: 150px;">
                                                        <a class="btn btn-info dropdown-toggle" href="#navbar-extra"
                                                            data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                                            <span class="nav-link-title">
                                                                {{ __('Action') }}
                                                            </span>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item btn-sm"
                                                                href="{{ route('admin.product.edit', ['product' => $row->id]) }}">{{ __('Edit') }}</a>
                                                            <a class="dropdown-item btn-sm"
                                                                onclick="productDelete({{ $row->id }})"
                                                                href="javascript:void(0)">{{ __('Delete') }}</a>

                                                            <form
                                                                action="{{ route('admin.product.delete', ['product' => $row->id]) }}"
                                                                id="delete_{{ $row->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>
                                                            <a class="dropdown-item btn-sm"
                                                                href="{{ route('admin.product.images', ['product' => $row->id]) }}">{{ __('Product Images') }}</a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="alert">
                                                <td colspan="7" class="text-center">{{ __('Data Not Found') }}</td>
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


    @push('scripts')
        <script>
            function productDelete(id) {
                console.log(id);
                $('#delete_' + id).submit()
            }
        </script>
    @endpush
@endsection
