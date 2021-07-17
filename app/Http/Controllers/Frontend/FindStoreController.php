<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_Store;
use Illuminate\Http\Request;

class FindStoreController extends Controller
{
    public function index()
    {
        $uni_store = Uni_Store::get();
        return view('pages.find.index',compact('uni_store'));
    }
}
