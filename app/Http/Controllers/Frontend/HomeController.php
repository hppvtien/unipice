<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product_Trade;
use App\Models\System\Slide;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use App\Models\Uni_Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;
use App\Models\Content_Page;

class HomeController extends Controller
{

    public function index()
    {

        $slug_page = URL::current();
        $doamin_page = URL::to('/');
        $str = str_replace( URL::to('/'), '', URL::current() );
        $str = str_replace('/','',$str);
        $info_page = PAGE::where('p_slug', 'like', '%'.$str.'%')->get();
        if($str != ''){
            foreach($info_page as $item){
                \SEOMeta::setTitle($item->p_name);
                \SEOMeta::setDescription($item->p_desscription);
                \SEOMeta::setCanonical(URL::current());
                \OpenGraph::setDescription($item->p_desscription);
                \OpenGraph::setTitle($item->p_name);
                \OpenGraph::setUrl(URL::current());
                \OpenGraph::addProperty('type', 'articles');
            }
        }
        else{
            \SEOMeta::setTitle('Đây là trang chủ');
            \SEOMeta::setDescription('Đây là mô tả');
            \SEOMeta::setCanonical(\Request::url());
            \OpenGraph::setDescription('Đây là mô tả');
            \OpenGraph::setTitle('Đây là trang chủ');
            \OpenGraph::setUrl(\Request::url());
            \OpenGraph::addProperty('type', 'articles');
        }

        $page = Page::where('p_style','home')->first();
        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        $content_page_3 = Content_Page::where('page_id',$page->id)->where('order',2)->first();
        $content_page_4 = Content_Page::where('page_id',$page->id)->where('order',3)->first();
       
        $slides = Slide::where('s_status', Slide::STATUS_DEFAULT)
        ->where('s_type',Slide::STATUS_TYPE_HEADER)
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
        $product_groupId = Product_Trade::where('trade_id', 1)
        ->pluck('product_id');
        $product_trade = Uni_Product::whereIn('id', $product_groupId)
        ->orderBy('id', 'asc')
        ->get();
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
            'product_trade'=>$product_trade
        ];
        return view('pages.home.home',$viewData);
    }
    public function product_trade(Request $request){
        $trade_id = $request->id_trade;
        $product_trade = Product_Trade::where('trade_id', $trade_id)
        ->pluck('product_id');
        $product = Uni_Product::whereIn('id', $product_trade)
        ->orderBy('id', 'asc')
        ->get();
        $html = view('pages.home.product_trade',compact('product'))->render();
        return $html;
    }
    

}
