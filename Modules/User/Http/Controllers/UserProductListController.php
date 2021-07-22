<?php

namespace Modules\User\Http\Controllers;


use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class UserProductListController extends Controller
{
    public function productlist(){
        return view('user::pages.dashboard.product_list');
    }
}