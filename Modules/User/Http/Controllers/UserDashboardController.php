<?php

namespace Modules\User\Http\Controllers;
use App\Models\Cart\Transaction;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use Illuminate\Http\Request;
use App\Models\Product_Category;
use DB;
use Psy\Util\Str;
use Sentry;
use App\Models\Favourite;

// use Illuminate\Routing\Controller;
class UserDashboardController extends Controller
{

    public function index()
    {
        \SEOMeta::setTitle('Danh sách khóa học của bạn');
        $transactions = Transaction::where('t_user_id', get_data_user('web'))
            ->where('t_status','!=',-1)
            ->orderByDesc('id')
            ->limit(10)
            ->get();

        $viewData = [
            'transactions' => $transactions,
        ];
        return view('user::pages.dashboard.index', $viewData);
    }
    public function replaceOrder(Request $request)
    {
        $id = $request->v_idOrder;
        $order_edit = Transaction::where('id', $id)->first();
        $order_edit->t_status = -1;
        $order_edit->save();
    }

    public function productlist_filter(Request $request){
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
        $array_product_cat = Product_Category::where('category_id', '=', $sort_by)->pluck('product_id')->all();
        $product_list = Uni_Product::select('id','name','slug','desscription','thumbnail')->whereIn('id', $array_product_cat)->orderBy('id',$order_by)->get();

        $view = view("user::pages.dashboard.product_list_filter",compact('product_list'))->render();
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
        $view = view("user::pages.dashboard.product_list_filter",compact('product_list'))->render();
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
}
