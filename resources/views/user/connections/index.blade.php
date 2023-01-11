@extends('user.layouts.app')
@section('title') {{ __('My Connections') }} @endsection
@push('custom_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>
    </style>
@endpush
<?php
$rows = $data ?? [];
$tabindex = 1;
$form_date = '';
$to_date = '';
$daterange = request()->get('daterange') ?? '';
if (!empty($daterange)) {
    $date = explode(' - ', $daterange);
    $form_date = trim($date[0]);
    $to_date = trim($date[1]);
}
?>

<style>
    .form-inline .form-control {
        height: 50px;
        border: none;
        background: #fff;
        border-radius: 50px;
        font-size: 14px;
        width: 100%;
        margin-top: 19px;
        padding: 0px 33px;
    }
</style>

@section('connections', 'active')
@section('content')
    <div class="content-wrapper">

        <div class="content">
            <div class="container-fluid">
                <div class="row content-header align-items-center" style="padding-left: 0 !important;">
                    <div class="col-sm-3">
                        <h1 class="m-0">{{ __('Connections') }}</h1>
                    </div>
                    <div class="col-md-9">
                        <form action="{{ route('user.connections') }}" method="get" class="form-inline float-right">
                            <a href="{{ route('user.connections') }}" class="btn btn-secondary mr-3">{{ __('Refresh') }}</a>
                            <div class="mb-3 mr-3">
                                <input type="tel" name="search" id="search" value=""
                                    class="form-control @error('search') is-invalid @enderror"
                                    placeholder="{{ __('Search name, email,company') }}" tabindex="{{ $tabindex++ }}">
                                @if ($errors->has('search'))
                                    <span class="help-block text-danger">{{ $errors->first('search') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 mr-3">
                                <input type="text" name="daterange" id="daterangepicker" value="{{ $daterange }}"
                                    class="form-control @error('daterange') is-invalid @enderror"
                                    placeholder="{{ $_by_date ?? 'MM/DD/YYYY - MM/DD/YYYY' }}"
                                    tabindex="{{ $tabindex++ }}">
                                @if ($errors->has('daterange'))
                                    <span class="help-block text-danger">{{ $errors->first('daterange') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-secondary mr-3">{{ __('Search') }}</button>

                            <div class="btn-group" role="group">
                                <button id="exportBtn" type="button" class="btn btn-primary dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('assets/img/icon/export.svg') }}" alt="">
                                    {{ __('Export') }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="exportBtn">
                                    <a class="dropdown-item export_csv"
                                        href="javascript:void(0)">{{ _('Export to csv') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="custome_table table-responsive">
                            <form action="{{ route('user.connections.bulk-export') }}" method="post" id="bulk_export_form">
                                @csrf
                                @if (!empty($rows) && count($rows) > 0)
                                    <table class="table " id="connections">
                                        <thead>
                                            <tr>
                                                <th class="text-left">
                                                    <label for="select_all" class="mr-3 select_checkbox">
                                                        <input type="checkbox" id="select_all">
                                                        {{ _('Select All') }}
                                                    </label>
                                                    {{ _('Connection') }}
                                                </th>
                                                <th>{{ _('Connected with') }}</th>
                                                <th>{{ _('Date') }}</th>
                                                <th>{{ _('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rows as $row)
                                                <tr>
                                                    <td class="text-left align-items-center">
                                                        <div class="check-primary d-inline float-left mt-3 mr-3">
                                                            <input type="checkbox" id="radioPrimary1" name="connect_id[]"
                                                                class="form-control connect_id"
                                                                value="{{ $row->id }}">
                                                            <label for="radioPrimary1"></label>
                                                        </div>
                                                        <div class="d-inline float-left">
                                                            <a href="{{ route('user.connections.details', [$row->email, $row->id]) }}"
                                                                class="text-dark">
                                                                <div class="media position-relative align-items-center">
                                                                    <img src="{{ getProfile($row->user_image) }}"
                                                                        width="50"
                                                                        class="rounded-circle mr-2 bg-light p-1"
                                                                        alt="{{ $row->name }}" width="80">
                                                                    <div class="media-body">
                                                                        <h6 class="m-0">{{ $row->name }}</h6>
                                                                        <span>{{ $row->email }}</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <img src="{{ getProfile($row->profile_image) }}" width="42"
                                                            class="img-circle mr-2" alt="{{ $row->name }}"
                                                            title="{{ $row->name }}">
                                                    </td>
                                                    <td class="text-center">
                                                        {{ date('M d, Y', strtotime($row->created_at)) }} </td>
                                                    <td class="text-center">
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button"
                                                                class="btn dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('assets/img/icon/tripledot.svg') }}"
                                                                    alt="{{ _('Export') }}">
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                {{-- <a class="dropdown-item" href="#">{{ _('Export to csv') }}</a> --}}
                                                                <a class="dropdown-item"
                                                                    href="{{ route('user.connections.details', [$row->email, $row->id]) }}">{{ _('View Connection') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('user.connections.download', $row->id) }}">{{ _('Save as contact') }}</a>
                                                                <a class="dropdown-item" href="javascript::void(0)"
                                                                    data-toggle="modal"
                                                                    data-target="#connectMail">{{ _('Send mail') }}</a>
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
                            </form>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#daterangepicker span').html(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
            }
            $('#daterangepicker').daterangepicker({
                autoUpdateInput: false,
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
            }, cb);
            cb(start, end);

            $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format(
                    'MM/DD/YYYY'));
            });

            $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

        });

        $(document).ready(function() {
            $("#select_all").change(function() {
                if (this.checked) {
                    $(".connect_id").each(function() {
                        this.checked = true;
                    });
                } else {
                    $(".connect_id").each(function() {
                        this.checked = false;
                    });
                }
            });

            $(".connect_id").click(function() {
                if ($(this).is(":checked")) {
                    var isAllChecked = 0;

                    $(".connect_id").each(function() {
                        if (!this.checked)
                            isAllChecked = 1;
                    });

                    if (isAllChecked == 0) {
                        $("#select_all").prop("checked", true);
                    }
                } else {
                    $("#select_all").prop("checked", false);
                }
            });
        });

        $(".export_csv").click(function(event) {
            $("#bulk_export_form").submit();

        });

        $(document).on('submit', "#bulk_export_form", function(e) {
            e.preventDefault();
            var form = $("#bulk_export_form");
            $.ajax({
                type: 'post',
                data: form.serialize(),
                url: form.attr('action'),
                async: true,
                beforeSend: function() {
                    $("body").css("cursor", "progress");
                },
                success: function(response) {
                    if (response.status == 1) {
                        // toastr.success(response.msg);
                        $('#bulk_export_form')[0].reset();
                        window.location.href = response.redirect_url;
                    } else {
                        // toastr.error(response.msg);
                    }
                },
                error: function(jqXHR, exception) {
                    toastr.error('Something wrong');
                },
                complete: function(response) {
                    $("body").css("cursor", "default");
                }
            });
        });
    </script>
@endpush
