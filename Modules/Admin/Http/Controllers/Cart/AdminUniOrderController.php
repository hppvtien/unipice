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
        $uni_order = Uni_Order::with('user:id,name,email')->where('status', '!=', 4)->orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_order.index', $viewData);
    }
    public function trash()
    {
        $uni_order = Uni_Order::with('user:id,name,email')->where('status', 4)->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_order.trash', $viewData);
    }
    public function movetrash($id)
    {
        $uni_order = Uni_Order::findOrFail($id);
        $data['status'] = 4;
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
        
        $data['status'] = $request->status;
        if ($data['status'] == 1) {
            if ($uni_order->method_ship == 1) {
                $curl_creat_ = curl_init('https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/create');
                curl_setopt($curl_creat_, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl_creat_, CURLOPT_POSTFIELDS, $uni_order->ship_info);
                curl_setopt($curl_creat_, CURLOPT_RETURNTRANSFER, true);
                curl_setopt(
                    $curl_creat_,
                    CURLOPT_HTTPHEADER,
                    array(
                        'Content-Type: application/json',
                        'token: 29c6bd6c-fb14-11eb-bbbe-5ae8dbedafcf',
                        'ShopId: 1925108'
                    )
                );
                $result_cr = json_decode(curl_exec($curl_creat_));
                $data['order_code'] = $result_cr->data->order_code;
                curl_close($curl_creat_);

            } else if ($uni_order->method_ship == 2) {
                $curl_ghtk = curl_init();

                curl_setopt_array($curl_ghtk, array(
                    CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/order",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $uni_order->ship_info,
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Token: AbBDa3930B238e6a0686A8E96c0A6ACff7724D27",
                        "Content-Length: " . strlen($uni_order->ship_info),
                    ),
                ));

                $response_ghtk = json_decode(curl_exec($curl_ghtk));
                $data['order_code'] = $response_ghtk->data->order_code;
                curl_close($curl_ghtk);
            }
        }
        $uni_order->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
        // return redirect()->back();
    }
}
