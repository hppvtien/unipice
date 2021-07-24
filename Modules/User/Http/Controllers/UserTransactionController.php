<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart\Uni_Order;
use DB;

// use Illuminate\Routing\Controller;

class UserTransactionController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Danh sách đơn hàng của bạn');
        $transactions = DB::table('transactions')
            ->where('t_user_id', get_data_user('web'))
            ->join('orders', 'transactions.id', '=', 'orders.o_transaction_id')
            ->orderByDesc('id')
            ->select('transactions.*', 'orders.o_action_id')
            ->paginate(20);
            $status_glb = [
                1=>[
                    'name' => 'Tiếp nhận',
                    'class' => 'badge-default'
                ],
                3=>[
                    'name' => 'Hoàn thành',
                    'class' => 'badge-success'
                ],
                -1=>[
                    'name' => 'Huỷ bỏ',
                    'class' => 'badge-dange'
                ],
                4=> [
                    'name' => 'Thùng rác',
                    'class' => 'badge-dange'
                ]
            ];

        $user_id = auth()->id();
        $order_list_get_as_user_id = Uni_Order::select('customer_name','email','address','phone','code_invoice','taxcode','total_money','created_at','id','type_pay')->where('user_id','=',$user_id)->get();


        $viewData = [
            'transactions' => $transactions,
            'status_glb' => $status_glb,
            'order_list_get_as_user_id' => $order_list_get_as_user_id,
        ];
       
        return view('user::pages.transaction.index', $viewData);
    }

    public function get_info_order(Request $request){
        if($request->id_order){

            $get_info_order = Uni_Order::select('cart_info')->where('id','=',$request->id_order)->get();

            $view = view('user::pages.transaction.info_order', compact('get_info_order'))->render();
            return $view;
        }

    }

    public function viewTransaction($idTransaction, Request $request)
    {
        $status = Transaction::getStatusGlobal();
        \SEOMeta::setTitle('Chi tiết đơn hàng');
        $orders = Order::with('course:id,c_name,c_slug')
            ->where('o_transaction_id', $idTransaction)
            ->get();      
        $viewData = [
            'orders'        => $orders,
            'idTransaction' => $idTransaction,
            'status' => $status,


        ];
        return view('user::pages.transaction.order', $viewData);
    }
    // public function learnNow($id){
    //     $o_action_id_sl = Transaction::find($id)->order->o_action_id;                          
    //     $c_slug_sl =  Order::find($o_action_id_sl)->course->c_slug; 
    //     return $c_slug_sl;
    // }
}
