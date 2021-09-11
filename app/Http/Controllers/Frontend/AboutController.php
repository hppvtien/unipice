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
        $page = Page::where('p_style','about-us')->first();
        
        \SEOMeta::setTitle($page->p_title_seo);
        \SEOMeta::setDescription($page->p_desscription_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($page->p_desscription_seo);
        \OpenGraph::setTitle($page->p_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($page->p_banner));

        $menu = Uni_Category::where('parent_id',0)->where('status',1)->get();
        $menu1 = Uni_Category::where('parent_id', '=', 0)->whereNotIn('id', [2,5,8])->get();
        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        $content_page_3 = Content_Page::where('page_id',$page->id)->where('order',2)->first();
        $content_page_4 = Content_Page::where('page_id',$page->id)->where('order',3)->first();
        $content_page_5 = Content_Page::where('page_id',$page->id)->where('order',4)->first();
        $blog_post = Uni_Post::where('status', 1)
        ->orderBy('id', 'asc')
        ->limit(4)->get();
        // dd($content_page_1);
        $viewdata = [
            'page'=>$page,
            'menu' => $menu,
            'menu1' => $menu1,
            'content_page_1' => $content_page_1,
            'content_page_2' => $content_page_2,
            'content_page_3' => $content_page_3,
            'content_page_4' => $content_page_4,
            'content_page_5' => $content_page_5,
            'blog_post' => $blog_post,
        ];
        return view('pages.about.index', $viewdata);
    }
}
