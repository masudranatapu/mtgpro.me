<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{

    public function getIndex()
    {
        if(isMobile()){
            return view('mobile.theme');
        }

        return view('desktop.theme');
    }


    public function getCreate ()
    {
        if(isMobile()){
            return view('mobile.card.create');
        }
        return view('desktop.card.create');
    }


}
