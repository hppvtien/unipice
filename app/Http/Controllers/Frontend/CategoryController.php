<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_Category;
use App\Models\Uni_Trade;
use App\Models\Uni_Product;
use App\Models\Product_Category;
use App\Models\Product_Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $cat_id = Uni_Category::where('slug', $slug)->pluck('id')->first();
        $category = Uni_Category::where('id', $cat_id)->first();
        $trade = Uni_Trade::get();
        $categories = Uni_Category::get();
        $group_id_product = Product_Category::where('category_id', $cat_id)->pluck('product_id');
        $product = Uni_Product::with('uni_product:id,name,thumbnail,slug')->whereIn('id', $group_id_product)->orderBy('id', 'asc')->limit(12)->get();
        $count_product = count($group_id_product);
        $viewdata = [
            'category' => $category,
            'product' => $product,
            'count_product' => $count_product,
            'trade' => $trade,
            'categories' => $categories
        ];
        return view('pages.category.index', $viewdata);
    }
    public function fillter_product(Request $request)
    {
        $data_slug = $request->data_slug_trade;
        $data_slug = $request->data_slug_cat;
        $data_sort = $request->data_sort;
        $data_order = $request->data_order;
        if ($request->data_slug_trade) {
            $data_slug = $request->data_slug_trade;
            $trade_id = Uni_Trade::where('slug', $data_slug)->pluck('id')->first();
            $group_id_product = Product_Trade::where('trade_id', $trade_id)->pluck('product_id');
            $product  = Uni_Product::whereIn('id', $group_id_product)->orderBy($data_sort, $data_order)->limit(12)->get();
            $html = view('pages.category._item_product', compact('product'))->render();
        } elseif ($request->data_slug_cat) {
            $data_slug = $request->data_slug_cat;
            $cat_id = Uni_Category::where('slug', $data_slug)->pluck('id')->first();
            $group_id_product = Product_Category::where('category_id', $cat_id)->pluck('product_id');
            $product  = Uni_Product::whereIn('id', $group_id_product)->orderBy($data_sort, $data_order)->limit(12)->get();
            $html = view('pages.category._item_product', compact('product'))->render();
        } else {
            $html = '<p>Sản phẩm bạn vừa chọn hiện đang cập nhật</p>';
        }
        return $html;
    }
}
