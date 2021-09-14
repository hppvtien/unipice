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
    public function deleteAllCart(Request $request)
    {
        if($request){
            \Cart::destroy();
            $url_rd = '/san-pham.html';
        }
        return $url_rd;
        
    }
    public function updateCart(Request $request)
    {
        
        $listCarts = \Cart::content();
        foreach ($request->cart['qty'] as $key => $item) {
            \Cart::update(
                $key,
                [
                    'qty' => (int)$item[0],
                    'options' => [
                        "images" => $listCarts[$key]->options['images'],
                        "sale" => $listCarts[$key]->options['sale'],
                        'product_vat' => (int)$item[0] * (getVatProduct($listCarts[$key]->id) * $listCarts[$key]->price / 100)
                    ]
                ]
            );
        }
        
        return redirect()->route('get_user.cart');

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
        return view('user::pages.pay.downPDF', $data);
        // $pdf = \PDF::loadView('user::pages.pay.downPDF', $data);
        // return $pdf->download('don-hang-' . $data_pdf->code_invoice . '.pdf');
    }
}
