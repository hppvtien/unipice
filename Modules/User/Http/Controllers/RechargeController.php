<?php

namespace Modules\User\Http\Controllers;
use App\Models\Cart\Uni_Order_Nap;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RechargeController extends Controller
{

    public function index()
    {
        return view('user::pages.recharge.index');
    }
    public function getPayNap(Request $request)
    {
        // dd($request->all());

        $order_data_nap = [
            'user_id' => get_data_user('web'),
            'name' => get_data_user('web','name'),
            'email' => get_data_user('web','email'),
            'address' => get_data_user('web','address'),
            'phone' => get_data_user('web','phone'),
            'type_pay' => $request->type_pay,
            'status' => 1,
            'price_nap' => $request->nap_price,
            'created_at' => Carbon::now(),

        ];
       
        $idOrderNap = Uni_Order_Nap::insertGetId($order_data_nap);
            // $order_data_nap = Uni_Order_Nap::where('id', $idOrderNap)->where('user_id', get_data_user('web'))->first();
            // if ($order_data_nap->type_pay == 2) {
            //     $url = '/thanh-toan-vnpay-nap/' . $idOrderNap;
            //     return $url;
            // } elseif ($order_data_nap->type_pay == 3) {
            //     $url = '/thanh-toan-momo-nap/' . $idOrderNap;
            //     return $url;
            // } else {
            //     $url = '/thanh-toan-nap/' . $idOrderNap;
            //     return $url;
            // }
        
    }

}
