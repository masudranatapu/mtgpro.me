@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('email-template', 'active')

@push('css')
@endpush

@section('title')
    {{ __('Email Template Sort Code Documents') }}
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col">
                                    <div class="float-left">
                                        {{ __('Email Template Sort Code Documents') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.email.template') }}"
                                            class="btn btn-primary">{{ __('Email Templates') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-2 py-2">
                                    <table id="dataTable" class="table table-vcenter card-table" id="table-plan">
                                        <thead>
                                            <tr>
                                                <th>{{ __('SL.No') }}</th>
                                                <th>{{ __('Tag') }}</th>
                                                <th>{{ __('discription') }}</th>
                                                <th>{{ __('Email Trmplate') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($sort_codes as $sort_code)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{!! $sort_code->tags !!}</td>
                                                    <td>{!! $sort_code->discription ?? '' !!}</td>
                                                    <td>{!! $sort_code->hasEmailTEmplate->type ?? '' !!}</td>
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

@push('scripts')

@endpush
