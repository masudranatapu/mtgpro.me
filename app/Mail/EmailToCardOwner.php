<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailToCardOwner extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $settings;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->settings = getSetting();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->markdown('emails.card-owner', ['data' => $this->data]);
        return $this->view('emails.card-owner')->subject('New message from '.$this->settings->site_name .' vcard')->with('card', $this->data);
    }
}
