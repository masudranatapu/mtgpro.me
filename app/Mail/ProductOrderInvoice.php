<?php

namespace App\Mail;

use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProductOrderInvoice extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $order)
    {
        $this->details  = $details;
        $this->order    = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $orderDetails = OrderDetails::with('order')->where('order_id', $this->order->id)->get();
        $productid = $orderDetails->pluck('product_id')->toArray();
        $product = Product::whereIn('id', $productid)->get();


        return $this->view('emails.product-invoice')->with('details', $this->details)->with('orderDetails', $orderDetails)->with('orders', $this->order)->with('products', $product);
    }
}
