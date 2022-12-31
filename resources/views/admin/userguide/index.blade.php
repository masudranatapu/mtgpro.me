@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('guide', 'active')
@section('content')
<div class="page-wrapper">
    {{--
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('User Guides') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.user.guide.create')}}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('User Guides') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.user.guide.create')}}" class="btn btn-primary">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive px-2 py-2">
                                <table class="table table-vcenter card-table" id="table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL.No') }}</th>
                                            <th>{{ __('Title') }}</th>
                                            <th>{{ __('Description') }}</th>
                                            <th class="w-1">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key=> $row)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>{!! $row->description !!}</td>
                                            <td>
                                                <div class="btn-list flex-nowrap">
                                                    <a href="{{ route('admin.user.guide.view', $row->id) }}" class="btn btn-secondary btn-sm">View</a>
                                                    <a href="{{ route('admin.user.guide.edit', $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="#" onclick="deleteUserGuide('{{ $row->id }}'); return false;" class="btn btn-danger btn-sm">Delete</a>
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
    <div class="modal modal-blur fade" id="UserGuideModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title text-danger text-capitalize">{{ __('WARNING!')}}</div>
                    <div>{{ __('This action will remove data. It is not revertable action.')}}</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">{{ __('Cancel')}}</button>
                    <a href="" class="btn btn-danger" id="delete_post_id">{{ __('Yes, proceed')}}</a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.footer')
</div>
@endsection
