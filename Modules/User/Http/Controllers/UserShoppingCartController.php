<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Uni_FlashSale;
use App\Models\Uni_Store;

class UserShoppingCartController extends UserController
{
    const COMBO = 'combo';
    const SINGLE = 'single';
    public function processCart(Request $request, $id, $type)
    {
        if ($request->ajax())
        {
            if($type == self::COMBO)
            {
                // xử lý dữ liệu với khoá học
                $uni_combo = $this->checkCombo($id);
                if (!$uni_combo){
                    return response([
                       'status' => 404
                    ]);
                }

                $listCarts = \Cart::content();
                // Kierm tra xem đã lưu khoá học chưa
                $checkExist = $listCarts->search(function ($cartItem) use ($id) {
                    if($cartItem->id == $id) return $id;
                });

                // Nếu chưa có giỏ hàng thì mặc định thêm
                if($listCarts->isEmpty() || !$checkExist) {
                    Log::info("[Cart]: Empty" );
                    \Cart::add([
                        'id' => $id,
                        'name' => $uni_combo->name,
                        'qty' => 1,
                        'price' => $uni_combo->price,
                        'weight' => 1,
                        'options' => [
                            'images' => $uni_combo->thumbnail
                        ]
                    ]);
                }
                return response([
                    'status' => 200,
                    'message' => !$checkExist ? "Đã thêm khóa học vào giỏ" : "Khoá học đã có trong giỏ"
                ]);
                
            }else{ 

                // xử lý dữ liệu với khoá học
                $uni_product = $this->checkProduct($id);
                $uni_store = $this->checkStore($id);
                if($uni_store){
                    $price_cart = $uni_product->price_sale_store;
                } else {
                    $price_cart = $uni_product->price;
                }
                if (!$uni_product){
                    return response([
                       'status' => 404
                    ]);
                }

                $listCarts = \Cart::content();
                // Kierm tra xem đã lưu khoá học chưa
                $checkExist = $listCarts->search(function ($cartItem) use ($id) {
                    if($cartItem->id == $id) return $id;
                });

                // Nếu chưa có giỏ hàng thì mặc định thêm
                if($listCarts->isEmpty() || !$checkExist) {
                    Log::info("[Cart]: Empty" );
                    \Cart::add([
                        'id' => $id,
                        'name' => $uni_product->name,
                        'qty' => 1,
                        'price' => $price_cart,
                        'weight' => 1,
                        'options' => [
                            'images' => $uni_product->thumbnail
                        ]
                    ]);
                }
                return response([
                    'status' => 200,
                    'message' => !$checkExist ? "Đã thêm khóa học vào giỏ" : "Khoá học đã có trong giỏ"
                ]);
            }
        }
    }

    protected function checkProduct($id)
    {
        return Uni_Product::find($id);
    }

    protected function checkCombo($id)
    {
        return Uni_FlashSale::find($id);
    }
    protected function checkStore($id)
    {
        return Uni_Store::where('user_id',$id)->first();
    }
}

   
