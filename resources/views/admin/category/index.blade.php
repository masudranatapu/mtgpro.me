@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('category','active')
@section('blogs','active')
@section('title') {{ __('Category List')}} @endsection
@section('content')
<div class="page-wrapper">
    {{-- <div class="container-xl">
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Categories') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('All Categories') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.category.create')}}" class="btn btn-primary">{{ __('Add New')}}</a>
                                </div>
                            </div>
                        </div>
                       <div class="card-body">
                        <div class="table-responsive px-2 py-2">

                            <table class="table table-vcenter card-table" id="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('SL.No') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th class="w-1">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as  $key=>$row)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $row->category_name }}</td>
                                        <td>{{ $row->category_slug }}</td>
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <a class="btn btn-primary btn-sm" href="{{ route('admin.category.edit',$row->id) }}">{{ __('Edit')}}</a>

                                                <a href="#" class="btn btn-danger btn-sm" onclick="deleteCategory('{{$row->id}}'); return false;">{{ __('Delete')}}</a>
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
    @include('admin.includes.footer')
</div>
<div class="modal modal-blur fade" id="DeleteCategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title text-danger text-capitalize">{{ __('WARNING!')}}</div>
                <div>{{ __('This action will remove Category data. It is not revertable action.')}}</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">{{ __('Cancel')}}</button>
                <a href="" class="btn btn-danger" id="delete_category_id">{{ __('Yes, proceed')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection
