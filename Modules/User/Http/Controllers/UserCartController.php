<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use App\Models\Cart\Uni_Order;
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
    public function deletecart(Request $request)
    {
        \Cart::remove($request->item_row);
        return redirect()->route('get_user.cart');
    }
    public function updateCart(Request $request){
        \SEOMeta::setTitle('Giỏ hàng');
        \Cart::update($request->item_row,$request->item_qty);
        $listCarts = \Cart::content();
        $view = view("user::pages.cart.include.cart_info",compact('listCarts'))->render();
        return $view;
        }
    public function generatePDF(Request $request)
    {   
        $id = $request->data_id;
        $data_pdf = Uni_Order::find($id);
        $configuration = Configuration::first();
        $data = [
            'data_pdf' => $data_pdf,
            'configuration' => $configuration
        ];
        // return view('user::pages.pay.downPDF', $data);
        $pdf = \PDF::loadView('user::pages.pay.downPDF', $data);
        return $pdf->download('hoa-don.pdf');
    }
    // public function viewPDF(Request $request)
    // {
    //     $configuration = Configuration::first();
    //     $bill_data = Bill::orderBy('id','desc')->first();
    //     $listCart = \Cart::content();
    //     $viewdata = [
    //         'configuration' => $configuration,
    //         'bill_data' => $bill_data,
    //         'listCarts'=> $listCart
    //     ];
    //     return view('user::pages.pay.viewPDF', $viewdata);
    // }

    // public function downPDF(Request $request)
    // {
    //     $configuration = Configuration::first();
    //     $bill_data = Bill::where('id_transaction',$request->id_transaction)->first();
    //     $listCart = \Cart::content();
    //     $viewdata = [
    //         'configuration' => $configuration,
    //         'bill_data' => $bill_data,
    //         'listCarts'=> $listCart
    //     ];
    //     // return view('user::pages.pay.downPDF', $viewdata);
    //     $pdf = PDF::loadView('user::pages.pay.downPDF', $viewdata);
    //     return $pdf->download('hoa-don.pdf');
    // }
}
