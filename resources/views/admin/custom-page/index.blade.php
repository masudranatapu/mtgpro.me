@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')
@section('custom_page_list','active')
@section('title') {{ __('Custom Page List')}} @endsection
@section('page-name') {{ __('Custom Page List')}} @endsection
<?php
$rows = $data ?? [];
?>
@section('content')
<div class="page-wrapper">
    {{--     <div class="container-xl">
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Pages') }}
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
                                    {{ __('Custome Pages') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.custom-page.create')}}" class="btn btn-primary">{{ __('Add New')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive px-2 py-2">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL')}}</th>
                                            <th>{{ __('Title')}}</th>
                                            <th>{{ __('Link')}}</th>
                                            <th>{{ __('Position')}}</th>
                                            <th>{{ __('Is active')}}</th>
                                            <th>{{ __('Order Id')}}</th>
                                            <th>{{ __('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($rows) && count($rows)>0)
                                        @foreach($rows as $key=>$row)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>{{ $row->url_slug }}</td>
                                            <td>{{ Str::ucfirst($row->position)  }}</td>
                                            <td>
                                                @if ($row->is_active)
                                                {{ __('Yes')}}
                                                @endif
                                            </td>
                                            <td>{{ $row->order_id }}</td>
                                            <td style="width: 150px;">
                                                {{-- <a href="{{ route('admin.custom-page.view', [$row->id]) }}" class="btn btn-sm btn-success" title="EDIT"><i class="la la-edit"></i> View</a> --}}
                                                <a href="{{ route('admin.custom-page.edit', [$row->id]) }}" class="btn btn-sm btn-info" title="EDIT"><i class="la la-edit"></i> {{ __('Edit')}}</a>
                                                <a href="{{ route('admin.custom-page.delete', [$row->id]) }}" class="btn btn-sm btn-danger " onclick="return confirm('Are you sure you want to delete?')" title="DELETE"><i class="la la-trash"></i> {{ __('Delete')}}</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="alert">
                                            <td rowspan="5">{{ __('Data Not Found')}}</td>
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
@push('custom_js')
<script src="{{ asset('assets/js/toastr.min.js')}}"></script>
@endpush
@endsection
