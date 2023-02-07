<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->only(['cart',]);
    }


    /**
     * Write code on Method
     *
     * @return view()
     */
    public function cart()
    {
        return view('pages.cart');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {

            $cart[$id] = [
                "name" => $product->product_name,
                "slug" => $product->product_slug,
                "quantity" => 1,
                "price" => $product->unit_price ? $product->unit_price : $product->unit_price_regular,
                "image" => $product->thumbnail
            ];
        }
        session()->put('cart', $cart);
        return response()->json(["status" => true, 'count' => count($cart)]);
    }


    public function addToCartPost(Request $request)
    {
        $request->validate([
            'qty' => 'min:1'
        ]);

        $product = Product::findOrFail($request->id);
        $cart = session()->get('cart', []);
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] =  $request->qty;
        } else {

            $cart[$request->id] = [
                "name" => $product->product_name,
                "slug" => $product->product_slug,
                "quantity" => $request->qty,
                "price" => $product->unit_price_regular,
                "image" => $product->thumbnail
            ];
        }
        session()->put('cart', $cart);
        // Toastr::success('Product added to cart successfully!');
        return redirect()->back()->with('success',);
    }


    public function update(Request $request)

    {

        if ($request->id && $request->quantity) {

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);
            Toastr::success('Cart updated successfully');
        }
    }

    public function remove(Request $request)

    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            Toastr::error('Product removed from cart successfully');
        }
    }

    public function checkCoupon(Request $request)
    {
        $result = Coupon::where('coupon_code', $request->code)->first();

        if (isset($result)) {
            $date = date('Y-m-d');
            $date = date('Y-m-d', strtotime($date));
            $couponValidDateBegin = date('Y-m-d', strtotime($result->valid_from));
            $couponValidDateEnd = date('Y-m-d', strtotime($result->valid_to));

            if (($date >= $couponValidDateBegin) && ($date <= $couponValidDateEnd)) {
                if ($result->coupon_for == "for_specific_user") {

                    if ($result->user_id == Auth::id()) {
                        $orderResult = Order::where('coupon_id', $result->id)->where('user_id', Auth::id())->first();
                        if (isset($orderResult)) {
                            return response()->json(['status' => false, 'message' => 'Coupon Already Used']);
                        } else {
                            Session::put('coupon', $result);
                            return response()->json(['status' => true, 'message' => 'Coupon Applied']);
                        }
                    } else {
                        return response()->json(['status' => false, 'message' => 'Invalid Coupon']);
                    }
                } else {
                    $orderResult = Order::where('coupon_id', $result->id)->where('user_id', Auth::id())->first();
                    if (isset($orderResult)) {
                        return response()->json(['status' => false, 'message' => 'Coupon Already Used']);
                    } else {
                        Session::put('coupon', $result);
                        return response()->json(['status' => true, 'message' => 'Coupon Applied']);
                    }
                }
            } else {
                return response()->json(['status' => false, 'message' => 'Coupon Expired']);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'Invalid Coupon']);
        }
    }


    public function removeCoupon(Request $request)
    {
        Session::forget('coupon');
        return response()->json(['status' => true, 'message' => 'Coupon removed']);
    }
}
