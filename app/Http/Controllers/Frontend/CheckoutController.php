<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Thanh toán');
        return view('pages.checkout.index');
    }
}
