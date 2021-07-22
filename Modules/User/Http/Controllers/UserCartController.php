<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use App\Models\Bill;
use Carbon\Carbon;
use PDF;

class UserCartController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Giỏ hàng');
        $listCarts = \Cart::content();
        if ($listCarts->isEmpty()) return redirect()->to('/');
        return view('user::pages.cart.index', compact('listCarts'));
    }
    public function deletecart($id)
    {
        \Cart::remove($id);
        return redirect()->route('get_user.cart');
    }
    public function generatePDF()
    {
        $listCarts = \Cart::content();
        $data = [
            'date' => date('m/d/Y'),
            'listCarts' => $listCarts
        ];
        return view('user::pages.pay.myPDF', $data);
    }
    public function viewPDF(Request $request)
    {
        $configuration = Configuration::first();
        $bill_data = Bill::orderBy('id','desc')->first();
        $listCart = \Cart::content();
        $viewdata = [
            'configuration' => $configuration,
            'bill_data' => $bill_data,
            'listCarts'=> $listCart
        ];
        return view('user::pages.pay.viewPDF', $viewdata);
    }

    public function downPDF(Request $request)
    {
        $configuration = Configuration::first();
        $bill_data = Bill::where('id_transaction',$request->id_transaction)->first();
        $listCart = \Cart::content();
        $viewdata = [
            'configuration' => $configuration,
            'bill_data' => $bill_data,
            'listCarts'=> $listCart
        ];
        // return view('user::pages.pay.downPDF', $viewdata);
        $pdf = PDF::loadView('user::pages.pay.downPDF', $viewdata);
        return $pdf->download('hoa-don.pdf');
    }
}
