<?php

namespace Modules\Admin\Http\Controllers\Cart;

use App\Models\Cart\Uni_Order;
use App\Models\Product_Size;
use App\Models\Uni_Store;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mail;
use App\Mail\EmailOrderSuccess;
use App\Mail\EmailOrderError;
use Modules\Admin\Http\Controllers\AdminController;

class AdminUniOrderController extends AdminController
{
    public function index()
    {
        $uni_order = Uni_Order::with('user:id,name,email')->where('status', '!=', 3)->orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_order.index', $viewData);
    }
    public function trash()
    {
        $uni_order = Uni_Order::with('user:id,name,email')->where('status', 3)->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_order.trash', $viewData);
    }
    public function movetrash($id)
    {
        $uni_order = Uni_Order::findOrFail($id);
        $data['status'] = 3;
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
            foreach(json_decode($uni_order['cart_info']) as $items){
                
                $product_size = Product_Size::where('product_id',(int)$items->id)->where('size_id',(int)$items->weight)->first();
                $data_productsize['qty'] = $product_size->qty - $items->qty;
                $product_size->fill($data_productsize)->update();
            }
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
                $data['order_code'] = $response_ghtk->order->label;
                curl_close($curl_ghtk);
            }
        } else if ($data['status'] == 4) {
            foreach(json_decode($uni_order['cart_info']) as $items){
                $product_size = Product_Size::where('product_id',(int)$items->id)->where('size_id',(int)$items->weight)->first();
                if($product_size){
                    $data_productsize['qty'] = $product_size->qty + $items->qty; 
                    $product_size->fill($data_productsize)->update();
                }
          
            }
            if ($uni_order->method_ship == 1) {
                $order_del = '{"order_codes":["' . $uni_order->order_code . '"]}';
                // dd($order_del);
                $curl_creat_ = curl_init('https://online-gateway.ghn.vn/shiip/public-api/v2/switch-status/cancel');
                curl_setopt($curl_creat_, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl_creat_, CURLOPT_POSTFIELDS, $order_del);
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
                curl_close($curl_creat_);
            } else if ($uni_order->method_ship == 2) {

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/cancel/partner_id:" . $id,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_HTTPHEADER => array(
                        "Token: APITokenSample-ca441e70288cB0515F310742",
                    ),
                ));

                $response = curl_exec($curl);
                curl_close($curl);
            }
        } elseif ($data['status'] == 2) {
            $order_poin = (int)(str_replace('.','',$uni_order->total_money));
            $data['order_poin'] = $order_poin / 1000000;
            if (checkUid($uni_order->user_id)) {
                $uni_store = Uni_Store::where('user_id', $uni_order->user_id)->first();
                $data_store['poin_store'] = $uni_store->poin_store + $data['order_poin'];
                $uni_store->fill($data_store)->update();
            }
        }
        $uni_order->fill($data)->update();
        if( $uni_order->status == 2){
            Mail::to($uni_order['email'])->send(new EmailOrderSuccess($uni_order));
        }elseif ($uni_order->status == 3){
            Mail::to($uni_order['email'])->send(new EmailOrderError($uni_order));
        }

        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }
    public function search_ajax(Request $request)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $keyword = $request->keyword;
        $range_date = $request->range_date;
        $type_pay = $request->type_pay;
        if($keyword){
            $uni_order = Uni_Order::where('customer_name', 'LIKE', '%' . $keyword . "%")->get();
        } elseif($range_date) {
            $uni_order = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date),Carbon::now()])->get();
        } elseif($to_date != '' && $from_date != ''){
            $uni_order = Uni_Order::whereBetween('updated_at', [$from_date,$to_date])->get();
        } elseif($type_pay) {
            $uni_order = Uni_Order::where('type_pay', $type_pay)->get();
        } else {
            $uni_order = Uni_Order::get();
        }

        if($uni_order){
            $html = view('admin::pages.uni_order.index_ajax', compact('uni_order'))->render();
        } else {
            $html = 'Không tìm thấy kết quả nào';
        }
        return $html;
    }

}
