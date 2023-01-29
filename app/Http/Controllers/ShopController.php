<?php

namespace App\Http\Controllers;

use illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\User;
use App\Models\Review;
use App\Models\Currency;
use App\Mail\ConnectMail;
use App\Mail\SendContact;
use App\Models\SocialIcon;
use App\Models\BusinessCard;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ConnectRequest;
use App\Mail\SendCard;
use App\Models\Product;
use Illuminate\Support\Facades\Response;


class ShopController extends Controller
{
    private $filename;
    private $settings;

    public function __construct()
    {

        $this->settings = getSetting();
    }


    public function index()
    {
        $products = Product::paginate(12);

        return view('shop.index', compact('products'));
    }

    public function details(Product $product)
    {
        $product->load('hasImages');
        return view('shop.details', compact('product'));
    }
}
