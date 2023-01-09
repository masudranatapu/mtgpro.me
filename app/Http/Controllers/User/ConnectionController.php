<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConnectionController extends Controller
{
    public function __construct()
    {
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
        return view('user.connections', compact('data'));
    }

    public function getConnectionDetails(Request $request,$email,$id)
    {

        return view('user.connections', compact('data'));
    }

}
