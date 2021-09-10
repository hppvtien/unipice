<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserOrderDelete extends Mailable
{
    use Queueable, SerializesModels;
    public $uni_order;
  
    public function __construct($uni_order)
    {
        $this->uni_order = $uni_order; 
    }

    public function build()
    {
        return $this->markdown('email.auth.user_order_delete')->subject('UniMall gửi thông tin hủy đơn hàng của bạn')->with(['uni_order' =>$this->uni_order]);
    }
}
