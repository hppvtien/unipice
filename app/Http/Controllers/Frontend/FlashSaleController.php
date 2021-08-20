<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_FlashSale;
use App\Models\Blog\Uni_Post;
use App\Models\Uni_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;

class FlashSaleController extends Controller
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
        $uid = get_data_user('web');
        $product = Uni_Product::where('view_price_sale','!=',null)->orderBy('id', 'asc')->get();
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
            'count_show' => $count_show
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
