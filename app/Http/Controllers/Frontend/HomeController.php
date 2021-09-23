<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product_Trade;
use App\Models\Uni_Store;
use App\Models\System\Slide;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use Carbon\Carbon;
use App\Models\Uni_Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;
use App\Models\Content_Page;
use App\Models\Blog\Uni_Post;
use App\Models\Cart\Uni_Order_Nap;
class HomeController extends Controller
{

    public function index()
    {

        $page = Page::where('p_style','home')->first();

        \SEOMeta::setTitle($page->p_title_seo);
        \SEOMeta::setDescription($page->p_desscription_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($page->p_desscription_seo);
        \OpenGraph::setTitle($page->p_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($page->p_banner));

        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        $content_page_3 = Content_Page::where('page_id',$page->id)->where('order',2)->first();
        $content_page_4 = Content_Page::where('page_id',$page->id)->where('order',3)->first();
       
        $slides = Slide::where('s_status', Slide::STATUS_DEFAULT)
        ->where('s_type',Slide::STATUS_TYPE_HEADER)
        ->orderBy('s_sort', 'asc')
        ->get();
        $slides = Slide::where('s_status', Slide::STATUS_DEFAULT)
            ->where('s_type', Slide::STATUS_TYPE_HEADER)
            ->orderBy('s_sort', 'asc')
            ->get();

        $product_hot = Uni_Product::where('is_hot', 1)
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        $product_feauture = Uni_Product::where('is_feauture', 1)
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        $product_new = Uni_Product::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        $category = Uni_Category::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        $trade = Uni_Trade::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        $product_groupId = Product_Trade::where('trade_id', 3)
            ->pluck('product_id');
        $product_trade = Uni_Product::whereIn('id', $product_groupId)
        ->orderBy('id', 'asc')
        ->get();

        $blog_post = Uni_Post::where('status', 1)
        ->orderBy('id', 'asc')
        ->limit(4)->get();
        $viewData=[
            'slides'=>$slides,
            'product_hot'=>$product_hot,
            'product_feauture'=>$product_feauture,
            'product_new'=>$product_new,
            'category'=>$category,
            'content_page_1' => $content_page_1,
            'content_page_2' => $content_page_2,
            'content_page_3' => $content_page_3,
            'content_page_4' => $content_page_4,
            'trade'=>$trade,
            'product_trade'=>$product_trade,
            'blog_post'=>$blog_post

        ];
        return view('pages.home.home', $viewData);
    }
    public function product_trade(Request $request)
    {
        $trade_id = $request->id_trade;
        $product_trade = Product_Trade::where('trade_id', $trade_id)
            ->pluck('product_id');
        $product = Uni_Product::whereIn('id', $product_trade)
            ->orderBy('id', 'asc')
            ->get();
        $html = view('pages.home.product_trade', compact('product'))->render();
        return $html;
    }
    
    public function BaoMat(Request $request){
        $page_chinh_sach = Page::where('p_style','chinh-sach-bao-mat')->first();
        $viewData=[
            'page_chinh_sach'=>$page_chinh_sach
        ];

        return view('pages.home.chinh_sach', $viewData);
    }
}
