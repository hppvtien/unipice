<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni_Product;
use App\Models\Product_Category;
use App\Models\Product_Trade;
use App\Models\Uni_Trade;


class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Uni_Product::where('slug',$slug)->first();
        $trade_id = Product_Trade::where('product_id',$product->id)->pluck('trade_id')->first();
        $trade_name = Uni_Trade::where('id',$trade_id)->pluck('name')->first();
        $viewdata = [
            'product'=>$product,
            'trade_name' => $trade_name
        ];
        return view('pages.product.index',$viewdata);
    }
}
