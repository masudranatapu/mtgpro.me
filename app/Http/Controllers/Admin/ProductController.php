<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\StorageHelper;
use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public $storageHelper;
    public function __construct()
    {
        $this->storageHelper = new StorageHelper();
    }
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {

        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'regular_price' => 'required',
            'product_type' => 'required',
            'product_status' => 'required',
            'details' => 'required',
            'details' => 'required',
        ]);


        // dd(count($request->images));
        try {
            DB::beginTransaction();

            $product = new Product();
            $product->product_name = $request->name;
            $product->details = $request->details;
            $product->unit_price = $request->price;
            $product->unit_price_regular = $request->regular_price;
            $product->product_type = $request->product_type;
            $product->vat = 0;
            $product->status = $request->product_status;
            $product->created_by = Auth::id();
            $product->updated_by = Auth::id();
            $product->save();

            if ($request->has('images')) {

                for ($i = 0; $i < count($request->images); $i++) {
                    if ($i == 0) {
                        $product->thumbnail = $this->storageHelper->uploadImage($request->images[$i], 'productThumb');
                    } else {
                        $productImage = new ProductImage();
                        $productImage->product_id =  $product->id;
                        $productImage->image_name = $this->storageHelper->uploadImage($request->images[$i], 'productImages');
                        $productImage->save();
                    }
                }
            }
            $product->save();


            $slug = Str::slug($request->name);

            $result = Product::where('product_slug', $slug)->first();
            if (isset($result)) {
                $product->product_slug  = Str::slug($request->name . $product->id);
            } else {
                $product->product_slug  = $slug;
            }
            $product->save();
            DB::commit();
            return redirect()->route('admin.product.index')->with('success', 'product add successfully');
        } catch (Exception $exception) {
            dd($exception);
            DB::rollBack();
            return redirect()->route('admin.product.index')->with('error', $exception);
        }
    }
}
