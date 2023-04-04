<?php

namespace App\Mail;

use App\Models\Plan;
use App\Models\Setting;
use App\Models\Transaction;
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
    public $subject, $content, $transaction;
    public function __construct($mailsubject, $mailcontent, $transaction = null)
    {
        $this->subject = $mailsubject;
        $this->content = $mailcontent;
        if (isset($transaction)) {
            $this->transaction = $transaction;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {



        $plan = Plan::find($this->transaction->plan_id);
        $palnFeatures = json_decode($plan->features, true);

        $genarelSetting = Setting::first();

        $imagePath = public_path($genarelSetting->site_logo);
        $ext = pathinfo($imagePath, PATHINFO_EXTENSION);

        $imgbinary = fread(fopen($imagePath, "r"), filesize($imagePath));

        $base64 = 'data:image/' . $ext . ';base64,' . base64_encode($imgbinary);



        return $this->subject($this->subject)->view('emails.admin-notify-mail')
            ->with('content', $this->content)
            ->with('transaction', $this->transaction)
            ->with('plan_details', $plan)
            ->with('base64', $base64)
            ->with('palnFeatures', $palnFeatures);
    }
}
