<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConnectMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $settings;


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
        return $this
            ->from($this->settings->address)
            ->subject('You have new connection request from '.$this->settings->site_name .' vcard')
            ->view('emails.connect-mail');
    }
}
