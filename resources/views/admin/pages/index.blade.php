@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('title') {{ __('Page List') }} @endsection
@section('page-name') {{ __('Page List') }} @endsection
@section('settings', 'active')
@section('page', 'active')
@section('content')
    <style>
        .page_wrapper {
            border: 1px solid #f6f6f6;
            border-radius: 6px;
            margin-top: 16px;
            padding-top: 9px;
        }
    </style>
    <div class="page-wrapper">
        {{--     <div class="container-xl">
        <!-- Page title -->
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
                                        {{ __('Pages') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">


                                <div class="table-responsive px-2 py-2">
                                    <table class="table table-vcenter card-table" id="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Page') }}</th>
                                                <th class="w-1">{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allPages as $page)
                                                <tr>
                                                    <td class="text-capitalize">{{ $page }}</td>
                                                    <td>
                                                        <div class="btn-list flex-nowrap">
                                                            <a class="btn btn-sm btn-primary"
                                                                href="{{ route('admin.edit.home', $page) }}">{{ __('Edit') }}</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
