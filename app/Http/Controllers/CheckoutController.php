<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkOut()
    {
        return view('pages.product_checkout');
    }
}
