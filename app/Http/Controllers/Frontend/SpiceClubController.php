<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpiceClubController extends Controller
{
    function index(){
        return view('pages.spiceclub.index');
    }
}
