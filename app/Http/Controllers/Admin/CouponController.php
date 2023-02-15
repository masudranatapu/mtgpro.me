<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $coupons = Coupon::with('hasUser')->get();

        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('status', 1)->get()->except(Auth::id());


        return view('admin.coupons.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "coupon_code" => 'required|min:5',
            "discount_type" => 'required',
            "amount" => 'required_if:discount_type,0,1,3',
            "status" => 'required',
            "valid_date_form" => 'required',
            "expired_date" => 'required',
            "coupon_for" => 'required',
            "selected_user" => 'required_if:coupon_for,1'
        ]);

        $coupon = new Coupon();
        $coupon->name = $request->name;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->discount_type = $request->discount_type;
        if ($request->discount_type == "2" || $request->discount_type == "3") {
            if ($request->discount_type == "3") {
                $coupon->condition_price = $request->amount;
                $coupon->amount = null;
            } else {
                $coupon->amount = null;
            }
        } else {
            $coupon->amount = $request->amount;
        }
        $coupon->status = $request->status;
        $coupon->valid_from = date('Y-m-d', strtotime($request->valid_date_form));
        $coupon->valid_to = date('Y-m-d', strtotime($request->expired_date));
        $coupon->coupon_for = $request->coupon_for;
        if ($request->has('selected_user') && $request->coupon_for == "for_specific_user") {
            $coupon->user_id = $request->selected_user;
        } else {
            $coupon->user_id = null;
        }
        $coupon->created_by = Auth::id();
        $coupon->updated_by = Auth::id();
        $coupon->save();
        Toastr::success('Coupon code save successfully');
        return redirect()->route('admin.coupon.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $coupon->load('hasUser');
        $users = User::all()->except(Auth::id());

        return view('admin.coupons.edit', compact('users', 'coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            "name" => 'required',
            "coupon_code" => 'required|min:5',
            "discount_type" => 'required',
            "amount" => 'required|numeric',
            "status" => 'required',
            "valid_date_form" => 'required',
            "expired_date" => 'required',
            "coupon_for" => 'required',
            "selected_user" => 'required_if:coupon_for,1'
        ]);

        $coupon->name = $request->name;
        $coupon->coupon_code = trim($request->coupon_code);
        $coupon->discount_type = $request->discount_type;
        if ($request->discount_type == "2" || $request->discount_type == "3") {
            if ($request->discount_type == "3") {
                $coupon->condition_price = $request->amount;
                $coupon->amount = null;
            } else {
                $coupon->amount = null;
            }
        } else {
            $coupon->amount = $request->amount;
        }
        $coupon->status = $request->status;
        $coupon->valid_from = date('Y-m-d', strtotime($request->valid_date_form));
        $coupon->valid_to = date('Y-m-d', strtotime($request->expired_date));
        $coupon->coupon_for = $request->coupon_for;
        if ($request->has('selected_user') && $request->coupon_for == "for_specific_user") {
            $coupon->user_id = $request->selected_user;
        } else {
            $coupon->user_id = null;
        }
        $coupon->created_by = Auth::id();
        $coupon->updated_by = Auth::id();
        $coupon->save();
        Toastr::success('Coupon code save successfully');
        return redirect()->route('admin.coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        Toastr::success('Coupon code delete successfully');
        return redirect()->route('admin.coupon.index');
    }
}
