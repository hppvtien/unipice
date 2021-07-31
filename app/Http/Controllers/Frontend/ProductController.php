<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uni_Product;
use App\Models\Product_Category;
use App\Models\Product_Trade;
use App\Models\Uni_Trade;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function index($slug)
    {
        $id_product = Uni_Product::select('id')->where('slug',$slug)->first();
        
        $noi_dung_comment = DB::table('uni_comment')->where('product_id', '=', $id_product->id)->get();
        $user_ids = get_data_user('web');

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
            'product_related' => $product_related,
            'noi_dung_comment' => $noi_dung_comment,
            'user_id' => $user_ids,
            'slug' => $slug,
        ];
        
        return view('pages.product.index',$viewdata);
    }

    public function thembinhluan(Request $request){
        if($request->user_id){
            $type_product = 'product';
            $id = DB::table('uni_comment')->insertGetId(
                ['user_id' => $request->user_id, 'product_id' => $request->product_id, 'type_comment' => $type_product, 'noi_dung_comment' => $request->noi_dung_commnet, 'created_at' => Carbon::now(), 'update_at' => NULL]
            );
            return 'Đã thêm bình luận thành công';
        }
        else{
            return 'Lỗi không thể bình luận';
        }
        
    }
}
