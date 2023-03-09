<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class QuickReportMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $senderData;
    public $reciverData;
    public function __construct($data, $owner)
    {
        $this->senderData = $data;
        $this->reciverData = $owner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('LOAN APPLICATION')
            ->view('emails.quick-report-mail')
            ->with('userData', $this->senderData)
            ->with('owner', $this->reciverData);
    }
}
