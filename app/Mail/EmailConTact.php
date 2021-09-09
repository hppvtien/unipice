<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailConTact extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data; 
    }

    public function build()
    {
        return $this->markdown('email.auth.email_contact')->subject('Phản hồi khác hàng')->with(['data' =>$this->data]);
    }
}
