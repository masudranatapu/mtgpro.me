@extends('user.layouts.app')
@section('user_transactions', 'active')
@section('title') {{ __('Contact') }} @endsection

@push('custom_css')
    <style>
    </style>
@endpush

@php
    $rows = $transaction ?? [];
@endphp
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Transactions') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="setting_sec section mt-4 mb-5 min_height">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-body table-responsive">
                                    <table id="dataTable" class="table table-border">
                                        <thead>
                                            <tr>
                                                <th>{{ __('No') }}</th>
                                                <th>{{ __('Transaction Date') }}</th>
                                                <th>{{ __('Invoice ID') }}</th>
                                                <th>{{ __('Payment Mode') }}</th>
                                                <th>{{ __('Amount') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                {{-- <th>{{ __('Actions') }}</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($rows) && count($rows) > 0)
                                                @foreach ($rows as $key => $row)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            {{ $row->transaction_date->format('M d, Y h:i:s A') }}
                                                        </td>
                                                        <td>{{ $row->invoice_number }}</td>
                                                        <td>{{ $row->desciption }}</td>
                                                        <td class="text-right">
                                                            {{ $row->transaction_currency }}&nbsp;{{ CurrencyFormat($row->transaction_amount, 2) }}
                                                        </td>
                                                        <td><span class="badge text-bg-success">{{ __('Paid') }}</span>
                                                        </td>
                                                        {{-- <td>
                                                            <a class="btn btn-primary btn-sm text-white" target="_blank"
                                                                href="{{ route('user.planinvoice', $row->invoice_number) }}"
                                                                title="{{ __('Invoice') }}">
                                                                {{ __('View') }}
                                                            </a>
                                                            <a class="btn btn-primary btn-sm text-white"
                                                                href="{{ route('user.invoice.download', $row->invoice_number) }}">
                                                                {{ __('Download') }}
                                                                <img src="{{ asset('assets/img/icon/download.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </td> --}}
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="8" class="text-center text-warning">
                                                        {{ __('Data not found') }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    {{ $rows->links() }}
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
