<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_FlashSale;
use App\Models\Blog\Uni_Post;
use App\Models\Uni_Product;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Danh sách các gói khuyến mại');
        \SEOMeta::setDescription('Danh sách các gói khuyến mại');
        $uni_flashsale = Uni_FlashSale::get();
        $uni_product = Uni_Product::where('is_hot',1)->limit(8)->get();
        $uni_post = Uni_Post::limit(4)->get();
        $view_data=[
            'uni_flashsale'=>$uni_flashsale,
            'uni_product'=>$uni_product,
            'uni_post'=>$uni_post,
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
