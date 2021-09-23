<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni_Product;
use App\Models\Product_Category;
use App\Models\Uni_Category;
use App\Models\Product_Trade;
use App\Models\Uni_Trade;
use App\Models\Uni_Size;
use App\Models\Uni_Comment;
use App\Models\Product_Size;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\System\Slide;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    public function index($slug)
    {
        // dd($slug);
        $id_product = Uni_Product::where('slug', $slug)->pluck('id')->first();

        $noi_dung_comment = Uni_Comment::where('product_id', '=', $id_product)->where('type_comment', 'product')->where('status', 1)->where('type', 'review')->get();
        $noi_dung_question = Uni_Comment::where('product_id', '=', $id_product)->where('type_comment', 'product')->where('status', 1)->where('type', 'question')->get();
        $product = Uni_Product::where('slug', $slug)->first();
        \SEOMeta::setTitle($product->meta_title);
        \SEOMeta::setDescription($product->meta_desscription);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($product->meta_desscription);
        \OpenGraph::setTitle($product->meta_title);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($product->thumbnail));
        $trade_id = Product_Trade::where('product_id', $id_product)->pluck('trade_id')->first();
        $size_id = Product_Size::where('product_id', $id_product)->pluck('size_id')->first();
        $cat_grid = Product_Category::where('product_id', $id_product)->pluck('category_id');
        // dd($cat_grid);
        $cat_id = Uni_Category::whereIn('id', $cat_grid)->where('parent_id', 0)->pluck('id')->first();
        // dd($cat_id);
        $cat_data = Uni_Category::where('id', $cat_id)->first();
        // dd($cat_data);
        $grp_id = Product_Category::where('category_id', $cat_id)->pluck('product_id');
        $trade_name = Uni_Trade::where('id', $trade_id)->first();
        $size_name = Uni_Size::where('id', $size_id)->first(); 

        $product_related = Uni_Product::whereIn('id', $grp_id)->where('status', 1)->orderBy('id', 'asc')->get();
        $grp_id_cmt = Uni_Comment::where('star', '>', 4)->where('status', 1)->pluck('product_id');
        $product_fav = Uni_Product::whereIn('id', $grp_id_cmt)->where('status', 1)->orderBy('id', 'asc')->limit(8)->get();
        $slides_home_four1 = Slide::where('s_type', 9)->first();
        $count_bl = Uni_Comment::where('product_id', '=', $id_product)->where('type', '=', 'review')->get();
        $count_bl1 = $count_bl->count();
        $count_ch = Uni_Comment::where('product_id', '=', $id_product)->where('type', '=', 'question')->get();
        $count_ch1 = $count_ch->count();
        // $data_size_product = Product_Size::where('product_id', $id_product)->get();
        $data_size_product = Product_Size::where('product_id', $id_product)
        ->join('uni_size', function ($join) {
            $join->on('product_size.size_id', '=', 'uni_size.id');
        })
        ->orderby('name','asc')->get();
        $size_product = [];
        foreach ($data_size_product as $size) {
            $sizes = [
                'size_name' => (int)getSizeName($size->size_id),
                'size_id' => $size->size_id,
                'price' => $size->price,
                'qty' => $size->qty,
                'price_sale' => $size->price_sale,
                'price_sale_store' => $size->price_sale_store,
                'qty_in_box' => $size->qty_in_box,
                'min_box' => $size->min_box,
                'image' => $size->image,
            ];
            array_push($size_product, $sizes);
        }
        $product['size_product'] = $size_product;
        $viewdata = [
            'product' => $product,
            'cat_data' => $cat_data,
            'trade_name' => $trade_name,
            'product_related' => $product_related,
            'noi_dung_comment' => $noi_dung_comment,
            'noi_dung_question' => $noi_dung_question,
            'slug' => $slug,
            'product_fav' => $product_fav,
            'slides_home_four1' => $slides_home_four1,
            'count_bl1' => $count_bl1,
            'count_ch1' => $count_ch1,
            'size_name' => $size_name
        ];
        return view('pages.product.index', $viewdata);
    }

    public function thembinhluan(Request $request)
    {

        $type_product = 'product';
        $data = [
            'user_id' => $request->user_id != null ? $request->user_id : 0,
            'product_id' => $request->product_id,
            'type_comment' => $type_product,
            'title' => $request->title_question,
            'star' => $request->ratingValue == null ? 5 : $request->ratingValue,
            'name' => $request->name_question,
            'phone' => $request->phone_question,
            'email' => $request->email_question,
            'type' => $request->type_question,
            'noi_dung_comment' => $request->noi_dung_comment != null ? $request->noi_dung_comment : '',
            'noi_dung_question' => $request->noi_dung_question != null ? $request->noi_dung_question : '',
            'created_at' => Carbon::now()
        ];
        $id = Uni_Comment::insertGetId($data);
        if ($id) {
            $this->showMessagesSuccess('Đã gửi bình luận thành công');
        } else {
            $this->showMessagesError('Đã gửi bình luận thất bại');
        }
    }
    public function showMessagesSuccess($message = 'Thêm mới thành công')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function showMessagesError($message = 'Xử lý dữ liệu thất bại')
    {
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
}
