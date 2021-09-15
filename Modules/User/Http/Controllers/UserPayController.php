<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Uni_Order;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\EmailOrder;
use App\Mail\EmailOrderCK;
use Illuminate\Support\Str;
use App\Models\Configuration;
use App\Models\Voucher;
use App\Models\Uni_Product;
use App\Models\BankInfo;
use App\Models\Uni_Store;
use App\Models\User;
use App\Models\User_voucher;
use Modules\Admin\Http\Requests\BillRequest;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Mail as FacadesMail;

use function GuzzleHttp\json_decode;

class UserPayController extends UserController
{
    public function getPay()
    {
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        $uni_store = Uni_Store::where('user_id', get_data_user('web'))->first();
        $uni_user = User::where('id', get_data_user('web'))->first();
        if ($listCarts->isEmpty()) return redirect()->to('/');
        $viewData = [
            'store' => $uni_store,
            'uni_user' => $uni_user,
            'listCarts' => $listCarts
        ];
        // \Cart::destroy();
        // dd($viewData);
        return view('user::pages.pay.index', $viewData);
    }
    public function getFeeShipGHN(Request $request)
    {
        $listCarts = \Cart::content();
        $ward_code_to = $request->to_ward_code;
        $district_id_to = (int)$request->to_district_id;

        $data_string = array(
            "from_district_id" => 1726,
            "service_id" => 53320,
            "service_type_id" => null,
            "to_district_id" => $district_id_to,
            "to_ward_code" => $ward_code_to,
            "height" => 12,
            "length" => 12,
            "weight" => 200,
            "width" => 8,
            "insurance_fee" => 0,
            "coupon" => null
        );
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data_string),
            CURLOPT_HTTPHEADER => array(
                'token: 29c6bd6c-fb14-11eb-bbbe-5ae8dbedafcf',
                'Content-Type: application/json',
                'ShopId: 1925108',
                'Content-Type: text/plain'
            ),
        ));
        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        return $response;

        // $shop
    }
    public function getFeeShip(Request $request)
    {
        $method_ship = $request->method_ship;
        $listCarts = \Cart::content();
        $ward_code_to = str_replace("'", "", $request->ward_code_to);
        $district_id_to = str_replace("'", "", $request->district_id_to);
        $province_id_to = str_replace("'", "", $request->province_code_to);

        $data_string = array(
            "pick_province" => $province_id_to,
            "pick_district" => $ward_code_to,
            "pick_address_id" => "14416997",
            "province" => $province_id_to,
            "district" => $district_id_to,
            "address" => "Thôn 6, Xã Thiên Hương, Huyện Thủy Nguyên, Hải Phòng",
            "weight" => 1000,
            "value" => 1000000,
            "transport" => "fly",
            "deliver_option" => "xteam",
            "tags"  => [1]
        );
        // dd($data_string);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/fee?" . http_build_query($data_string),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => array(
                "Token: AbBDa3930B238e6a0686A8E96c0A6ACff7724D27"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;

        // $shop
    }
    public function getPaySuccsess(Request $request)
    {
        // dd($request->all());
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        foreach (json_decode($listCarts) as $key => $item) {
            $data_item[] = json_decode(
                '{
                "name":"' . $item->name . '",
                "code":"' . $item->id . '",
                "quantity": ' . $item->qty . ',
                "price": ' . $item->price . ',
                "length": 12,
                "width": 12,
                "height": 12,
                "category": { "level1":"Gia vị" }
            }'
            );
            $data_item_ghtk[] = json_decode(
                '{
                "name":"' . $item->name . '",
                "product_code":"' . $item->id . '",
                "quantity": ' . $item->qty . ',
                "weight": 0.1
            }'
            );
        };
        $method_ship = $request->method_ship;
        $ward_code_to = $request->ward_code_to;
        $district_id_to = (int)$request->district_id_to;
        // dd($data_item);
        foreach (json_decode($listCarts) as $item) {
            if ($item->options->sale == 'combo') {
                $combo_id = $item->id;
            } else {
                $combo_id = 0;
            };
        };

        $order_data = [
            'user_id' => get_data_user('web'),
            'code_invoice' => $request->code_invoice,
            'vouchers' => $request->vouchers,
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'address' => $request->address,
            'method_ship' => $method_ship,
            'phone' => $request->phone,
            'taxcode' => $request->taxcode,
            'cart_info' => $listCarts,
            'combo_id' => $combo_id,
            'status' => 0,
            'total_vouchers' => $request->total_vouchers,
            'total_money' => $request->total_all_pr == 0 ? $request->total_cart : $request->total_all_pr,
            'total_vat' => $request->total_vat_cart,
            'total_no_vat' => $request->total_all_cart,
            'total_discount' => $request->total_discount,
            'total_ship' => $request->fee_ship,
            'created_at' => Carbon::now(),

        ];
        $idOrder = Uni_Order::insertGetId($order_data);
        \Cart::destroy();
        $order_data_sucsses = Uni_Order::where('id', $idOrder)->where('user_id', get_data_user('web'))->first();
        if ($idOrder) {
            if ($method_ship == 1) {
                $data_string = json_encode(array("offset" => 1, "limit" => 50, "client_phone" => ""));
                $curl = curl_init('https://online-gateway.ghn.vn/shiip/public-api/v2/shop/all');
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt(
                    $curl,
                    CURLOPT_HTTPHEADER,
                    array(
                        'Content-Type: application/json',
                        'token: 29c6bd6c-fb14-11eb-bbbe-5ae8dbedafcf'
                    )
                );
                $result = json_decode(curl_exec($curl));
                $dataShops = $result->data->shops[1];
                $ward_code_from = $dataShops->ward_code;
                $district_id_from = $dataShops->district_id;
                $order_ship['ship_info'] = '{
                    "payment_type_id": 2,
                    "note": "Tintest 123",
                    "required_note": "KHONGCHOXEMHANG",
                    "return_phone": "' . $dataShops->phone . '",
                    "return_address": "' . $dataShops->address . '",
                    "return_district_id": ' . $district_id_from . ',
                    "return_ward_code": "' . $ward_code_from . '",
                    "client_order_code": "",
                    "to_name": "' . $request->customer_name . '",
                    "to_phone": "' . $request->phone . '",
                    "to_address": "' . $request->address . '",
                    "to_ward_code": "' . $ward_code_to . '",
                    "to_district_id": ' . $district_id_to . ',
                    "cod_amount": 0,
                    "content": "Theo New York Times",
                    "weight": 200,
                    "length": 1,
                    "width": 8,
                    "height": 12,
                    "pick_station_id": 1444,
                    "deliver_station_id": null,
                    "insurance_value": 1000000,
                    "service_id": 53320,
                    "service_type_id":2,
                    "order_value":0,
                    "coupon":null,
                    "pick_shift":[2],
                    "items": ' . json_encode($data_item) . '
                    }';
                $order_new = Uni_Order::find($idOrder);
                $order_new->fill($order_ship)->save();
                curl_close($curl);
            } elseif ($method_ship == 2) {
                $order_ghtk['ship_info'] = '{
                    "products": ' . json_encode($data_item_ghtk) . ',
                    "order": {
                        "id": "' . $idOrder . '",
                        "pick_name": "Đai Nguyễn",
                        "pick_address": "22 Phố Mới Thủy Sơn",
                        "pick_province": "Hải Phòng",
                        "pick_district": "Thủy Nguyên",
                        "pick_ward": "Thị trấn Núi Đèo",
                        "pick_tel": "0356105488",
                        "tel": "' . $order_data_sucsses->phone . '",
                        "name": "' . $order_data_sucsses->customer_name . '",
                        "address": "' . $order_data_sucsses->address . '",
                        "province": "' . $request->province_name_to . '",
                        "district": "' . $request->district_id_to . '",
                        "ward": "' . $request->ward_code_to . '",
                        "hamlet": "Khác",
                        "is_freeship": "1",
                        "pick_date": "2016-09-30",
                        "pick_money": 47000,
                        "note": "Khối lượng tính cước tối đa: 1.00 kg",
                        "value": 3000000,
                        "transport": "fly",
                        "pick_option":"cod",
                        "deliver_option" : "xteam",
                        "pick_session" : 2,
                        "tags": [ 1]
                    }
                }';

                $order_new = Uni_Order::find($idOrder);

                $order_new->fill($order_ghtk)->save();
            }
            \Cart::destroy();
            $order_data_sucsses = Uni_Order::where('id', $idOrder)->where('user_id', get_data_user('web'))->first();
            // if ($order_data_sucsses->type_pay == 4) {

            $url = '/thanh-toan/' . $idOrder;
            return $url;
        }
    }
    public function getSuccsess(Request $request, $id)
    {
        $listCarts = \Cart::content();
        if ($listCarts) {
            $order = Uni_Order::find($id);
            $bank_info = BankInfo::where('status', 1)->first();
            $viewData = [
                'bank_info' => $bank_info,
                'listCarts' => $listCarts,
                'order' => $order
            ];
            return view('user::pages.pay.succsess', $viewData);
        } else {
            return redirect('/');
        }
    }
    public function processSuccsess(Request $request, $id)
    {

        $message = 'Đơn hàng đã được gửi lên hệ thống';
        return $message;
    }
    public function check_vouchers(Request $request)
    {
        $check_vouchers = $request->check_vouchers;
        $data_voucher = Voucher::where('code', $check_vouchers)->first();
        if ($data_voucher) {
            if ($data_voucher->expires_at > date('Y-m-d', strtotime(Carbon::now()))) {
                if ($data_voucher->model_qty > 0) {
                    $check_user_voucher = User_voucher::where('user_id', get_data_user('web'))->where('voucher_id', $data_voucher->id)->first();
                    if ($check_user_voucher) {
                        $message = '<span data-percent=0>Bạn đã sử dụng mã giảm giá này</span>';
                        return $message;
                    } else {
                        $message = '<span class="text-success voucher-percent" data-percent=' . $data_voucher->model_percent . '>Nhập mã giảm giá thành công</span>';
                        return $message;
                    }
                } else {
                    $message = '<span data-percent=0>Mã giảm giá này tạm thời đã hết</span>';
                    return $message;
                }
            } else {
                $message = '<span data-percent=0>Mã giảm giá hết hạn</span>';
                return $message;
            }
        } else {
            $message = '<span data-percent=0>Vui lòng kiểm tra lại mã giảm giá</span>';
            return $message;
        }
    }

    public function getVnPaySuccsess(Request $request, $id)
    {
        $order = Uni_Order::find($id);
        return view('user::pages.pay.vnpaysuccsess', compact('order'));
    }

    public function processPayCart(Request $request, $id)
    {
        $type_pay = $request->type_pay;
        $order = Uni_Order::find($id);
        if ($type_pay == 4) {
            session(['cost_id' => $id]);
            session(['url_prev' => url()->previous()]);
            $vnp_TmnCode = "I007EUZ2"; //Mã website tại VNPAY
            $vnp_HashSecret = "VOTYNULEGABAXIXGKRZDIUPLAFLOEQUG"; //Chuỗi bí mật
            $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";

            $vnp_Returnurl = route('get_user.result_vnpay');

            $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = "Thanh toán đơn hàng phí dich vụ";
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $order->total_money;
            $vnp_Amount = (int)(str_replace('đ', '', str_replace('.', '', $order->total_money)));
            $vnp_Locale = 'vn';
            $vnp_BankCode = $request->bank_code;
            $vnp_IpAddr = request()->ip();
            $inputData = array(
                "vnp_Version" => "2.0.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . $key . "=" . $value;
                } else {
                    $hashdata .= $key . "=" . $value;
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;

            if (isset($vnp_HashSecret)) {
                $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
                $data = [
                    'pay_code' => $vnp_TxnRef,
                    'pay_note' =>  $vnp_OrderInfo,
                    'type_pay' =>  $type_pay,
                    'end_date' => Carbon::now()->subDay(-3),
                ];
                $order->fill($data)->save();
                $data_bill = Uni_Order::find($id);
                Mail::to($data_bill['email'])->send(new EmailOrder($data_bill));
                return $vnp_Url;
            }
        } elseif ($type_pay == 3) {
            $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
            $partnerCode = 'MOMOFGH020210603';
            $accessKey = '9QGcOW38zWHhnWEF';
            $secretKey = '1hcI4q537bq4m1Zop3MrHS7M0t7XIuSf';
            $orderInfo = "Thanh toán qua MoMo";
            $amount = '1000000';

            // $amount = '10000';
            $orderId = time() . "";
            $returnUrl = route('get_user.result_momo');

            $notifyurl = "https://momo.vn/";
            // Lưu ý: link notifyUrl không phải là dạng localhost
            $extraData = "merchantName=Payment";

            $orderId = date("YmdHis"); // Mã đơn hàng
            $requestId = time() . "";
            $requestType = "captureMoMoWallet";

            //before sign HMAC SHA256 signature
            $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array(
                'partnerCode' => $partnerCode,
                'accessKey' => $accessKey,
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'returnUrl' => $returnUrl,
                'notifyUrl' => $notifyurl,
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );

            $result = execPostRequest($endpoint, json_encode($data));

            $jsonResult = json_decode($result, true);  // decode json

            $momo_Url = $jsonResult['payUrl'];

            if ($momo_Url) {
                $data_mm = [
                    'user_id' => get_data_user('web'),
                    'type_pay' => $type_pay,
                    'pay_code' => $orderId,
                    'pay_node' =>  $orderInfo,
                    'end_date' => Carbon::now()->subDay(-3),
                ];
                $order->fill($data_mm)->save();
                $data_bill = Uni_Order::find($id);
                Mail::to($data_bill['email'])->send(new EmailOrder($data_bill));
                \Cart::destroy();
                return $momo_Url;
            }
        } else {
            $data_mm = [
                'user_id' => get_data_user('web'),
                'type_pay' => $type_pay,
                'end_date' => Carbon::now()->subDay(-3),
            ];
            $order->fill($data_mm)->save();
            $data_bill = Uni_Order::find($id);
            Mail::to($data_bill['email'])->cc(['info@unimall.vn'])->send(new EmailOrderCK($data_bill));
            \Cart::destroy();
            return '/user/don-hang';
        }
        // return redirect($vnp_Url);
    }

    public function returnvnpay(Request $request)
    {
        $errorCode = $request->vnp_ResponseCode;
        $localMessage = $request->vnp_OrderInfo;
        $responseTime = $request->vnp_PayDate;
        $data['t_note_message'] = $errorCode . '-' . $localMessage . '[' . $responseTime . ']';
        $order       = Uni_Order::where('pay_code', $request->vnp_TxnRef)->first();

        if ($request['vnp_ResponseCode'] == '00') {
            foreach (json_decode($order->cart_info) as $items) {
                $uni_product       = Uni_Product::where('id', $items->id)->first();
                $product['qty'] = $uni_product->qty - $items->qty;
                $uni_product->fill($product)->save();
            };
            $data['status'] = 2;
            $order->fill($data)->save();
            $message = 'Cám ơn quý khách đã tin tưởng và ủng hộ chúng tôi !!!';
            return view('user::pages.pay.finish_pay', compact('message'));
        } else {
            $data['status'] = 0;
            $order->fill($data)->save();
            echo "GD Khong thanh cong";
        }
    }

    public function getmomoSuccsess(Request $request, $id)
    {
        $order = Uni_Order::find($id);
        // dd($viewData);
        return view('user::pages.pay.momosuccsess', compact('order'));
    }

    public function processmomoCart(Request $request, $id)
    {
        $order = Uni_Order::find($id);

        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        $partnerCode = 'MOMOFGH020210603';
        $accessKey = '9QGcOW38zWHhnWEF';
        $secretKey = '1hcI4q537bq4m1Zop3MrHS7M0t7XIuSf';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = '1000000';

        // $amount = '10000';
        $orderId = time() . "";
        $returnUrl = route('get_user.result_momo');

        $notifyurl = "https://momo.vn/";
        // Lưu ý: link notifyUrl không phải là dạng localhost
        $extraData = "merchantName=Payment";

        $orderId = date("YmdHis"); // Mã đơn hàng
        $requestId = time() . "";
        $requestType = "captureMoMoWallet";

        //before sign HMAC SHA256 signature
        $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'returnUrl' => $returnUrl,
            'notifyUrl' => $notifyurl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $result = execPostRequest($endpoint, json_encode($data));

        $jsonResult = json_decode($result, true);  // decode json

        $momo_Url = $jsonResult['payUrl'];

        if ($momo_Url) {
            $data_mm = [
                't_user_id' => get_data_user('web'),
                't_phone' => $request->method_phone,
                't_type_pay' => $request->type_pay,
                't_code' => $orderId,
                't_note' =>  $orderInfo
            ];
            $order->fill($data_mm)->save();
            // \Cart::destroy();
            return $momo_Url;
        }

        //Just a example, please check more in there

    }
    public function resultmomo(Request $request)
    {
        if (!empty($_GET)) {
            $partnerCode = 'MOMOFGH020210603';
            $accessKey = '9QGcOW38zWHhnWEF';
            $secretKey = '1hcI4q537bq4m1Zop3MrHS7M0t7XIuSf';
            $orderId = $request->orderId;
            $localMessage = $request->localMessage;
            $message = $request->message;
            $transId = $request->transId;
            $orderInfo = $request->orderInfo;
            $amount = $request->amount;
            $errorCode = $request->errorCode;
            $responseTime = $request->responseTime;
            $requestId = $request->requestId;
            $extraData = $request->extraData;
            $payType = $request->payType;
            $orderType = $request->orderType;
            $extraData = $request->extraData;
            $m2signature = $request->signature; //MoMo signature
            $order       = Uni_Order::where('pay_code', $orderId)->first();
            // dd($order);
            $data['pay_node'] = $errorCode . '-' . $localMessage . '[' . $responseTime . ']';
            if ($errorCode == '0') {
                $data['status'] = 2;
            } else {
                $data['status'] = 0;
            }
            $order->fill($data)->save();
            $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
                "&orderType=" . $orderType . "&transId=" . $transId . "&message=" . $message . "&localMessage=" . $localMessage . "&responseTime=" . $responseTime . "&errorCode=" . $errorCode .
                "&payType=" . $payType . "&extraData=" . $extraData;

            $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);

            echo "<script>console.log('Debug huhu Objects: " . $rawHash . "' );</script>";
            echo "<script>console.log('Debug huhu Objects: " . $partnerSignature . "' );</script>";


            if ($m2signature == $partnerSignature) {
                if ($errorCode == '0') {
                    foreach (json_decode($order->cart_info) as $items) {
                        $uni_product       = Uni_Product::where('id', $items->id)->first();
                        $product['qty'] = $uni_product->qty - $items->qty;
                        $uni_product->fill($product)->save();
                    };
                    $message = 'Cám ơn quý khách đã tin tưởng và ủng hộ chúng tôi !!!';
                    return view('user::pages.pay.finish_pay', compact('message'));
                } else {
                    $result = '<div class="alert alert-danger"><strong>Payment status: </strong>' . $message . '/' . $localMessage . '</div>';
                    return $result;
                }
            } else {
                $result = '<div class="alert alert-danger">This transaction could be hacked, please check your signature and returned signature</div>';
                return $result;
            }
        }
    }
}
