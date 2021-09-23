<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_Category;
use App\Models\Uni_Trade;
use App\Models\Uni_Product;
use App\Models\Page;
use App\Models\Product_Category;
use App\Models\Product_Trade;
use App\Models\Uni_Comment;
use App\Models\System\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $cat_id = Uni_Category::where('slug', $slug)->pluck('id')->first();
        $banner = Slide::where('s_type', 8)->first();
        $category = Uni_Category::where('id', $cat_id)->first();
        $trade = Uni_Trade::get();
        $categories = Uni_Category::get();
        $group_id_product = Product_Category::where('category_id', $cat_id)->pluck('product_id');
        $product = Uni_Product::whereIn('id', $group_id_product)->orderBy('id', 'asc')->get();
        $product_rel = Uni_Product::whereIn('id', $group_id_product)->where('is_hot',1)->orderBy('id', 'asc')->limit(12)->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_hotreview = Uni_Product::whereIn('id', $grp_id_cmt)->orderBy('id', 'asc')->limit(12)->get();
        $count_product = count($group_id_product);
       
        \SEOMeta::setTitle($category->meta_title);
        \SEOMeta::setDescription($category->meta_desscription);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($category->meta_desscription);
        \OpenGraph::setTitle($category->meta_title);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($category->thumbnail));
        
        $uid = get_data_user('web');
        $viewdata = [
            'category' => $category,
            'product_hotreview' => $product_hotreview,
            'product' => $product,
            'product_rel' => $product_rel,
            'count_product' => $count_product,
            'trade' => $trade,
            'categories' => $categories,
            'uid' => $uid,
            'banner' => $banner,
        ];
        return view('pages.category.index', $viewdata);
    }
    public function all_product()
    {
        $banner = Slide::where('s_type', 8)->first();
        $page = Page::where('p_slug','tat-ca-san-pham.html')->first();
        $trade = Uni_Trade::get();
        $categories = Uni_Category::where('parent_id',0)->where('status',1)->get();
        $product = Uni_Product::orderBy('id', 'asc')->get();
        $product_rel = Uni_Product::where('is_hot',1)->orderBy('id', 'asc')->limit(12)->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_hotreview = Uni_Product::whereIn('id', $grp_id_cmt)->orderBy('id', 'asc')->limit(12)->get();

        
        $uid = get_data_user('web');
        $viewdata = [
            'product_hotreview' => $product_hotreview,
            'product' => $product,
            'product_rel' => $product_rel,
            'page' => $page,
            'trade' => $trade,
            'categories' => $categories,
            'uid' => $uid,
            'banner' => $banner,
        ];
        return view('pages.category.all_product', $viewdata);
    }
    public function trade_mark($slug)
    {
        $banner = Slide::where('s_type', 8)->first();
        $trade_id = Uni_Trade::where('slug', $slug)->pluck('id')->first();
        $trade_current = Uni_Trade::where('slug', $slug)->first();
        \SEOMeta::setTitle($trade_current->meta_title);
        \SEOMeta::setDescription($trade_current->meta_desscription);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($trade_current->meta_desscription);
        \OpenGraph::setTitle($trade_current->meta_title);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($trade_current->banner));
        $trade = Uni_Trade::get();
        $categories = Uni_Category::get();
        $group_id_product = Product_Trade::where('trade_id', $trade_id)->pluck('product_id');
        $product = Uni_Product::whereIn('id', $group_id_product)->orderBy('id', 'asc')->get();
        $product_rel = Uni_Product::where('is_hot',1)->orderBy('id', 'asc')->limit(12)->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_hotreview = Uni_Product::whereIn('id', $grp_id_cmt)->orderBy('id', 'asc')->limit(12)->get();
        $count_product = count($group_id_product);
        
        
        $uid = get_data_user('web');
        $viewdata = [
            'trade_current' => $trade_current,
            'product_hotreview' => $product_hotreview,
            'product' => $product,
            'product_rel' => $product_rel,
            'count_product' => $count_product,
            'trade' => $trade,
            'categories' => $categories,
            'uid' => $uid,
            'banner' => $banner,
        ];
        return view('pages.category.trade_mark', $viewdata);
    }
    public function fillter_product(Request $request)
    {
        
        $data_slug = $request->data_slug_trade;
        $data_slug = $request->data_slug_cat;
        $data_sort = $request->data_sort;
        $data_order = $request->data_order;
        $uid = get_data_user('web');
        if ($request->data_slug_trade) {
            $data_slug = $request->data_slug_trade;

        
            $trade_id = Uni_Trade::where('slug', $data_slug)->pluck('id')->first();
            $group_id_product = Product_Trade::where('trade_id', $trade_id)->pluck('product_id');
            $product  = Uni_Product::whereIn('id', $group_id_product)->orderBy($data_sort, $data_order)->limit(12)->get();
            $viewdata = [
                'product' => $product,
                'uid' => $uid
            ];
            $html = view('pages.category._item_product', $viewdata)->render();
        } elseif ($request->data_slug_cat) {
            $data_slug = $request->data_slug_cat;
            $cat_id = Uni_Category::where('slug', $data_slug)->pluck('id')->first();
            $group_id_product = Product_Category::where('category_id', $cat_id)->pluck('product_id');
            $product  = Uni_Product::whereIn('id', $group_id_product)->orderBy($data_sort, $data_order)->limit(12)->get();
            $viewdata = [
                'product' => $product,
                'uid' => $uid
            ];
            $html = view('pages.category._item_product', $viewdata)->render();
        } else {
            $html = '<p>Sản phẩm bạn vừa chọn hiện đang cập nhật</p>';
        }
        return $html;
    }
}
