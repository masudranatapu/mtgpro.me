<?php

namespace App\Http\Controllers\User;

use App\Models\BusinessCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
            $this->settings = getSetting();
        }


    public function getIndex(Request $request)
    {
        $data = DB::table('connects')->orderBy('id','desc')
        ->where('user_id',Auth::user()->id);
        if($request->search){
            $search = $request->search;
            $search = explode(' ',$search);
          if($search){
              foreach ($search as $key => $value) {
                $data->where("name", "like", "%$value%");
              }
          }
        }
        $data = $data->paginate(10);
        foreach ($data as $value) {
            $value->user = DB::table('users')->where('id', $value->user_id)->first();
            $value->card = BusinessCard::where('card_id', $value->card_id)->first();
        }
        if(isMobile()){
            return view('mobile.contact', compact('data'));
        }
        return view('desktop.contact', compact('data'));
    }


}
