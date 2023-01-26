<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductOrders;

class ProductOrdersController extends Controller
{
   public function index(){

    $productOrders = DB::table('orders')
                     ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                     ->select('orders.*', 'users.name as user_name')
                     ->orderBy('id','desc')->paginate(5);   
                  
    return view('admin.product-orders.index', compact('productOrders'));
   }

   public function edit($id){

        $productOrder = DB::table('orders')
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->select('orders.*', 'users.name as user_name')
                        ->where('orders.id',$id)
                        ->first();


        return view('admin.product-orders.edit',compact('productOrder'));
   }

   public function update(Request $request, $id){
        DB::beginTransaction();
        try {

        $this->validate($request, [
                'order_number'  => 'required',
                'quantity'      => 'required',
                'discount'      => 'required',
                'total_price'   => 'required',
                'payment_fee'   => 'required',
                'grand_total'   => 'required',
                'user_id'       => 'nullable',
                'order_date'    => 'required',
                'payment_method'  => 'required',
                'payment_status'  => 'required',
                'type'           => 'required',
        ]);

       $productOrder = Order::find($id);
      
        $productOrder->order_number = $request->order_number;
        $productOrder->quantity =       $request->quantity;
        $productOrder->discount =       $request->discount;
        $productOrder->total_price =    $request->total_price;
        $productOrder->payment_fee =    $request->payment_fee;
        $productOrder->grand_total =    $request->grand_total;
        $productOrder->user_id =        $request->user_id;
        $productOrder->order_date =     date('Y-m-d',strtotime($request->order_date));
        $productOrder->payment_method = $request->payment_method;
        $productOrder->payment_status = $request->payment_status;
        $productOrder->type = $request->type;
        $productOrder->save();
        
       
    }catch(\Exception $e){
            DB::rollback();
            Toastr::error(trans('Data not Updated !'), 'Error', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.product.orders.edit',$id);

    }
        DB::commit();
        Toastr::success(trans('Data Successfully Updatd !'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.product.orders');
   }

   public function invoice($id){

        $orderInvoice = DB::table('orders')
                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                ->select('orders.*', 'users.name as user_name')
                ->where('orders.id', $id)
                ->first();
   }
}
