@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('title') Transection List @endsection
@section('settings', 'active')
@section('transaction', 'active')
@section('content')
<div class="page-wrapper">
    <div class="container-xl mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col">
                        <div class="float-left">
                            {{ __('Transactions') }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive px-2 py-2">
                        <table class="table card-table table-vcenter text-nowrap datatable" id="dataTable">
                            <thead>
                                <tr>
                                    <th>{{ __('Transaction Date') }}</th>
                                    <th>{{ __('Payment Trans ID') }}</th>
                                    <th>{{ __('Customer Name') }}</th>
                                    <th>{{ __('Gateway Name') }}</th>
                                    <th>{{ __('Amount') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    {{-- <th>{{ __('Actions') }}</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($transactions) && $transactions->count())
                                @foreach ($transactions as $row)
                                <tr>
                                    <td>{{ $row->created_at->format('M d, Y h:i:s A') }}</td>

                                    <td>
                                        @if($row->user_id != $row->created_by)
                                        By Admin
                                        @else
                                        {{ $row->transaction_id }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.view.user', $row->user_id)}}">
                                            {{ $row->userName }}
                                        </a>


                                    </td>
                                    <td>
                                        {{ $row->payment_gateway_name }}
                                    </td>
                                    <td>
                                        {{ $row->transaction_currency }} {{ $row->transaction_amount }}
                                    </td>
                                    <td>
                                        @if ($row->payment_status == 'SUCCESS' || $row->payment_status == 'Success')
                                        <span class="badge bg-green">{{ __('Paid') }}</span>
                                        @endif
                                        @if ($row->payment_status == 'FAILED')
                                        <span class="badge bg-red">{{ __('Failed') }}</span>
                                        @endif
                                        @if ($row->payment_status == 'PENDING')
                                        <span class="badge bg-orange">{{ __('Pending') }}</span>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        <div class="btn-list flex-nowrap">
                                            @if ($row->payment_status == "SUCCESS")
                                            <a class="btn btn-primary btn-sm" target="_blank"
                                            href="{{ route('admin.view.invoice', ['id' => $row->id])}}">{{ __('Invoice') }}</a>
                                            @endif
                                            @if ($row->payment_status != "PENDING")
                                            <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.trans.status', ['id' => $row->id, 'status' => 'PENDING'])}}">{{ __('Pending') }}</a>
                                            @endif
                                            @if ($row->payment_status != "SUCCESS")
                                            <a class="btn btn-primary btn-sm" href="#"
                                            onclick="getTransaction('{{ $row->id }}'); return false;">{{ __('Success') }}</a>
                                            @endif
                                            @if ($row->payment_status != "FAILED")
                                            <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.trans.status', ['id' => $row->id, 'status' => 'FAILED'])}}">{{ __('Failed') }}</a>
                                            @endif
                                        </div>
                                    </td> --}}
                                </tr>
                                @endforeach
                                @else
                                <tr class="text-center font-weight-bold">
                                    <td colspan="7">{{ __('No Transactions Found.') }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.footer')
</div>
<div class="modal modal-blur fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">{{ __('Are you sure?')}}</div>
                <div>{{ __('If you proceed with this transaction, you will have payment status success this plan.')}}</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto"
                data-bs-dismiss="modal">{{ __('Cancel')}}</button>
                <a class="btn btn-danger" id="transaction_id">{{ __('Yes, proceed')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection
