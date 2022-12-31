@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('title') {{ __('Subscriber List')}} @endsection
@section('subscribers', 'active')
@section('content')
<div class="page-wrapper">
    {{--
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Subscribers') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Subscribers') }}
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive px-2 py-2">
                                <table id="dataTable" class="table table-vcenter card-table" id="table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Date') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscriber as $key=>$row)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{ date('d F , Y'), strtotime($row->created_at) }}</td>
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
