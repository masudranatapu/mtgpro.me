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
    @section('title') {{ __('Product Orders') }} @endsection
@section('product_ordrs', 'active')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Product Orders') }}
                                    
                                    
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
                                            <th width="5%">{{ __('SL.No') }}</th>
                                            <th width="10%">{{ __('Order Number') }}</th>
                                            <th width="6%">{{ __('Quantity') }}</th>
                                            <th width="8%">{{ __('Discount') }}</th>
                                            <th width="7%">{{ __('Total Price') }}</th>
                                            <th width="8%">{{ __('Payment Fee') }}</th>
                                            <th width="10%">{{ __('Grand Total') }}</th>
                                            <th width="10%">{{ __('Customer') }}</th>
                                            <th width="10%">{{ __('Order Date') }}</th>
                                            <th width="10%">{{ __('Payment Method') }}</th>
                                            <th width="10%">{{ __('Payment Status') }}</th>
                                            <th width="10%" class="w-1">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if (!empty(productOrders) && $productOrders->count()) --}}
                                            @foreach ($productOrders as $key => $value)
                                                <tr>
                                                    <td >{{ $key + 1 }}</td>
                                                    <td >{{ $value->order_number }}</td>
                                                    <td >{{ $value->quantity }}</td>
                                                    <td >{{ $value->discount }}%</td>
                                                    <td >{{ $value->total_price }}</td>
                                                    <td >{{ $value->payment_fee }}</td>
                                                    <td >{{ $value->grand_total }}</td>
                                                    <td >{{ $value->user_name }}</td>
                                                    <td >{{ date('d M Y',strtotime($value->order_date)) }}</td>
                                                    <td >{{ $value->payment_method }}</td>
                                                    <td  class="text-muted">
                                                        @if ($value->payment_status == 0)
                                                            <span class="badge bg-red">{{ __('Non Paid') }}</span>
                                                        @elseif ($value->payment_status == 1)
                                                            <span class="badge bg-green">{{ __('Paid') }}</span>
                                                        @else
                                                         <span class="badge bg-orange">{{ __('Pending') }}</span>    
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

                                                                <a href="{{ route('admin.product.orders.edit',$value->id)}}"
                                                                    class="dropdown-item btn-sm">{{ __('Edit') }}</a>

                                                               
                                                                <a href=""
                                                                    class="dropdown-item btn-sm">{{ __('View') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
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
@endsection
