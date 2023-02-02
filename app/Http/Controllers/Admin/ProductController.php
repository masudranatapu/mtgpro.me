<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\StorageHelper;
use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Brian2694\Toastr\Facades\Toastr;
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
            'images' => 'required',
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
            if ($request->has('images')) {
                $product->thumbnail = $this->storageHelper->uploadImage($request->images, 'productThumb', 650, 620);
            }
            $product->status = $request->product_status;
            $product->created_by = Auth::id();
            $product->updated_by = Auth::id();
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
            Toastr::success('Product add successfully');
            return redirect()->route('admin.product.index');
        } catch (Exception $exception) {

            DB::rollBack();
            Toastr::error('Something Wrong');
            return redirect()->route('admin.product.index')->with('error', $exception);
        }
    }

    public function edit(Product $product)
    {
        $product->load('hasImages');
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'regular_price' => 'required',
            'product_type' => 'required',
            'product_status' => 'required',
            'details' => 'required',

        ]);



        try {
            DB::beginTransaction();

            $product->product_name = $request->name;
            $product->details = $request->details;
            $product->unit_price = $request->price;
            $product->unit_price_regular = $request->regular_price;
            $product->product_type = $request->product_type;
            $product->vat = 0;
            if ($request->has('images')) {
                $product->thumbnail = $this->storageHelper->uploadImage($request->images, 'productThumb', 400, 400);
            }
            $product->status = $request->product_status;
            $product->created_by = Auth::id();
            $product->updated_by = Auth::id();
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
            Toastr::success('Product update successfully');
            return redirect()->route('admin.product.index');
        } catch (Exception $exception) {

            DB::rollBack();
            Toastr::error('Something Wrong');
            return redirect()->route('admin.product.index')->with('error', $exception);
        }
    }

    public function delete(Product $product)
    {
        $product->delete();
        Toastr::error('Product delete successfully');
        return redirect()->route('admin.product.index');
    }


    public function images(Product $product)
    {
        $product->load('hasImages');
        return view('admin.product.product_images.index', compact('product'));
    }

    public function imagesUpload(Request $request, Product $product)
    {
        $request->validate([
            'images' => 'required'
        ]);


        for ($i = 0; $i < count($request->images); $i++) {
            $productImages = new ProductImage();
            $productImages->product_id = $product->id;
            $productImages->image_name = $this->storageHelper->uploadImage($request->images[$i], 'productImages', 400, 400);
            $productImages->save();
        }
        Toastr::success('Product image add successfully');
        return redirect()->back();
    }
    public function imagesDelete(ProductImage $productImage)
    {
        $productImage->delete();
        Toastr::error('Product image delete successfully');
        return redirect()->back();
    }
}
