@extends('layouts.app')
@section('content')
    <div class="shop_sec mt-5 mb-5">
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:10%">Photo</th>
                        <th style="width:35%">Product</th>
                        <th style="width:15%">Price</th>
                        <th style="width:15%">Quantity</th>
                        <th style="width:15%" class="text-center">Subtotal</th>
                        <th style="width:10%">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
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
                                <td data-th="Price">${{ number_format($details['price'],2) }}</td>
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}"
                                        class="form-control quantity update-cart" />
                                </td>
                                <td data-th="Subtotal" class="text-center">
                                    ${{ number_format($line_total,2) }}
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

                            <td colspan="3" class="text-end">
                                <h3><strong>Total : </strong></h3>
                            </td>
                            <td class="text-center">
                                <h3><strong> ${{ number_format($total,2) }}</strong></h3>
                            </td>
                            <td></td>

                        </tr>

                        <tr>

                            <td class="text-end" colspan="5">


                                <a href="{{ route('shop') }}" class="text-left btn btn-primary"><i
                                        class="fa fa-angle-left"></i>
                                    Continue
                                    Shopping</a>

                                <a href="{{ route('product.checkOut') }}" class="btn btn-primary">Checkout</a>

                            </td>

                        </tr>

                    </tfoot>
                @endif
            </table>

        </div>

    </div>
@endsection



@push('custom_js')
    <script type="text/javascript">
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
    </script>
@endpush
