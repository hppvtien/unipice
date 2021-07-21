<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Uni_Category;
use App\Models\Blog\Uni_Post;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;




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


        $menu = Uni_Category::select('name', 'slug')->get();

        $get_post_9 = Uni_Post::where('category_id', 9)->get();
        
        
        
        $menu1 = array();
        foreach($menu as $l){
            
            $menu1[] = $l;
        }
        $title_page1 = Page::value('p_name');
        $title_page = Page::value('p_desscription');
        $des = Page::value('p_desscription_seo');
        $hometext = Page::value('p_content');
        $banner = Page::value('p_banner');

        $viewdata = [
            'title_page' => $title_page,
            'title1' => $title_page1,
            'des' => $des,
            'banner' => $banner,
            'hometext' => $hometext,
            'link_url' => URL::current(),
            'menu' => $menu1,
            'post_9' => $get_post_9,
        ];
        
        return view('pages.about.index', $viewdata);
    }
}
