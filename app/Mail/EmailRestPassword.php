<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailRestPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $user_name;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name, $data)
    {
        $this->user_name = $user_name;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.auth.emailRestPass')->with(['user_name' =>$this->user_name, 'data' =>$this->data]);
    }
}
