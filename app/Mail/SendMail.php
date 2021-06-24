<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data_bill;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_bill)
    {
        $this->data_bill = $data_bill; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return view('email.auth.email_order')->with(['data_bill' =>$this->data_bill]);
        return $this->markdown('email.auth.email_order')->with(['data_bill' =>$this->data_bill]);
    }
}
