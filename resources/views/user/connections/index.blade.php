@extends('user.layouts.app')
@section('title') {{ __('My Connections') }}  @endsection
@push('custom_css')
<style>
</style>
@endpush
<?php
$rows = $data ?? [];
$tabindex  = 1;
?>
@section('connections','active')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1 class="m-0">{{ __('Connections') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="custome_table table-responsive">
                        @if (!empty($rows) && count($rows) > 0)
                        <table class="table " id="connections">
                            <thead>
                                <tr>
                                    <th class="text-left">
                                        <label for="select_all" class="mr-3 select_checkbox">
                                            <input type="checkbox" id="select_all" name="select_all">
                                            {{ _('Select All') }}
                                        </label>
                                        {{ _('Connection') }}
                                    </th>
                                    <th>{{ _('Connected with') }}</th>
                                    <th>{{ _('Date') }}</th>
                                    <th>{{ _('Export') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $row)
                                    <tr>
                                        <td class="text-left align-items-center">
                                            <div class="check-primary d-inline float-left mt-3 mr-3">
                                                <input type="checkbox" id="radioPrimary1" name="select_all" class="form-control" value="{{ $row->id }}">
                                                <label for="radioPrimary1"></label>
                                            </div>
                                            <div class="d-inline float-left">
                                                <a href="{{ route('user.connections.details',[$row->email,$row->id]) }}" class="text-dark">
                                                    <div class="media position-relative align-items-center">
                                                        <img src="{{ getProfile($row->user_image) }}" width="50" class="rounded-circle mr-2 bg-light p-1" alt="{{ $row->name }}" width="80">
                                                        <div class="media-body">
                                                            <h6 class="m-0">{{ $row->name }}</h6>
                                                            <span>{{ $row->email }}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ getProfile($row->profile_image) }}" width="42" class="img-circle mr-2" alt="{{ $row->name }}" title="{{ $row->name }}">
                                        </td>
                                        <td class="text-center">{{ date('M d, Y', strtotime($row->created_at)) }} </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('assets/img/icon/tripledot.svg') }}" alt="{{ _('Export') }}">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#">{{ _('Export to csv') }}</a>
                                                    <a class="dropdown-item" href="{{ route('user.connections.details',[$row->email,$row->id]) }}">{{ _('View Connection') }}</a>
                                                    <a class="dropdown-item" href="{{ route('user.connections.download',$row->id) }}">{{ _('Save as contact') }}</a>
                                                    <a class="dropdown-item" href="javascript::void(0)" data-toggle="modal" data-target="#connectMail">{{ _('Send mail') }}</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center">{{ __('Connection not found') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@if (!empty($rows) && count($rows) > 0)
    @include('user.connections._send_mail_modal')
@endif
@endsection
@push('custom_js')
<script>
</script>
@endpush
