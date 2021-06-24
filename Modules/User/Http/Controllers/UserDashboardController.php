<?php

namespace Modules\User\Http\Controllers;
use App\Models\Cart\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
