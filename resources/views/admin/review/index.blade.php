@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('content')
@section('title') {{ __('Review List')}} @endsection
@section('reviews', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('All Review') }}
                                    {{-- | --}}
                                    {{-- <a href="{{ route('admin.user.trash-list') }}"> <i class="fa fa-trash-alt"></i> Trash list</a> --}}
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
                                            <th>{{ __('Display Name') }}</th>
                                            <th>{{ __('User Name') }}</th>
                                            <th>{{ __('Order ID') }}</th>
                                            <th>{{ __('Created Time') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th class="w-1">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($reviews) && $reviews->count())
                                            @foreach ($reviews as $review)
                                             <tr>
                                                <td>{{ $loop->index + 1 }}</td>

                                                <td class="text-muted">
                                                    {{ $review->display_title }}
                                                 </td>
                                                <td class="text-muted">
                                                    {{ $review->display_name }}
                                                </td>
                                                <td class="text-muted">
                                                    {{ $review->user_name }}
                                                </td>
                                                <td class="text-muted">
                                                    {{ $review->order_id }}
                                                </td>

                                                <td class="text-muted">
                                                    {{ date('d-m-Y h:m A', strtotime($review->created_at)) }}
                                                </td>
                                                <td class="text-muted">
                                                    @if ($review->status == 0)
                                                        <span class="badge bg-red">{{ __('Inactive') }}</span>
                                                    @else
                                                        <span class="badge bg-green">{{ __('Active') }}</span>
                                                    @endif
                                                </td>
                                                <td>

                                                <div class="dropdown @yield('settings')">
                                                        <a class="btn btn-info dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" role="button"
                                                            aria-expanded="false">
                                                            <span class="nav-link-title">
                                                                {{ __('Action') }}
                                                            </span>
                                                        </a>
                                                    <div class="dropdown-menu">

                                                        @if ($review->status == 0)
                                                            <a href="{{ route('admin.review.update',['id' => $review->id, 'status' => 1]) }}" class="dropdown-item btn-sm" >{{ __('Activate') }}</a>
                                                        @else
                                                            <a href="{{ route('admin.review.update',['id' => $review->id, 'status' => 0]) }}" class="dropdown-item btn-sm" >{{ __('Deactivate') }}</a>
                                                        @endif
                                                            <a href="{{ route('admin.review.delete',['id' => $review->id]) }}" class="dropdown-item btn-sm" >{{ __('Delete') }}</a>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="text-center font-weight-bold">
                                            <td colspan="7">{{ __('No Review Found.') }}</td>
                                        </tr>
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
@section('scripts')
@endsection
