<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailDangKySpiceClub extends Mailable
{
    use Queueable, SerializesModels;
    public $userss;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userss)
    {
        $this->userss = $userss; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return view('email.auth.email_order')->with(['data_bill' =>$this->data_bill]);
        return $this->markdown('email.auth.email_dang_ky_spice_club')->subject('UniMall gửi thông tin đăng ký Spice Club')->with(['userss' =>$this->userss]);
    }
}
