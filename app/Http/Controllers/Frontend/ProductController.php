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
        $cat_id = Product_Category::where('product_id',$product->id)->pluck('category_id')->first();
        $grp_id = Product_Category::where('category_id',$cat_id)->pluck('product_id');
        $trade_name = Uni_Trade::where('id',$trade_id)->pluck('name')->first();
        $uid = get_data_user('web');
        $product_related = Uni_Product::whereIn('id', $grp_id)->where('status', 1)->orderBy('id', 'asc')->get();
        $viewdata = [
            'product'=>$product,
            'trade_name' => $trade_name,
            'uid' => $uid,
            'product_related' => $product_related
        ];
        return view('pages.product.index',$viewdata);
    }
}
