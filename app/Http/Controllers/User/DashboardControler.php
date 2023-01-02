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
        $user_id = Auth::id();
        $total_card = DB::table('business_cards')->where('user_id',$user_id)->count();
        $total_card_share = 0;

        return view('user.insights', compact('total_card','total_card_share'));
    }

    public function getSetting(Request $request)
    {

    return view('user.setting');
    }

}
