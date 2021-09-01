<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailOrderSpiceClub extends Mailable
{
    use Queueable, SerializesModels;
    public $uni_order_sc;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($uni_order_sc)
    {
        $this->uni_order_sc = $uni_order_sc; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return view('email.auth.email_order')->with(['data_bill' =>$this->data_bill]);
        return $this->markdown('email.auth.email_order_spice_club')->subject('UniMall gửi thông tin xác nhận thành viên Spice Club')->with(['uni_order_sc' =>$this->uni_order_sc]);
    }
}
