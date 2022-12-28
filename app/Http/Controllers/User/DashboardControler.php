<?php
namespace App\Http\Controllers\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardControler extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->settings = getSetting();
    }

    public function getIndex(Request $request)
    {

    return view('user.dashboard');
    }

    public function getInsights(Request $request)
    {

    return view('user.insights');
    }

    public function getSetting(Request $request)
    {

    return view('user.setting');
    }

}
