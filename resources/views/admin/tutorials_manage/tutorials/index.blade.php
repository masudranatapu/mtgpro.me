@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('title')
    Tutorials
@endsection

@section('tutorials_manage', 'active')

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
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">SL</th>
                                                <th style="width: 15%">Image</th>
                                                <th style="width: 30%">Blog Title</th>
                                                <th style="width: 10%">Category</th>
                                                <th style="width: 15%">Publish Date</th>
                                                <th style="width: 15%">Status</th>
                                                <th style="width: 20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($tutorials))
                                                @foreach ($tutorials as $key => $value)
                                                    <tr>
                                                        <td>
                                                            {{ ++$key }}
                                                        </td>
                                                        <td class="text-center">
                                                            <img src="@if(file_exists($value->banner_image)) {{ asset($value->banner_image) }} @else {{ asset('demoimage/tutorials.jpg') }}  @endif"
                                                                class="rounded" alt="{{ $value->title }}" width="90">
                                                        </td>
                                                        <td>
                                                            <a href="" title="Tutorials details">
                                                                {{ $value->title }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $value->TutorialCategory->title ?? '' }}</td>
                                                        <td>{{ date('d-m-Y', strtotime($value->publish_date)) }}</td>
                                                        <td>
                                                            {{ $value->status ? 'Publish' : 'Unpublish' }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.tutorials.edit', $value->id) }}"
                                                                class="btn btn-success btn-sm">
                                                                {{-- <i class="la la-edit"></i> --}}
                                                                Edit
                                                            </a>
                                                            <a href="{{ route('admin.tutorials.delete', $value->id) }}"
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
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
