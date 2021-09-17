<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_FlashSale;
use App\Models\Blog\Uni_Post;
use App\Models\Uni_Product;
use App\Models\Product_Size;
use App\Models\Uni_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;

class FlashSaleController extends Controller
{
    public function index()
    {
        $cat_id = Uni_Category::where('status', 0)->first();
       
        \SEOMeta::setTitle($cat_id->meta_title);
        \SEOMeta::setDescription($cat_id->meta_desscription);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($cat_id->meta_desscription);
        \OpenGraph::setTitle($cat_id->meta_title);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($cat_id->thumbnail));
        $uid = get_data_user('web');
        $group_pid = Product_Size::where('price_sale','!=',0)->groupBy('product_id')->pluck('product_id');
        $product = Uni_Product::whereIn('id',$group_pid)->orderBy('id', 'asc')->get();
        $count_show = count($product);
        $uni_flashsale_flash = Uni_FlashSale::where('is_flash',0)->get();
        $uni_flashsale_combo = Uni_FlashSale::where('is_flash',1)->get();
        $uni_product = Uni_Product::where('is_hot',1)->limit(8)->get();
        $uni_post = Uni_Post::limit(4)->get();
        $view_data=[
            'uni_flashsale_flash'=>$uni_flashsale_flash,
            'uni_flashsale_combo'=>$uni_flashsale_combo,
            'uni_product'=>$uni_product,
            'uni_post'=>$uni_post,
            'product' => $product,
            'uid' => $uid,
            'count_show' => $count_show,
            'cat_id' => $cat_id,
        ];
        return view('pages.flash_sale.index',$view_data);
    }
    public function singleFlashSale($slug)
    {
        $uni_flashsale = Uni_FlashSale::where('slug',$slug)->first();
        $uni_product = Uni_FlashSale::limit(8)->get();
        $uni_post = Uni_Post::limit(4)->get();
        \SEOMeta::setTitle($uni_flashsale->meta_title);
        \SEOMeta::setDescription($uni_flashsale->meta_desscription);
        $view_data=[
            'uni_flashsale'=>$uni_flashsale,
            'uni_product'=>$uni_product,
            'uni_post'=>$uni_post
        ];
        return view('pages.flash_sale.single',$view_data);
    }
    
}
