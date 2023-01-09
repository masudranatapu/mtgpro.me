@extends('user.layouts.app')
@section('title') {{ __('My Cards') }}  @endsection
 @push('custom_css')
<style>
  .card-status input[type=checkbox]{
	height: 0;
	width: 0;
	visibility: hidden;
}

.card-status label {
    cursor: pointer;
    text-indent: -9999px;
    width: 50px;
    height: 22px;
    background: grey;
    display: block;
    border-radius: 100px;
    position: relative;
    /* overflow: hidden; */
}

.card-status label:after {
    content: '';
    position: absolute;
    top: 1px;
    left: 5px;
    width: 19px;
    height: 19px;
    background: #fff;
    border-radius: 90px;
    transition: 0.3s;
}
.card-status input:checked + label {
	background: #bada55;
}

.card-status input:checked + label:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
}

.card-status label:active:after {
	width: 50px;
}

</style>
@endpush
<?php
    $rows = $data ?? [];
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
                    <div class="col-md-8">
                        <div class="d-inline">
                            <button type="button" class="btn">{{ _('Refresh') }}</button>
                        </div>
                        <div class="d-inline">
                            <button type="button" class="btn">{{ _('Map') }}</button>
                        </div>
                        <div class="d-inline">
                            <input class="form-control" type="text" name="search" placeholder="Search name, email or company" id="search" style="width: 200px">
                        </div>
                        <div class="d-inline">
                            <input class="form-control" type="text" name="daterange" placeholder="YYYY-MM-DD - YYYY-MM-DD" id="daterange" style="width: 200px">
                        </div>
                        <div class="d-inline">
                            <button type="button" class="btn btn-dark"><img src="{{ asset('assets/img/icon/export.svg') }}" alt="{{ _('Export') }}"> {{ _('Export') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label for="">
                                                    <input class="form-control" type="checkbox" name="select_all"> {{ _('Select All') }}
                                                </label>
                                            </th>
                                            <th>{{ _('Connection') }}</th>
                                            <th>{{ _('Tag') }}</th>
                                            <th>{{ _('Connected with') }}</th>
                                            <th>{{ _('Type') }}</th>
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
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ date('M d, Y', strtotime($row->created_at)) }} </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/icon/export.svg') }}" alt="{{ _('Export') }}">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                      <a class="dropdown-item" href="#">Export to csv</a>
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
@endsection
@push('custom_js')
<script>
    $.ajaxSetup({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
    });
</script>
@endpush
