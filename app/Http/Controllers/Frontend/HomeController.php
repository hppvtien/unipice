<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product_Trade;
use App\Models\System\Slide;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use App\Models\Uni_Trade;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        \SEOMeta::setTitle('Đây là trang chủ');
        \SEOMeta::setDescription('Đây là mô tả');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Đây là mô tả');
        \OpenGraph::setTitle('Đây là trang chủ');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');

        // $viewData = [
            
        // ];
        $slides = Slide::where('s_status', Slide::STATUS_DEFAULT)
        ->where('s_type',Slide::STATUS_TYPE_HEADER)
        ->orderBy('s_sort', 'asc')
        ->get();
        $slides_home_first = Slide::where('s_type',Slide::STATUS_TYPE_HOME_1)
        ->first();
        $slides_home_thirst = Slide::where('s_type',Slide::STATUS_TYPE_HOME_2)
        ->first();
        $slides_home_three = Slide::where('s_type',Slide::STATUS_TYPE_HOME_3)
        ->first();
        $slides_home_four = Slide::where('s_type',Slide::STATUS_TYPE_HOME_4)
        ->first();

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
            'slides_home_first'=>$slides_home_first,
            'slides_home_thirst'=>$slides_home_thirst,
            'slides_home_three'=>$slides_home_three,
            'slides_home_four'=>$slides_home_four,
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
