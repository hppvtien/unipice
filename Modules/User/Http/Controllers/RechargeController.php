<?php

namespace Modules\User\Http\Controllers;
use App\Models\Cart\Uni_Order_Nap;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BankInfo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RechargeController extends Controller
{

    public function index()
    {
        return view('user::pages.recharge.index');
    }
    // public function index_up()
    // {
    // return view('user::pages.recharge.indexup');
    // }
    public function index_up_pos(Request $request, $id)
    {
        // $uni_order = Uni_Order_Nap::where('user_id', $id)->where('status', 4)->first();
        // $order_data_naps = [
        //     'status' => 5,
        // ];
        // $uni_order->fill($order_data_naps)->save();
       
        $order_data_nap = [
            'user_id' => get_data_user('web'),
            'name' => get_data_user('web','name'),
            'email' => get_data_user('web','email'),
            'address' => get_data_user('web','address'),
            'phone' => get_data_user('web','phone'),
            'type_pay' => $request->type_pay,
            'status' => 0,
            'price_nap' => $request->price_nap,
            'created_at' => Carbon::now(),

        ];

        $idOrderNap = Uni_Order_Nap::insertGetId($order_data_nap);
            $order_data_nap = Uni_Order_Nap::where('id', $idOrderNap)->where('user_id', get_data_user('web'))->first();
            if ($order_data_nap->type_pay == 4) {
                return redirect()->route('get_user.vnpaysuccsess.nap', $idOrderNap);
            } elseif ($order_data_nap->type_pay == 2) {
                return redirect()->route('get_user.momosuccsess.nap', $idOrderNap);
            } else {
                return redirect()->route('get_user.paysuccsess.nap', $idOrderNap);
            }
    }
    public function getSuccsess(Request $request, $id)
    {
        $order = Uni_Order_Nap::find($id);
        $bank_info = BankInfo::where('status',1)->first();
        $viewData=[
            'bank_info'=>$bank_info,
            'order'=>$order
        ];
        return view('user::pages.nap.succsess', $viewData);
    }
    public function getPayNap(Request $request)
    {
        $order_data_nap = [
            'user_id' => get_data_user('web'),
            'name' => get_data_user('web','name'),
            'email' => get_data_user('web','email'),
            'address' => get_data_user('web','address'),
            'phone' => get_data_user('web','phone'),
            'type_pay' => $request->type_pay,
            'status' => 0,
            'price_nap' => $request->price_nap,
            'created_at' => Carbon::now(),

        ];

        $idOrderNap = Uni_Order_Nap::insertGetId($order_data_nap);
            $order_data_nap = Uni_Order_Nap::where('id', $idOrderNap)->where('user_id', get_data_user('web'))->first();
            if ($order_data_nap->type_pay == 4) {
                return redirect()->route('get_user.vnpaysuccsess.nap', $idOrderNap);
            } elseif ($order_data_nap->type_pay == 2) {
                return redirect()->route('get_user.momosuccsess.nap', $idOrderNap);
            } else {
                return redirect()->route('get_user.paysuccsess.nap', $idOrderNap);
            }
    }
        
    public function getVnPaySuccsess(Request $request, $id)
    {
        $order = Uni_Order_Nap::find($id);
        return view('user::pages.nap.vnpaysuccsess', compact('order'));
    }

    public function processVnPayCart(Request $request, $id)
    {
        $order = Uni_Order_Nap::find($id);
        session(['cost_id' => $id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "I007EUZ2"; //Mã website tại VNPAY 
        $vnp_HashSecret = "VOTYNULEGABAXIXGKRZDIUPLAFLOEQUG"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";

        $vnp_Returnurl = route('get_user.result_vnpay');

        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán đơn hàng phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = (int)$order->price_nap * 100;
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
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            $data = [
                'pay_code' => $vnp_TxnRef,
                'pay_note' =>  $vnp_OrderInfo,
            ];
            $order->fill($data)->save();
            return $vnp_Url;
        }
        
    }

    public function returnvnpay(Request $request)
    {
        $errorCode = $request->vnp_ResponseCode;
        $localMessage = $request->vnp_OrderInfo;
        $responseTime = $request->vnp_PayDate;
        $data['t_note_message'] = $errorCode . '-' . $localMessage . '[' . $responseTime . ']';
        $order       = Uni_Order_Nap::where('pay_code', $request->vnp_TxnRef)->first();

        if ($request['vnp_ResponseCode'] == '00') {
            $data['status'] = 1;
            $order->fill($data)->save();
            $message = 'Cám ơn quý khách đã tin tưởng và ủng hộ chúng tôi !!!';
            return view('user::pages.nap.finish_pay', compact('message'));
        } else {
            $data['status'] = 0;
            $order->fill($data)->save();
            echo "GD Không thành công";
        }
    }



    public function getmomoSuccsess(Request $request, $id)
    {
        $order = Uni_Order_Nap::find($id);
        // dd($viewData);
        return view('user::pages.nap.momosuccsess', compact('order'));
    }

    public function processmomoCart(Request $request, $id)
    {
        $order = Uni_Order_Nap::find($id);

        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        $partnerCode = 'MOMOFGH020210603';
        $accessKey = '9QGcOW38zWHhnWEF';
        $secretKey = '1hcI4q537bq4m1Zop3MrHS7M0t7XIuSf';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = '1000000';

        // $amount = '10000';
        $orderId = time() . "";
        $returnUrl = route('get_user.result_momo.nap');

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
                't_phone' => $order->phone,
                't_type_pay' => $order->type_pay,
                't_code' => $orderId,
                't_note' =>  $orderInfo
            ];
            $order->fill($data_mm)->save();
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
            $order       = Uni_Order_Nap::where('pay_code', $orderId)->first();
            // dd($order);
            $data['pay_node'] = $errorCode . '-' . $localMessage . '[' . $responseTime . ']';
            if ($errorCode == '0') {
                $data['status'] = 1;
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
                    $message = 'Cám ơn quý khách đã tin tưởng và ủng hộ chúng tôi !!!';
                    return view('user::pages.nap.finish_pay', compact('message'));
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
