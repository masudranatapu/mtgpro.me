<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AdminNotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject, $content, $plan_details;
    public function __construct($mailsubject, $mailcontent, $plan_details = null)
    {
        $this->subject = $mailsubject;
        $this->content = $mailcontent;
        if (isset($plan_details)) {
            $this->plan_details = $plan_details;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if (isset($this->plan_details)) {
            return $this->subject($this->subject)->view('emails.admin-notify-mail')->with('content', $this->content)->with('plan_details', $this->plan_details);
        } else {
            return $this->subject($this->subject)->view('emails.admin-notify-mail')->with('content', $this->content);
        }
    }
}
