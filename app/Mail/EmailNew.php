<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNew extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data; 
    }

    public function build()
    {
        return $this->markdown('email.auth.email_new')->subject('Yêu cầu đăng ký nhận bản tin của UniMall')->with(['data' =>$this->data]);
    }
}
