<?php

namespace Modules\Admin\Http\Controllers\Cart;

use App\Models\Cart\Uni_Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Controllers\AdminController;

class AdminUniOrderController extends AdminController
{
    public function index()
    {
        $uni_order = Uni_Order::with('user:id,name,email')->where('status','!=',4)->orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_order.index', $viewData);
    }
    public function trash()
    {
        $uni_order = Uni_Order::with('user:id,name,email')->where('status',4)->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_order.trash', $viewData);
    }
    public function movetrash($id)
    {
        $uni_order = Uni_Order::findOrFail($id);
        $data['status']=4;
        $uni_order->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }
    public function delete($id)
    {
        $uni_order = Uni_Order::findOrFail($id);
        $uni_order->delete();
        $this->showMessagesSuccess('Xóa thành công');
        return redirect()->back();
    }

    public function edit($id, Request $request)
    {
        $uni_order = Uni_Order::findOrFail($id);
        $status = Uni_Order::getStatusGlobal();
        $viewData = [
            'uni_order' => $uni_order,
            'status' => $status
        ];
        return view('admin::pages.uni_order.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $uni_order = Uni_Order::findOrFail($id);
        $data['status']=$request->status;
        $uni_order->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }
}
