<?php

namespace App\Http\Controllers\User;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }


    public function index(Request $request)
    {
        $transaction = Transaction::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('desktop.transaction', compact('transaction'));
    }

    public function invoice(Request $request,$id)
    {
        $transaction = Transaction::where('gobiz_transaction_id',$id)->first();
         return view('desktop.invoice',compact('transaction'));
    }

}
