<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use App\Models\Bill;
use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use App\Models\Jobs;
use App\Models\Vote;
use App\Models\User_voucher;
use App\Models\AnswerToTeacher;
use App\Models\QuestionsToTeacher;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AdminUserController extends AdminController
{
    public function index()
    {
        $users = User::orderByDesc('id')->where('status', '!=', 2)->paginate(20);
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.index', $viewData);
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin::pages.user.update', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $data = $request->except(['save', '_token']);
        $data['updated_at'] = Carbon::now();
        $users->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.user.index');
    }
    public function indexmovetrash()
    {
        $users = User::orderByDesc('id')->where('status', '=', 2)->paginate(20);
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.indexmovetrash', $viewData);
    }
    public function movetrash($id)
    {
        $users = User::findOrFail($id);
        $users->status = 2;
        $users->save();
        $this->showMessagesSuccess('Khóa tài khoản thành công');
        return redirect()->route('get_admin.user.index');
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $users = User::find($id);
            if ($users) {
                $tran = Transaction::where('t_user_id', $id)->pluck('id');
                if($tran){
                    Bill::whereIn('id_transaction', $tran)->delete();
                }
                Order::where('o_user_id', $id)->delete();
                Transaction::where('t_user_id', $id)->delete();
                
                // if ($tran) {
                //     $bin = Bill::whereIn('id_transaction', $tran)->get();
                //     dd($bin);
                //     if($bin){
                //         $bin->delete();
                //     }
                //     $order = Order::whereIn('o_transaction_id', $tran)->get();
                //     if($order){
                //         $order->delete();
                //     }
                //     $data_tran = Transaction::where('t_user_id', $id)->get();
                //     if($data_tran){
                //         $data_tran->delete();
                //     }
                // }
                
                // $job = Jobs::where('user_id', $id)->pluck('id');
                $vote = Vote::where('v_user_id', $id)->delete();
                // if($vote){
                //     $vote->delete(); 
                // }
                User_voucher::where('user_id', $id)->delete();
                Jobs::where('user_id', $id)->delete();
                // if($user_voucher){
                //     $user_voucher->delete();
                // }
                $answerToTeacher = AnswerToTeacher::where('asw_id_user', $id)->pluck('id');
                
                if ($answerToTeacher) {
                    QuestionsToTeacher::whereIn('qs_answerID', $answerToTeacher)->delete();
                    AnswerToTeacher::where('asw_id_user', $id)->delete();
                }
                
                
                $users->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }
}
