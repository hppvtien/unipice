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
use App\Models\System\Slide;




class ProductController extends Controller
{
    public function index($slug)
    {
        $id_product = Uni_Product::select('id')->where('slug',$slug)->first();
        
        $noi_dung_comment = DB::table('uni_comment')->where('product_id', '=', $id_product->id)->where('type_comment','product')->get();
        
        $user_ids = get_data_user('web');

        $product = Uni_Product::where('slug',$slug)->first();
        $trade_id = Product_Trade::where('product_id',$product->id)->pluck('trade_id')->first();
        $cat_id = Product_Category::where('product_id',$product->id)->pluck('category_id')->first();
        $grp_id = Product_Category::where('category_id',$cat_id)->pluck('product_id');
        $trade_name = Uni_Trade::where('id',$trade_id)->pluck('name')->first();
        $uid = get_data_user('web');
        \SEOMeta::setTitle($product->meta_title);
        \SEOMeta::setDescription($product->meta_desscription);
        $product_related = Uni_Product::whereIn('id', $grp_id)->where('status', 1)->orderBy('id', 'asc')->get();
        $grp_id_cmt = DB::table('uni_comment')->where('star', '>', 4)->where('status',1)->pluck('product_id');
        $product_fav = Uni_Product::whereIn('id', $grp_id_cmt)->where('status', 1)->orderBy('id', 'asc')->limit(8)->get();
        $slides_home_four1 = Slide::where('s_type',Slide::STATUS_TYPE_COMBO)
        ->first();
        $viewdata = [
            'product'=>$product,
            'trade_name' => $trade_name,
            'uid' => $uid,
            'product_related' => $product_related,
            'noi_dung_comment' => $noi_dung_comment,
            'user_id' => $user_ids,
            'slug' => $slug,
            'product_fav' => $product_fav,
            'slides_home_four1' => $slides_home_four1,
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
