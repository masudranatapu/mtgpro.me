@extends('layouts.app')
@section('title', 'Cart')
@section('content')
    <div class="shop_sec mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:10%">Photo</th>
                                <th style="width:35%">Product</th>
                                <th style="width:15%">Price</th>
                                <th style="width:15%">Quantity</th>
                                <th style="width:20%" class="text-center">Subtotal</th>
                                <th style="width:10%">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                                $shipingTotal = session()->get('shiping') ?? 0;
                            @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    @php
                                        $total += $details['price'] * $details['quantity'];

                                        $line_total = $details['price'] * $details['quantity'];

                                    @endphp

                                    <tr data-id="{{ $id }}" class="align-middle">
                                        <td data-th="Photo">

                                            <img src="{{ getPhoto($details['image']) }}" width="50"
                                                class="img-responsive" />


                                        </td>
                                        <td data-th="Product">
                                            <span>{{ $details['name'] }}</span>
                                        </td>
                                        <td data-th="Price">{{ getPrice($details['price']) }}</td>
                                        <td data-th="Quantity">
                                            <input type="number" value="{{ $details['quantity'] }}"
                                                class="form-control quantity update-cart allownumericwithoutdecimal" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center">
                                            {{ getPrice($line_total) }}
                                        </td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm remove-from-cart"><i
                                                    class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center text-danger" colspan="5">
                                        <h4>No product available in the cart</h4>

                                    </td>
                                </tr>
                            @endif
                        </tbody>
                        @if (session('cart'))
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-end">
                                        <h5><strong> Total : </strong></h5>
                                    </td>
                                    <td class="text-center">{{ getPrice($total) }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        @if (session()->has('coupon'))
                                            <p>Remove coupon</p>
                                        @else
                                            <p>Apply coupon</p>
                                        @endif
                                    </td>
                                    <td>

                                    </td>
                                    <td colspan="2">

                                        <input type="text" class="form-control"
                                            @if (session()->has('coupon')) disabled @endif id="couponCode"
                                            value="{{ session('coupon')->coupon_code ?? '' }}"
                                            placeholder="Enter coupon code">

                                    </td>

                                    <td id="cupponPrice" class="text-center">
                                        @if (session()->has('coupon'))
                                            @if (session('coupon')->discount_type == '0')
                                                - {{ getPrice(session('coupon')->amount) }}
                                            @elseif (session('coupon')->discount_type == '1')
                                                - {{ getPrice(($total * session('coupon')->amount) / 100) }}
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->has('coupon'))
                                            <button type="button" class="btn btn-primary" id="couponRemove">Remove</button>
                                        @else
                                            <button type="button" class="btn btn-primary" id="couponApply">Apply</button>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end">
                                        <h5><strong>Vat : </strong></h5>
                                    </td>
                                    <td class="text-center">
                                        + {{ getprice(($total * $config->config_value) / 100) }}
                                    </td>
                                    <td></td>
                                    @php
                                        $total = $total + ($total * $config->config_value) / 100;
                                    @endphp
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end">
                                        <h5><strong>Shipping Cost : </strong></h5>
                                    </td>
                                    <td class="text-center">
                                        + {{ getprice($shipingTotal) }}
                                    </td>
                                    <td></td>
                                    @php
                                        $total = $total + $shipingTotal;
                                    @endphp
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end">
                                        <h5><strong>Grand Total : </strong></h5>
                                    </td>
                                    <td class="text-center">

                                        @if (session()->has('coupon'))
                                            @if (session('coupon')->discount_type == '0')
                                                <h5>{{ getprice($total - session('coupon')->amount) }}</h5>
                                            @elseif (session('coupon')->discount_type == '1')
                                                <h5>
                                                    <strong>{{ getprice($total - ($total * session('coupon')->amount) / 100) }}
                                                    </strong><span>
                                                        ({{ session('coupon')->amount }}%)
                                                    </span>
                                                </h5>
                                            @else
                                                <h5>
                                                    {{ getprice($total) }}
                                                </h5>
                                            @endif
                                        @else
                                            <h5>
                                                {{ getprice($total) }}
                                            </h5>
                                        @endif

                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end" colspan="5">
                                        <a href="{{ route('shop') }}" class="text-left btn btn-primary">
                                            <i class="fa fa-angle-left"></i>
                                            Continue Shopping
                                        </a>
                                        @auth
                                            <a href="{{ route('product.checkout') }}" class="btn btn-primary">
                                                Checkout
                                            </a>
                                        @else
                                            <a href="{{ route('guest.checkout') }}" class="btn btn-primary">
                                                Checkout
                                            </a>
                                        @endauth
                                    </td>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    <script type="text/javascript">
        $(".allownumericwithoutdecimal").on("keypress keyup blur", function(event) {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

        $(".update-cart").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });



        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure want to remove?")) {
                console.log(ele);
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        console.log(response);
                        window.location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        });

        $('#couponApply').click(function() {
            let code = $('#couponCode').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('check.coupon') }}",
                data: {
                    code: code
                },
                success: function(data) {
                    console.log(data);
                    if (data) {
                        const {
                            status,
                            message
                        } = data;

                        if (status) {
                            toastr.success(message);
                            window.location.reload();

                        } else {
                            toastr.error(message);
                        }

                    }
                }
            });
        });

        $('#couponRemove').click(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('remove.coupon') }}",
                success: function(data) {
                    console.log(data);
                    if (data) {
                        const {
                            status,
                            message
                        } = data;

                        if (status) {
                            toastr.success(message);
                            window.location.reload();

                        } else {
                            toastr.error(message);
                        }

                    }
                }
            });
        })
    </script>
@endpush
