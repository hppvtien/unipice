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
    public function update_level(Request $request)
    {
        $uni_store = Uni_Store::get();
        foreach ($uni_store as $key => $store) {
            $uni_store_tt = Uni_Store::where('id', $store->id)->first();
            $as_time = strtotime($uni_store_tt->end_date) - strtotime(Carbon::now());
            if ($store->poin_store >= 30000 && $as_time < 0 && $store->poin_store < 75000) {
                $data_store['type_store'] = 'Gold';
                $uni_store_tt->fill($data_store)->update();
            } elseif ($store->poin_store >= 75000 &&  $as_time < 0 && $store->poin_store < 135000) {
                $data_store['type_store'] = 'Diamond';
                $uni_store_tt->fill($data_store)->update();
            } elseif ($store->poin_store >= 135000 &&  $as_time < 0) {
                $data_store['type_store'] = 'Platinum';
                $uni_store_tt->fill($data_store)->update();
            } elseif ($store->poin_store < 30000 &&  $as_time < 0) {
                $data_store['type_store'] = 'Silver';
                $uni_store_tt->fill($data_store)->update();
            }
        }
        $mes = 'load to page';
        return $mes;
    }
    public function update_status(Request $request){
        $uni_order = Uni_Order_Nap::get();
        foreach ($uni_order as $key => $store) {
            $uni_store_tt = Uni_Order_Nap::where('id', $store->id)->first();
            $as_time = strtotime($uni_store_tt->end_year) - strtotime(Carbon::now());
            if ($as_time < 0 ) {
                $storle['status'] = 5;
                $uni_store_tt->fill($storle)->update();
            }
        }
        $mes = 'load to page';
        return $mes;
    }
    public function BaoMat(Request $request){
        $page_chinh_sach = Page::where('p_style','chinh-sach-bao-mat')->first();
        $viewData=[
            'page_chinh_sach'=>$page_chinh_sach
        ];

        return view('pages.home.chinh_sach', $viewData);
    }
}
