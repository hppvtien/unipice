<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Uni_Category;
use App\Models\Content_Page;
use App\Models\Blog\Uni_Post;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\Product_Category;




class AboutController extends Controller
{

    public function index()
    {
        \SEOMeta::setTitle('Đây là giới thiệu');
        \SEOMeta::setDescription('Đây là mô tả');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Đây là mô tả');
        \OpenGraph::setTitle('Đây là trang chủ');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');

        $page = Page::where('p_style','about-us')->first();
        $menu = Uni_Category::where('parent_id',0)->where('status',1)->get();
        $menu1 = Uni_Category::where('parent_id', '=', 0)->whereNotIn('id', [2,5,8])->get();
        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        // dd($content_page_1);
        $viewdata = [
            'page'=>$page,
            'menu' => $menu,
            'menu1' => $menu1,
            'content_page_1' => $content_page_1,
            'content_page_2' => $content_page_2,
        ];
        return view('pages.about.index', $viewdata);
    }
}
