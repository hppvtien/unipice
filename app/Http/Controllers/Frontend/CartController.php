<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Giỏ hàng');
        return view('pages.cart.index');
    }
}
