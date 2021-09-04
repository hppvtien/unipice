<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailOrderSpiceClubError extends Mailable
{
    use Queueable, SerializesModels;
    public $uni_order_sc;

    public function __construct($uni_order_sc)
    {
        $this->uni_order_sc = $uni_order_sc; 
    }
    public function build()
    {
        return $this->markdown('email.auth.email_order_spice_club_error')->subject('UniMaill gửi thông tin hủy xác nhận thành viên Spice Club')->with(['uni_order_sc' =>$this->uni_order_sc]);
    }
}
