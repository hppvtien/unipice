<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $viewData = [
            'transactions' => $transactions,
            'status_glb' => $status_glb
            
        ];
       
        return view('user::pages.transaction.index', $viewData);
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
