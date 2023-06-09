@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('title') Social Icon List @endsection
@section('settings','active')
@section('social_icon','active')
@section('content')
<div class="page-wrapper">
    {{-- <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Social Icon') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.social-icon.create')}}" class="btn btn-primary">{{ __('Add Social Icon')}}</a>
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
                                    {{ __('Social Icon') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.social-icon.create')}}" class="btn btn-primary">{{ __('Add Social Icon')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive px-2 py-2">
                                <table id="dataTable" class="table table-vcenter card-table" id="table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL.No') }}</th>
                                            <th>{{ __('Icon Group') }}</th>
                                            <th>{{ __('Icon Image') }}</th>
                                            <th>{{ __('Icon Name') }}</th>
                                            <th>{{ __('Icon Type') }}</th>
                                            <th>{{ __('Icon Title') }}</th>
                                            <th>{{ __('Example') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Paid Status') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($socileicons as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$item->icon_group}}</td>
                                                <td>
                                                    <img style="background: {{ $item->icon_color }}" src="{{ asset($item->icon_image) }}" width="35" alt="icon image">
                                                </td>
                                                <td>{{$item->icon_name}}</td>
                                                <td>
                                                    {{ $item->type }}
                                                    @if($item->type == 'username')
                                                    <div>{{ $item->main_link }}</div>
                                                    @endif

                                                </td>
                                                <td>{{$item->icon_title}}</td>
                                                <td>{{$item->example_text}}</td>
                                                <td>
                                                    @if($item->status == 1)
                                                        <span class="badge bg-success">{{ __('Active')}}</span>
                                                    @else
                                                        <span class="badge bg-info">{{ __('Inactive')}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($item->is_paid == 1)
                                                        <span class="badge bg-success">{{ __('Paid')}}</span>
                                                    @else
                                                        <span class="badge bg-info">{{ __('Free')}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.social-icon.edit', $item->id) }}" title="Edit socile icon" class="btn btn-primary btn-sm mb-1" style="min-width: 55px;">
                                                        {{ __('Edit')}}
                                                    </a>
                                                    <a href="{{ route('admin.social-icon.destroy', $item->id) }}" title="Edit socile icon" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Are you sure, you want to delete socile icon ?')" style="min-width: 55px;">
                                                        {{ __('Delete')}}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $socileicons->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.footer')
</div>
@endsection
