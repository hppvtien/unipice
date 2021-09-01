<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailOrderCK extends Mailable
{
    use Queueable, SerializesModels;
    public $data_bill;

    public function __construct($data_bill)
    {
        $this->data_bill = $data_bill; 
    }

    public function build()
    {
        return $this->markdown('email.auth.email_chuyen_khoan')->subject('UniMall gửi thông tin đơn hàng')->with(['data_bill' =>$this->data_bill]);
    }
}
