<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ReviewController extends Controller
{
    public function index(Request $request){
        $reviews = DB::table('reviews')
        ->select('reviews.*','users.name as user_name')
        ->leftJoin('users', 'users.id', '=', 'reviews.user_id')
        ->latest()->get();
        return view('admin.review.index', compact('reviews'));
    }


    public function update($id,$status){
        $reviews = DB::table('reviews')->where('id',$id)->update(['status' => $status]);
        Toastr::success(trans('Review updated Successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function delete($id){
        $reviews = DB::table('reviews')->where('id',$id)->delete();
        Toastr::success(trans('Review deleted Successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

}
