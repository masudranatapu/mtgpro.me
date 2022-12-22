<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCard extends Mailable
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
        $mail = $this->from($this->settings->address, $this->settings->site_name)
            ->markdown('emails.send-card', [
                'data' => $this->data
            ]);
        return $mail;
    }
}
