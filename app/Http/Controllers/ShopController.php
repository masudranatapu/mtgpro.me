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
    private $businessCard;
    private $resp;

    public function __construct(BusinessCard $businessCard)
    {
        $this->businessCard = $businessCard;
        $this->settings = getSetting();
    }


    public function getCart(Request $request)
    {

        $this->resp = $this->businessCard->getPaginatedList($request);
        $cards = $this->resp->data;
        $activeCard = $this->businessCard->where('user_id', Auth::id())->first();

        if (count($cards) < 1) {
            return redirect()->route('user.card.init-card');
        }
        return view('user.dashboard', compact('cards', 'activeCard'));
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
