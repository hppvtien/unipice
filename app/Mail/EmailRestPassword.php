<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailRestPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $users;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($users, $data)
    {
        $this->users = $users;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.auth.emailRestPass')->subject('Unimail gửi thông tin thay đổi mật khẩu')->with(['users' =>$this->users, 'data' =>$this->data]);
    }
}
