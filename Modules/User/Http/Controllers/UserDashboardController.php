<?php

namespace Modules\User\Http\Controllers;
use App\Models\Cart\Transaction;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Uni_Category;
use Illuminate\Http\Request;
use App\Models\Product_Category;
use DB;

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

    public function productlist(Request $request){

        if(!$request->page){  
            $current_page = 1;
        }
        else{
            $current_page = isset($request->page) ? $request->page : 1;
        }

        $total_records = Uni_Product::count();
        $limit = 12;
        $total_page = ceil($total_records / $limit);

        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        $start = ($current_page - 1) * $limit;
        $product_list = Uni_Product::select('id','name','slug','desscription','thumbnail')->offset($start)->limit($limit)->get();
        $category_product_menu = Uni_Category::select('id', 'name')->reorder('name', 'desc')->get();

        $viewdata = [
            'current_page' => $current_page,
            'total_page' => $total_page,
            'category_menu' => $category_product_menu,
            'product_list' => $product_list,
        ];

        
        
        return view('user::pages.dashboard.product_list', $viewdata);
    }
}
