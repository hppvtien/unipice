<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Uni_Order;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use App\Models\Configuration;
use App\Models\Voucher;
use App\Models\User_voucher;
use Modules\Admin\Http\Requests\BillRequest;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Mail as FacadesMail;

class UserPayController extends UserController
{
    public function getPay()
    {
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        if ($listCarts->isEmpty()) return redirect()->to('/');
        $viewData = [
     
            'listCarts' => $listCarts
        ];
        // dd($viewData);
        return view('user::pages.pay.index', $viewData);
    }
    public function getPaySuccsess(Request $request)
    { 
       
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        // $total_money = \Cart::total(0,0,'.');
        $order_data = [
            'user_id'=>get_data_user('web'),
            'code_invoice'=>$request->code_invoice,
            'vouchers'=>$request->vouchers,
            'customer_name'=>$request->customer_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'taxcode'=>$request->taxcode,
            'type_pay'=>$request->type_pay,
            'cart_info'=>$listCarts,
            'total_money'=>\Cart::total(0,0,'.'),
            'created_at'=>Carbon::now()
        ];
        
        $idOrder = Uni_Order::insertGetId($order_data); 
        
        // \Cart::destroy();
        if($idOrder){
            $order_data_sucsses = Uni_Order::where('id',$idOrder)->where('user_id',get_data_user('web'))->first();
            if ($order_data_sucsses->type_pay == 4) {
                $url = '/thanh-toan-vnpay/'.$idOrder;
                return $url;
            } elseif ($order_data_sucsses->type_pay == 2) {
                $url = '/thanh-toan-momo/'.$idOrder;
                return $url;
            } else {
                $url = '/thanh-toan/'.$idOrder;
                return $url;
            }
        }
    }
    public function getSuccsess(Request $request, $id){
        $order = Uni_Order::find($id); 
        return view('user::pages.pay.succsess',compact('order'));
    }
    public function check_vouchers(Request $request)
    {
        $check_vouchers = $request->check_vouchers;
        $data_voucher = Voucher::where('code', $check_vouchers)->first();
        if ($data_voucher) {
           if($data_voucher->expires_at > date('Y-m-d', strtotime(Carbon::now()))){
                if ($data_voucher->model_qty > 0) {
                    $check_user_voucher = User_voucher::where('user_id', get_data_user('web'))->where('voucher_id', $data_voucher->id)->first();
                    if ($check_user_voucher) {
                        $message = 'Bạn đã sử dụng mã giảm giá này';
                        return $message;
                    } else {
                        $message = 'Nhập mã giảm giá thành công';
                        return $message;
                    }
                } else {
                    $message = 'Mã giảm giá này tạm thời đã hết';
                    return $message;
                }
           }else{
            $message = 'Mã giảm giá hết hạn';
            return $message;
           }
        } else {
            $message = 'Vui lòng kiểm tra lại mã giảm giá';
            return $message;
        }
    }
    
    public function getVnPaySuccsess(Request $request, $id)
    {
        $order = Uni_Order::find($id); 
        return view('user::pages.pay.vnpaysuccsess',compact('order'));
    }

    public function processVnPayCart(Request $request, $id)
    {
        $order = Uni_Order::find($id); 
       
        session(['cost_id' => $id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "I007EUZ2"; //Mã website tại VNPAY 
        $vnp_HashSecret = "VOTYNULEGABAXIXGKRZDIUPLAFLOEQUG"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
      
        $vnp_Returnurl = route('get_user.result_vnpay');
        
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $order->total_money;
        $vnp_Amount = str_replace('đ', '', str_replace('.', '', $order->total_money));
        $vnp_Locale = 'vn';
        $vnp_BankCode = $request->bank_code;
    
        $vnp_IpAddr = request()->ip();
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $order->total_money * 100,
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
        // dd($inputData);

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
                'pay_note' =>  $vnp_OrderInfo
            ];
            $order->fill($data)->save();
            \Cart::destroy();
            return $vnp_Url;
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
            $data['status'] = 3;
            $order->fill($data)->save();
            echo "GD Thanh cong";
        } else {
            $data['status'] = -1;
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
       
            \Cart::destroy();
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
            $transaction       = Transaction::where('t_code', $orderId)->first();

            $data['t_note_message'] = $errorCode . '-' . $localMessage . '[' . $responseTime . ']';
            if ($errorCode == '0') {
                $data['t_status'] = 3;
            } else {
                $data['t_status'] = -1;
            }
            $transaction->fill($data)->save();
            $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
                "&orderType=" . $orderType . "&transId=" . $transId . "&message=" . $message . "&localMessage=" . $localMessage . "&responseTime=" . $responseTime . "&errorCode=" . $errorCode .
                "&payType=" . $payType . "&extraData=" . $extraData;

            $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);

            echo "<script>console.log('Debug huhu Objects: " . $rawHash . "' );</script>";
            echo "<script>console.log('Debug huhu Objects: " . $partnerSignature . "' );</script>";


            if ($m2signature == $partnerSignature) {
                if ($errorCode == '0') {
                    $result = '<div class="alert alert-success"><strong>Payment status: </strong>Success</div>';
                    return $result;
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
