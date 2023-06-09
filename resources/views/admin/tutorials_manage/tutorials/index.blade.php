@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('title')
    Tutorials
@endsection

@section('tutorials', 'active')

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
                                        {{ __('Tutorials') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.tutorials.create') }}" class="btn btn-primary">
                                            {{ __('Add New') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive px-2 py-2">
                                    <table id="dataTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">SL</th>
                                                <th style="width: 15%">Image</th>
                                                <th style="width: 30%">Blog Title</th>
                                                <th style="width: 10%">Category</th>
                                                <th class="text-center" style="width: 15%">Publish Date</th>
                                                <th class="text-center" style="width: 15%">Status</th>
                                                <th class="text-center" style="width: 15%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($tutorials))
                                                @foreach ($tutorials as $key => $value)
                                                    <tr>
                                                        <td>
                                                            {{ ++$key }}
                                                        </td>
                                                        <td>
                                                            @if($value->file_type == 1)
                                                                <img src="@if(file_exists($value->file_url)) {{ asset($value->file_url) }} @else {{ asset('demoimage/tutorials.jpg') }}  @endif"
                                                                    class="rounded" alt="{{ $value->title }}" width="90">
                                                            @elseif($value->file_type == 2)
                                                                <a target="_blank" href="{{ asset($value->file_url) }}" title="View tutorials video">Tutorials Video</a>
                                                            @else
                                                                <a target="_blank" href="{{ asset($value->file_url) }}" title="View youtube tutorials video">Youtube tutorials video</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('tutorials.details', $value->slug) }}" target="_blank" title="Tutorials details">
                                                                {{ $value->title }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $value->TutorialCategory->title ?? '' }}</td>
                                                        <td class="text-center">{{ date('d-m-Y', strtotime($value->publish_date)) }}</td>
                                                        <td class="text-center">
                                                            {{ $value->status ? 'Publish' : 'Unpublish' }}
                                                        </td>
                                                        <td class="text-center" style="width: 15%">
                                                            <a style="min-width: 55px;" href="{{ route('admin.tutorials.edit', $value->id) }}"
                                                                class="btn btn-success btn-sm mb-1 mb-lg-0">
                                                                Edit
                                                            </a>
                                                            <a style="min-width: 55px;" href="{{ route('admin.tutorials.delete', $value->id) }}"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure!')">
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
