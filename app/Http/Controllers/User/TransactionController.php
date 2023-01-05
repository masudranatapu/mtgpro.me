<?php

namespace App\Http\Controllers\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    // public function index(Request $request)
    // {
    //     $transaction = Transaction::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
    //     return view('desktop.transaction', compact('transaction'));
    // }

    // public function invoice(Request $request,$id)
    // {
    //     $transaction = Transaction::where('gobiz_transaction_id',$id)->first();
    //      return view('desktop.invoice',compact('transaction'));
    // }

    public function getInvoicePDF(Request $request,$id)
    {
        $data = [];
        $data['transaction'] = Transaction::where('id',$id)->first();
        $name = $data['transaction']->transaction_id;
        $pdf = Pdf::loadView('pdf.invoice',compact('data'));
        return $pdf->download($name.'.pdf');
        //  return view('pdf.invoice',compact('data'));
    }

}
