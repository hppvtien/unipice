<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Uni_Order;
use App\Models\Cart\Transaction;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Models\Bill;
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
    public function getPay(Request $request)
    {
        
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        $paid_total = \Cart::total(0, 0, '.');
        $total_no_vat = \Cart::subtotal(0, 0, '.');
        $vat_total = \Cart::tax(0, 0, '.');
        if ($listCarts->isEmpty()) return redirect()->to('/');
        $viewData = [
            'paid_total' => $paid_total,
            'total_no_vat' => $total_no_vat,
            'vat_total' => $vat_total,
            'listCarts' => $listCarts
        ];
        return view('user::pages.pay.index', $viewData);
    }
    public function getPaySuccsess(Request $request)
    {
        
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
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
            // 'combo_id'=>$request->combo_id,
            'cart_info'=>$listCarts,
            // 'product_sale'=>$request->method_invoice,
            // 'total_money'=>$request->method_invoice,
            'created_at'=>Carbon::now()
        ];
        $idOrder = Uni_Order::insertGetId($order_data); 
        if($idOrder){
            $order_data_sucsses = Uni_Order::find($idOrder);
            $configuration = Configuration::first();
            $viewData = [
                'order_data_sucsses' => $order_data_sucsses,
                'configuration' => $configuration
            ];
            if ($order_data_sucsses->type_pay == 4) {
                return redirect()->route('get_user.vnpaysuccsess');
            } elseif ($order_data_sucsses->type_pay == 2) {
                return redirect()->route('get_user.momosuccsess');
            } else {
                return view('user::pages.pay.succsess', $viewData);
            }
        }
        
        // $bill_data = Bill::orderBy('id', 'desc')->first();
        // $tran_data = Transaction::orderBy('id', 'desc')->first();
        // $order_data = Order::orderBy('id', 'desc')->first();
        // $viewData = [
        //     'tran_data' => $tran_data,
        //     'order_data' => $order_data,
        //     'listCarts' => $listCarts,
        //     'bill_data' => $bill_data,
        //     'configuration' => $configuration
        // ];
        
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
    public function processPayCart(Request $request)
    {
        if ($request->ajax()) {
            $vouchers = $request->vouchers;
            if($vouchers){
                $data_voucher = Voucher::where('code', $vouchers)->first();
                $check_user_voucher = User_voucher::where('user_id', get_data_user('web'))->where('voucher_id', $data_voucher->id)->first();
                if ($data_voucher->model_qty > 0 && $check_user_voucher == null && $data_voucher->expires_at > date('Y-m-d', strtotime(Carbon::now()))) {
                    if ($data_voucher) {
                        $percent_voucher = $data_voucher->model_percent;
                        $pay_Amount = (int)str_replace('đ', '', str_replace('.', '', $request->total_paid));
                        $pay_voucher = $pay_Amount * $percent_voucher / 100;
                        $method_paid = $pay_Amount - $pay_voucher;
                        Voucher::where('code', $vouchers)->update(['model_qty' => $data_voucher->model_qty - 1]);
                        $data_user_voucher = [
                            'user_id' => get_data_user('web'),
                            'voucher_id' => $data_voucher->id,
                            'redeemed_at' => Carbon::now()
                        ];
                        User_voucher::insertGetId($data_user_voucher); 
                    } else {
                        $percent_voucher = 0;
                        return response([
                            'status' => 401,
                            'messager' => 'Mã Giảm giá không chính xác'
                        ]);
                    }
                } else {
                    $percent_voucher = 0;
                    $method_paid = (int)str_replace('đ', '', str_replace('.', '', $request->total_paid));
                }
            } else {
                $percent_voucher = 0;
                $method_paid = (int)str_replace('đ', '', str_replace('.', '', $request->total_paid));
            }
            $configuration = Configuration::first();
            $data = [
                't_user_id' => get_data_user('web'),
                't_phone' => $request->method_phone,
                't_voucher' => $vouchers,
                't_total_money' => $method_paid,
                't_type_pay' => $request->type_pay ? $request->type_pay : 1,
                'created_at' => Carbon::now()
            ];
            $idTransaction = Transaction::insertGetId($data);
            if ($idTransaction) {
                $listCart = \Cart::content();
                $bill_course = array();
                $i = 0;
                foreach ($listCart as $item) {
                    $bill_course[$i++] = [
                        'id' => $item->id,
                        'qty' => $item->qty,
                        'name' => $item->name,
                        'price' => $item->price + $item->taxRate/100 * $item->price
                    ];
                }
                foreach ($listCart as $item) {
                    Order::insert([
                        'o_transaction_id' => $idTransaction,
                        'o_action_id' => $item->id,
                        'o_user_id' => get_data_user('web'),
                        'o_sale' => 0,
                        'o_price' => $method_paid,
                        'o_status' => 1
                    ]);
                }
                
            }
            $data_bill = [
                'method_invoice' => 'DH'.$idTransaction,
                'id_transaction' => $idTransaction,
                'method_course' => json_encode($bill_course),
                'method_phone' => $request->method_phone,
                'method_pay' => $request->type_pay,
                'method_email' => $request->method_email,
                'method_customer' => $request->method_customer,
                'method_customer_code' => $request->method_customer_code,
                'method_company' => $request->method_company,
                'method_address' => $request->method_address,
                'group_buy' => $request->group_buy,
                'method_paid' => $method_paid,
                'paid_total' => $request->total_paid,
                'total_no_vat' => $request->total_no_vat,
                'vat_total' => $request->vat_total,
                'method_voucher' => $vouchers,
                'method_voucher_percent' => $percent_voucher,
                'created_at' => Carbon::now(),
                'configuration' => $configuration
            ];
             Bill::insertGetId($data_bill);
             Mail::to($request->method_email)->send(new SendMail($data_bill));
            \Cart::destroy();
        }
        // return redirect()->to('/');
    }
    public function getVnPaySuccsess()
    {
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        $configuration = Configuration::first();
        $bill_data = Bill::orderBy('id', 'desc')->first();
        $tran_data = Transaction::orderBy('id', 'desc')->first();
        $order_data = Order::orderBy('id', 'desc')->first();
        $viewData = [
            'tran_data' => $tran_data,
            'order_data' => $order_data,
            'listCarts' => $listCarts,
            'bill_data' => $bill_data,
            'configuration' => $configuration
        ];
        // dd($viewData);
        return view('user::pages.pay.vnpaysuccsess', $viewData);
    }

    public function processVnPayCart(Request $request)
    {
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "I007EUZ2"; //Mã website tại VNPAY 
        $vnp_HashSecret = "VOTYNULEGABAXIXGKRZDIUPLAFLOEQUG"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('get_user.result_vnpay');
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->total_amount;
        $vnp_Amount = str_replace('đ', '', str_replace('.', '', $request->total_amount));
        $vnp_Locale = 'vn';
        $vnp_BankCode = $request->bank_code;

        $vnp_IpAddr = request()->ip();
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount * 100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
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
                't_user_id' => get_data_user('web'),
                't_phone' => $request->method_phone,
                't_type_pay' => $request->type_pay,
                't_code' => $vnp_TxnRef,
                't_note' =>  $vnp_OrderInfo
            ];
            $transaction       = Transaction::find($request->tranID);
            $transaction->fill($data)->save();
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
        $transaction       = Transaction::where('t_code', $request->vnp_TxnRef)->first();
        if ($request['vnp_ResponseCode'] == '00') {
            $data['t_status'] = 3;
            $transaction->fill($data)->save();
            echo "GD Thanh cong";
        } else {
            $data['t_status'] = -1;
            $transaction->fill($data)->save();
            echo "GD Khong thanh cong";
        }
        
    }

    public function getmomoSuccsess()
    {
        \SEOMeta::setTitle('Thanh toán');
        $listCarts = \Cart::content();
        $configuration = Configuration::first();
        $bill_data = Bill::orderBy('id', 'desc')->first();
        $tran_data = Transaction::orderBy('id', 'desc')->first();
        $order_data = Order::orderBy('id', 'desc')->first();
        $viewData = [
            'tran_data' => $tran_data,
            'order_data' => $order_data,
            'listCarts' => $listCarts,
            'bill_data' => $bill_data,
            'configuration' => $configuration
        ];
        // dd($viewData);
        return view('user::pages.pay.momosuccsess', $viewData);
    }

    public function processmomoCart(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        $partnerCode = 'MOMOFGH020210603';
        $accessKey = '9QGcOW38zWHhnWEF';
        $secretKey = '1hcI4q537bq4m1Zop3MrHS7M0t7XIuSf';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = str_replace('đ', '', str_replace('.', '', $request->total_amount));
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
            $data = [
                't_user_id' => get_data_user('web'),
                't_phone' => $request->method_phone,
                't_type_pay' => $request->type_pay,
                't_code' => $orderId,
                't_note' =>  $orderInfo
            ];
            $transaction       = Transaction::find($request->tranID);
            $transaction->fill($data)->save();
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
