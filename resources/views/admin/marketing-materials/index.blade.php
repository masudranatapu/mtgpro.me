@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@push('css')
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 85px;
            height: 80px;
        }
    </style>
@endpush('css')
@section('settings', 'active')

@section('content')
    @section('title') {{ __('Marketing Materials List') }} @endsection
@section('marketing_materials_list', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('All Marketing Materials') }}
                                    |
                                    <a href="{{ route('admin.marketing.material.create') }}" class="@yield('user_list')"><i
                                            class="la la-star"></i> {{ __('Create Marketing Materials') }}</a>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-2 py-2">
                                <table id="dataTable" class="table table-vcenter card-table" id="table-plan">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL.No') }}</th>
                                            <th>{{ __('Display Title') }}</th>
                                            <th>{{ __('Author Name') }}</th>
                                            <th>{{ __('Order ID') }}</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('PDF') }}</th>
                                            <th>{{ __('Created Time') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th class="w-1">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($marketing_materials) && $marketing_materials->count())
                                            @foreach ($marketing_materials as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->title }}</td>
                                                    <td>{{ $value->author_name }}</td>
                                                    <td>{{ $value->order_id }}</td>
                                                    <td>
                                                        <img src="{{ $value->image }}" alt="Paris">
                                                    </td>
                                                    <td>
                                                       @if ($value->file)
                                                           <a  href="{{$value->file}}" target="_blank" download class="btn btn-success">
                                                                <i class="fa fa-download"></i>
                                                            </a>
                                                       @endif
                                                    </td>
                                                    <td class="text-muted">
                                                        {{ date('d-m-Y h:m A', strtotime($value->created_at)) }}
                                                    </td>
                                                    <td class="text-muted">
                                                        @if ($value->status == 0)
                                                            <span class="badge bg-red">{{ __('Inactive') }}</span>
                                                        @else
                                                            <span class="badge bg-green">{{ __('Active') }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown @yield('settings')">
                                                            <a class="btn btn-primary dropdown-toggle"
                                                                href="#navbar-extra" data-bs-toggle="dropdown"
                                                                role="button" aria-expanded="false">
                                                                <span class="nav-link-title">
                                                                    {{ __('Action') }}
                                                                </span>
                                                            </a>
                                                            <div class="dropdown-menu">

                                                                <a href="{{ route('admin.marketing.material.edit', $value->id) }}"
                                                                    class="dropdown-item btn-sm">{{ __('Edit') }}</a>

                                                                @if ($value->status == 0)
                                                                    <a href="{{ route('admin.marketing.material.status', [$value->id, 1]) }}"
                                                                        class="dropdown-item btn-sm">{{ __('Activate') }}</a>
                                                                @else
                                                                    <a href="{{ route('admin.marketing.material.status', [$value->id, 0]) }}"
                                                                        class="dropdown-item btn-sm">{{ __('Deactivate') }}</a>
                                                                @endif
                                                                <a onclick="return confirm('Are you sure?')" href="{{ route('admin.marketing.material.delete', $value->id) }}"
                                                                    class="dropdown-item btn-sm">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
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
    @include('admin.includes.footer')
</div>
@endsection
@push('scripts')
@endpush
