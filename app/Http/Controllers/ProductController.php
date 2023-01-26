<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
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
        Toastr::success('Product added to cart successfully!');
        return redirect()->back()->with('success');
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
        Toastr::success('Product added to cart successfully!');
        return redirect()->back()->with('success',);
    }

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function update(Request $request)

    {

        if ($request->id && $request->quantity) {

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);
            Toastr::success('Cart updated successfully');
        }
    }



    /**

     * Write code on Method

     *

     * @return response()

     */

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
}
