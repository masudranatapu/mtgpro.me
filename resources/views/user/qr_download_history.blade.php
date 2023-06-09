@extends('user.layouts.app')
@section('title') {{ __('Instghts') }} @endsection
@section('Qr Download History', 'active')

@push('custom_css')
    <style>
        .pagination .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #bdbdbd;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .pagination .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #bdbdbd;
            border-color: #bdbdbd;
        }

        .qr_view_table table {
            min-width: 960px;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-between align-items-center">
                        <h1 class="m-0">{{ __('Qr Download History') }}</h1>
                        <a class="btn btn-primary" href="{{ route('user.insights') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content dashboard_item">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body qr_view_table">
                        <div class="table-responsive">

                            <table class="table table-bordered text-center">
                                <thead>

                                    <tr>
                                        <th>{{ __('Sl') }}</th>
                                        <th>{{ __('Card Title') }}</th>
                                        <th>{{ __('Number Of Visits') }}</th>
                                        {{-- <th>{{ __('Device Id') }}</th> --}}
                                        <th>{{ __('Ip Address') }}</th>
                                        <th>{{ __('User Agent') }}</th>
                                        <th>{{ __('Address') }}</th>
                                        {{-- <th>{{ __('Number Of Visits') }}</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($histories as $history)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $history->hasCard->card_for ?? '' }}</td>
                                            <td>{{ $history->counter }}</td>
                                            {{-- <td>{{ $history->device_id ?? '' }}</td> --}}
                                            <td>{{ $history->ip_address ?? '' }}</td>
                                            <td>{{ $history->user_agent ?? '' }}</td>
                                            <td>{{ $history->city ? $history->city . ' ,' : '' }}
                                                {{ $history->country_name ?? '' }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <div class="mt-2 d-flex justify-content-center">
                            {{ $histories->links() }}
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
