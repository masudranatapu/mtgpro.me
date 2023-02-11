@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@push('css')
@endpush('css')
@section('settings', 'active')
@section('content')
    @section('title') {{ __('Coupons') }} @endsection
@section('coupons', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Coupons') }}


                                </div>
                            </div>
                            <div class="col">
                                <a href="{{ route('admin.coupon.create') }}" class="btn btn-primary float-end">Add
                                    Coupons</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-2 py-2">
                                <table id="dataTable" class="table table-vcenter card-table" id="table-plan">
                                    <thead>
                                        <tr>
                                            <th width="5%">{{ __('SL.No') }}</th>
                                            <th width="10%">{{ __('Name') }}</th>
                                            <th width="5%">{{ __('Code') }}</th>
                                            <th width="12%">{{ __('Discount Type') }}</th>
                                            <th width="5%">{{ __('Amount') }}</th>
                                            <th width="12%">{{ __('Availablity') }}</th>
                                            <th width="12%">{{ __('Available For') }}</th>
                                            <th width="5%">{{ __('Status') }}</th>
                                            <th width="12%">{{ __('Actions') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if (!empty(productOrders) && $productOrders->count()) --}}
                                        @foreach ($coupons as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->coupon_code }}</td>
                                                <td>
                                                    @if ($value->discount_type == 0)
                                                        <p>
                                                            Amount Discount
                                                        </p>
                                                    @else
                                                        <p>
                                                            Percentage Discount
                                                        </p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($value->discount_type == 0)
                                                        {{ getPrice($value->amount) }}
                                                    @else
                                                        {{ $value->amount }}%
                                                    @endif



                                                </td>
                                                <td>
                                                    <span class="badge bg-orange">&nbsp;Form&nbsp;</span> :
                                                    {{ date('d-M-Y', strtotime($value->valid_from)) }}
                                                    <span class="badge bg-danger">&emsp;To&emsp;</span> :
                                                    {{ date('d-M-Y', strtotime($value->valid_to)) }}
                                                </td>
                                                <td>
                                                    @if ($value->coupon_for == 'for_all')
                                                        <span class="badge bg-success">{{ __('For All') }}</span>
                                                    @else
                                                        <span
                                                            class="badge bg-orange">{{ __('For Specific User') }}</span>
                                                        <p>User: {{ $value->hasUser->name ?? '' }}
                                                        </p>
                                                    @endif



                                                <td class="text-muted">

                                                    @if ($value->status)
                                                        <span class="badge bg-success">{{ __('Active') }}</span>
                                                    @else
                                                        <span class="badge bg-red">{{ __('Inactive') }}</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="dropdown @yield('settings')">
                                                        <a class="btn btn-primary dropdown-toggle" href="#navbar-extra"
                                                            data-bs-toggle="dropdown" role="button"
                                                            aria-expanded="false">
                                                            <span class="nav-link-title">
                                                                {{ __('Action') }}
                                                            </span>
                                                        </a>
                                                        <div class="dropdown-menu">

                                                            <a href="{{ route('admin.coupon.edit', ['coupon' => $value->id]) }}"
                                                                class="dropdown-item btn-sm">{{ __('Edit') }}</a>

                                                            <a class="dropdown-item btn-sm"
                                                                onclick="couponDelete({{ $value->id }})"
                                                                href="javascript:void(0)">{{ __('Delete') }}</a>

                                                            <form
                                                                action="{{ route('admin.coupon.delete', ['coupon' => $value->id]) }}"
                                                                id="delete_{{ $value->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="OrderModal{{ $value->id }}" tabindex="-1"
                                                aria-labelledby="OrderModalLabel{{ $value->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5"
                                                                id="OrderModalLabel{{ $value->id }}">Order Details
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.order.status', ['order' => $value->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="status">Order
                                                                        Status</label>
                                                                    <select name="status" class="form-control"
                                                                        @if ($value->status == 3) disabled @endif
                                                                        id="status">
                                                                        <option class="d-none" value="">Select
                                                                            Status</option>
                                                                        <option
                                                                            @if ($value->status == 1) selected @endif
                                                                            value="1">Processing</option>
                                                                        <option
                                                                            @if ($value->status == 2) selected @endif
                                                                            value="2">On The Way</option>
                                                                        <option
                                                                            @if ($value->status == 3) selected @endif
                                                                            value="3">Delivered</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- @endif --}}
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
<script>
    function couponDelete(id) {
        console.log(id);
        $('#delete_' + id).submit()
    }
</script>
@endsection
