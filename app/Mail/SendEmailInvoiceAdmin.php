<?php

namespace App\Mail;

use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailInvoiceAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */



    public $details;
    public $order;
    public function __construct($details, $order)
    {
        $this->details  = $details;
        $this->order    = $order;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Send Email Invoice Admin',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $orderDetails = OrderDetails::with('order')->where('order_id', $this->order->id)->get();
        $productid = $orderDetails->pluck('product_id')->toArray();
        $product = Product::whereIn('id', $productid)->get();
        return new Content(
            view: 'emails.product-invoice-admin',
            with: ['details' => $this->details, 'orders' => $this->order, 'orderDetails' => $orderDetails, 'products' => $product]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
