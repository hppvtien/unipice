<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        return view('pages.membership.index');
    }
}
