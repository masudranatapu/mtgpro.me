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
                            <div class="table-responsive">
                                <table class="table" id="connections">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label for="">
                                                    <input class="form-control" type="checkbox" name="select_all"> {{ _('Select All') }}
                                                </label>
                                            </th>
                                            <th>{{ _('Connection') }}</th>
                                            <th>{{ _('Connected with') }}</th>
                                            <th>{{ _('Date') }}</th>
                                            <th>{{ _('Export') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rows as $row)
                                        <tr>
                                            <td>
                                                <input class="form-control" type="checkbox" name="select_all" value="{{ $row->id }}">
                                            </td>
                                            <td>
                                                <a href="{{ route('user.connections.details',[$row->email,$row->id]) }}">
                                                    <img src="{{ getProfile() }}" alt="{{ $row->name }}" width="80">
                                                    {{ $row->name }}<br>
                                                    {{ $row->email }}
                                                </a>
                                            </td>
                                            <td>
                                                <img src="{{ getProfile($row->profile_image) }}" width="50" class="img-circle mr-2" alt="{{ $row->name }}" title="{{ $row->name }}">
                                            </td>
                                            <td>{{ date('M d, Y', strtotime($row->created_at)) }} </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/icon/tripledot.svg') }}" alt="{{ _('Export') }}">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                      <a class="dropdown-item" href="#">{{ _('Export to csv') }}</a>
                                                      <a class="dropdown-item" href="{{ route('user.connections.edit',$row->id) }}">{{ _('Edit Connection') }}</a>
                                                      <a class="dropdown-item" href="{{ route('user.connections.download',$row->id) }}">{{ _('Save as contact') }}</a>
                                                      <a class="dropdown-item" href="javascript::void(0)" data-toggle="modal" data-target="#connectMail">{{ _('Send mail') }}</a>
                                                    </div>
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
    @include('user.connections._send_mail_modal')

@endsection
@push('custom_js')
<script>
</script>
@endpush
