<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use App\Models\Cart\Uni_Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AdminUserController extends AdminController
{
    public function index()
    {
        $users = User::orderByDesc('id')->where('type', null)->where('status',1)->paginate(20);
       
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.index', $viewData);
    }
    public function indexSC()
    {
        $users = User::orderByDesc('id')->where('type', 2)->paginate(20);
       
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.index_spice_club', $viewData);
    }
    public function store_index()
    {
        $users = User::orderByDesc('id')->where('type', 1)->where('status',1)->paginate(20);
        $viewData = [
            'users' => $users
        ];
        return view('admin::pages.user.store_index', $viewData);
    }
    public function edit($id)
    {
        $users = User::find($id);
        $g_status = User::getStatusGlobal();
        // dd($g_status);
        $viewData = [
            'users' => $users,
            'g_status' => $g_status
        ];
        return view('admin::pages.user.update', $viewData);
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
    // public function update_level()
    // {
    //     $users = User::find($id);
    //     $data = $request->except(['save', '_token']);
    //     $data['updated_at'] = Carbon::now();
    //     $users->fill($data)->save();
    //     $this->showMessagesSuccess();
    //     return redirect()->route('get_admin.user.index');
    // }
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
        $this->showMessagesSuccess('Kh??a t??i kho???n th??nh c??ng');
        return redirect()->route('get_admin.user.index');
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $users = User::find($id);
            if ($users) {
                
                Uni_Order::where('user_id', $id)->delete();
                $users->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xo?? d??? li???u th??nh c??ng'
            ]);
        }
        return redirect()->to('/');
    }
   
}
