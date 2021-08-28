<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailOrderError extends Mailable
{
    use Queueable, SerializesModels;
    public $uni_order;
  
    public function __construct($uni_order)
    {
        $this->uni_order = $uni_order; 
    }

    public function build()
    {
        return $this->markdown('email.auth.email_order_error')->with(['uni_order' =>$this->uni_order]);
    }
}
