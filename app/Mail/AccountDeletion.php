<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountDeletion extends Mailable
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
            ->subject($this->settings->site_name .' account deletion')
            ->view('emails.account-deletion');
    }
}
