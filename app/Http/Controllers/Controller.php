<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\Category;
use App\Models\Blog\Menu;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $categoriesParent = Category::where('c_parent_id', 0)
            ->orderByDesc('c_sort')
            ->select('id', 'c_name', 'c_icon', 'c_slug', 'c_avatar')
            ->get();
        $blogmenu = Menu::where('m_parent_id', 1)
            ->orderByDesc('m_sort')
            ->select('id', 'm_name', 'm_icon', 'm_slug', 'm_avatar')
            ->get();
        view()->share('categoriesParent', $categoriesParent);
        view()->share('blogmenu', $blogmenu);
    }
    
}
