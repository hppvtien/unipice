<?php

namespace App\Http\Controllers;

use App\Mail\Email_test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class Email_test1Controller extends Controller
{
    public function send_email_test1(){
        $order = 1;
        Mail::to('ducanh30091995hpv@gmail.com')->send(new Email_test1($order));

    }
}
