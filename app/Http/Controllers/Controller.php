<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\Uni_Category;
use App\Models\Blog\Menu;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
      
    }
}
