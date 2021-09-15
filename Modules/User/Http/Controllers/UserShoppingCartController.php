<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Product_Size;
use App\Models\Uni_FlashSale;
use App\Models\Uni_Store;
use App\Models\Cart\Uni_Order_Nap;
use Gloudemans\Shoppingcart\Cart;
class UserShoppingCartController extends UserController
{
    const COMBO = 'combo';
    const SINGLE = 'single';
    public function processCart(Request $request, $id, $type)
    {
        if ($request->ajax()) {
            if ($type == self::COMBO) {
                // xử lý dữ liệu với san pham
                $uni_combo = $this->checkCombo($id);

                $product_vat = 0;
                foreach(json_decode($uni_combo->info_sale) as $item){
                    $vat_per = getVatProduct($item->id);
                    $product_vat += $item->price_subtotal * $vat_per/100;
                }
                $type_box = 'combo';
                if (!$uni_combo) {
                    return response([
                        'status' => 404
                    ]);
                }
                $listCarts = \Cart::content();
                // Kierm tra xem đã lưu san pham chưa
                $checkExist = $listCarts->search(function ($cartItem) use ($id) {
                    if ($cartItem->id == $id) return $id;
                });

                // Nếu chưa có giỏ hàng thì mặc định thêm
                if ($listCarts->isEmpty() || !$checkExist) {
                    Log::info("[Cart]: Empty");
                    \Cart::add([
                        'id' => $id,
                        'name' => $uni_combo->name,
                        'qty' => 1,
                        'price' => $uni_combo->price,
                        'weight' => 1,
                        'options' => [
                            'images' => pare_url_file($uni_combo->thumbnail),
                            'sale' => $type_box,
                            'product_vat' => $product_vat ,

                        ]
                    ]);
                }
                return response([
                    'status' => 200,
                    'message' => !$checkExist ? "Thêm sản phẩm thành công" : "Sản phẩm đã có trong giỏ",
                    'count' => count($listCarts)
                ]);
            } else {
                $uni_product = $this->checkProduct($id);
                $product_size = $this->checkProductSize($id,$request->data_size);
                $uni_store = $this->checkStore($request->data_uid);
                $uni_spiceclub = $this->checkSpiceClub($request->data_uid);
                if ($uni_store != null) {
                    $price_cart = $request->data_qtyinbox * $request->data_price;
                    $type_box = 'store';
                    $qty_cart = $request->data_minbox;
                    $product_vat = ($uni_product->product_vat * $price_cart * $qty_cart)/100;
                } else {
                    $price_cart = $request->data_price;
                    $type_box = 'user';
                    $qty_cart = $request->qty_user;
                    $product_vat = ($uni_product->product_vat * $price_cart * $qty_cart)/100;
                }
                if (!$uni_product) {
                    return response([
                        'status' => 404
                    ]);
                }
                $data_size = round($request->data_size,2);
                $listCarts = \Cart::content();

                // Kierm tra xem đã lưu san pham chưa
                $checkExist = $listCarts->search(function ($cartItem) use ($data_size,$id) {
                    if ($cartItem->weight == $data_size && $cartItem->id == $id)
                    return $id;
                });
                // $checkExistw = $listCarts->search(function ($cartItem) use ($data_size) {
                //     if ($cartItem->weight == $data_size) return $data_size;
                // });
                // Nếu chưa có giỏ hàng thì mặc định thêm
                if($listCarts->isEmpty() || !$checkExist){
                    Log::info("[Cart]: Empty");
                    \Cart::add([
                        'id' => $id,
                        'name' => $uni_product->name,
                        'qty' => $qty_cart,
                        'price' => $price_cart,
                        'weight' => $data_size,
                        'options' => [
                            'images' => pare_url_file($uni_product->thumbnail),
                            'sale' => $type_box,
                            'product_vat' => $product_vat ,

                        ],
                    ]);
                }
                $count_cart = count($listCarts);
                return response([
                    'status' => 200,
                    'message' => $checkExist ? "Sản phẩm đã có trong giỏ" : "Thêm sản phẩm thành công",
                    'count' => $count_cart
                ]);
            }
        }
    }

    protected function checkProduct($id)
    {
        return Uni_Product::find($id);
    }
    protected function checkProductSize($id,$size_id)
    {
        return Product_Size::where('product_id',$id)->where('size_id',$size_id)->first();
    }

    protected function checkCombo($id)
    {
        return Uni_FlashSale::find($id);
    }
    protected function checkStore($id)
    {
        return Uni_Store::where('user_id', $id)->where('store_status', 1)->pluck('id')->first();
    }
    protected function checkSpiceClub($id)
    {
        return Uni_Order_Nap::where('user_id', $id)->where('status', 2)->pluck('id')->first();
    }
}
