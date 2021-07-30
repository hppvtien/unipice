<?php

namespace Modules\User\Http\Controllers;
use App\Models\Cart\Transaction;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use App\Models\Uni_Store;
use App\Models\Cart\Uni_Order;
use Illuminate\Http\Request;
use App\Models\Product_Category;
use DB;
use Psy\Util\Str;
use Sentry;
use App\Models\Favourite;
use App\Models\Uni_FlashSale;
use Carbon\Carbon;

// use Illuminate\Routing\Controller;
class UserDashboardController extends Controller
{

    public function index()
    {
        \SEOMeta::setTitle('Danh sách sản phẩm');
        // $transactions = Transaction::where('t_user_id', get_data_user('web'))
        //     ->where('t_status','!=',-1)
        //     ->orderByDesc('id')
        //     ->limit(10)
        //     ->get();
        
        // $viewData = [
        //     'transactions' => $transactions,
        // ];
        
        return view('user::pages.dashboard.index');
    }
    // public function replaceOrder(Request $request)
    // {
    //     $id = $request->v_idOrder;
    //     $order_edit = Transaction::where('id', $id)->first();
    //     $order_edit->t_status = -1;
    //     $order_edit->save();
    // }
    public function listOrder()
    {
        $user_id = auth()->id();
        $uni_order = Uni_Order::where('user_id',$user_id)->orderBy('id','asc')->get();
           
        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('user::pages.dashboard.list_order',$viewData);
    }

    public function productlist_filter(Request $request){
        $user_id = auth()->id();
        if($request->sort_by){
            $sort_by = $request->sort_by;
        }else{
            $sort_by = 1;
        }
        if($request->order_by){
            $order_by = $request->order_by;
        }
        else{
            $order_by = 'desc';
        }
        $my_favorites = Favourite::where('f_user_id','=',$user_id)->pluck('f_id');
        $array_product_cat = Product_Category::where('category_id', '=', $sort_by)->pluck('product_id')->all();
        $product_list = Uni_Product::select('id','name','slug','desscription','thumbnail')->whereIn('id', $array_product_cat)->orderBy('id',$order_by)->get();

        $view = view("user::pages.dashboard.product_list_filter",compact('product_list','my_favorites'))->render();
        return $view;
    }

    public function productlist(){
        $user_id = auth()->id();
        $my_favorites = Favourite::where('f_user_id','=',$user_id)->pluck('f_id');
        $product_list = Uni_Product::select('id','name','slug','desscription','thumbnail')->get();
        $category_product_menu = Uni_Category::select('id', 'name')->reorder('name', 'desc')->get(); 
           
        $viewdata = [
            'category_menu' => $category_product_menu,
            'product_list' => $product_list,
            'my_favorites' => $my_favorites,
        ];
        
        return view('user::pages.dashboard.product_list', $viewdata);
    }

    public function myfavorites(){
        $user_id = auth()->id();
        $my_favorites = Favourite::where('f_user_id','=',$user_id)->pluck('f_id');
        $product_list = Uni_Product::select('id','name','slug','desscription','thumbnail')->wherein('id',$my_favorites)->get();
        $category_product_menu = Uni_Category::select('id', 'name')->reorder('name', 'desc')->get(); 
           
        $viewdata = [
            'category_menu' => $category_product_menu,
            'product_list' => $product_list,
        ];

        return view('user::pages.dashboard.myfavorites',$viewdata);
    }

    public function myfavorites_filter(Request $request){
        if($request->sort_by){
            $sort_by = $request->sort_by;
        }else{
            $sort_by = 1;
        }
        if($request->order_by){
            $order_by = $request->order_by;
        }
        else{
            $order_by = 'desc';
        }
        $user_id = auth()->id();
        $my_favorites = Favourite::where('f_user_id','=',$user_id)->pluck('f_id');
        $array_product_cat = Product_Category::where('category_id', '=', $sort_by)->pluck('product_id')->all();
        $product_list = Uni_Product::select('id','name','slug','desscription','thumbnail')->wherein('id',$my_favorites)->wherein('id', $array_product_cat)->orderBy('id',$order_by)->get();
        $view = view("user::pages.dashboard.product_list_filter",compact('product_list', 'my_favorites'))->render();
        return $view;
    }

    public function myfavorites_delete(Request $request){
        if($request->id){
            $id_del = $request->id;
            $del_id_product = Favourite::where('f_id', $request->id)->delete();
            if($del_id_product){
                return 'Đã Bỏ Thích Sản Phẩm '.$id_del;
            }
            else{
                return 'Không Thể Xóa Sản Phẩm ';
            }
        }
        
    }

    public function myfavorites_add(Request $request){
        
        if($request->id){
            $id_add = $request->id;
            $user_id = auth()->id();
            if (Favourite::where('f_id', '=', $id_add)->exists()) {
                $del_id_product = Favourite::where('f_id', $id_add)->delete();
                if($del_id_product){
                    return 'Đã Bỏ Thích Sản Phẩm '.$id_add;
                }
                else{
                    return 'Không Thể Xóa Sản Phẩm ';
                }
            }
            else{
                $id = Favourite::insertGetId(
                    ['f_user_id' => $user_id, 'f_id' => $id_add, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
                if($id){
                    return 'Bạn Đã Thích Sản Phẩm '. $id_add;
                }
            }
        }
    }
    
    public function my_flash_sale(){

        $my_flash_sale = Uni_FlashSale::select('name','slug','desscription','price','qty','thumbnail','id','content','status')->get();

        $viewData = [
            'my_flash_sale' => $my_flash_sale,
        ];
        return view('user::pages.dashboard.my_flash_sale', $viewData);
    }

    public function get_product_flash_sale(Request $request)
    {
        if($request->get_id){
            $get_id = $request->get_id;
            $get_data_id = Uni_FlashSale::select('info_sale')->where('id','=',$get_id)->get();
        }

        if($request->get_total_price){
            $get_total_price = $request->get_total_price;
        }else{
            $get_total_price = 1000000;
        }

        foreach ($get_data_id as $vl){
            $get_result_arr = json_decode($vl->info_sale, true);
        }
        $view = view("user::pages.dashboard.my_flash_sale_product", compact('get_result_arr','get_total_price'))->render();
        return $view;
    }
}
