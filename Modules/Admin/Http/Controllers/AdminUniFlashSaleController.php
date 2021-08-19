<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_FlashSale;
use App\Models\Uni_Product;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
 use Modules\Admin\Http\Requests\AdminFlashSaleRequest;

class AdminUniFlashSaleController extends AdminController
{
    public function index()
    {
        $uni_flashsale = Uni_FlashSale::orderByDesc('id')->get();
        $viewData = [
            'uni_flashsale' => $uni_flashsale
        ];
        return view('admin::pages.uni_flashsale.index', $viewData);
    }

    public function create()
    {
        $status = Uni_FlashSale::getStatusGlobal();
        $uni_product = Uni_Product::orderByDesc('id')->get();
        $uni_flashsale = [];
        $viewData = [
            'uni_product' => $uni_product,
            'uni_flashsale' => $uni_flashsale,
            'status' => $status,

        ];
        return view('admin::pages.uni_flashsale.create', $viewData);
    }

    public function store(AdminFlashSaleRequest $request)
    {
        $data                 = $request->except(['thumbnail', 'save', '_token']);
        $data['created_at']   = Carbon::now();
        $product_sale = [];
        foreach ($request->product_sale as $item) {
            if (count($item) == 4) {
                $product_sale[] = $item;
            }
        }
        
        $data['info_sale'] = json_encode($product_sale);
       
        $param = [
            "type_buy" => $request->type_buy,
            "name" => $request->name,
            "slug" => $request->slug,
            "is_flash" => $request->is_flash,
            "desscription" => $request->desscription,
            "price" => $request->price_all_subtotal,
            "sale_off" => $request->sale_off,
            "qty" => $request->qty,
            "content" => $request->content,
            "meta_title" => $request->meta_title,
            "meta_desscription" => $request->meta_desscription,
            "status" => $request->status,
            "thumbnail" => $request->thumbnail,
            "created_at" => $data['created_at'],
            "info_sale" => $data['info_sale']
        ];
        $storeID = Uni_FlashSale::insertGetId($param);

        if ($storeID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_flashsale.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }
    public function edit($id)
    {
        $status = Uni_FlashSale::getStatusGlobal();
        $uni_product      = Uni_Product::get();
        $uni_flashsale     = Uni_FlashSale::findOrFail($id);
        foreach($uni_product as $key => $item){
            foreach(json_decode($uni_flashsale->info_sale) as $keys => $items){
                if($items->id == $item['id']){
                    $item['flash_sale'] = $items;
                }
            }
        }
        $viewData = [
            'uni_flashsale'       => $uni_flashsale,
            'uni_product'       => $uni_product,
            'status'       => $status
        ];

        return view('admin::pages.uni_flashsale.update', $viewData);
    }
    public function update(AdminFlashSaleRequest $request, $id)
    {
    
        if ($request) {
            $uni_flashsale             = Uni_FlashSale::findOrFail($id);
            $data               = $request->except(['thumbnail', 'save', '_token']);
            $data['updated_at'] = Carbon::now();
            $product_sale = [];
            foreach ($request->product_sale as $item) {
                if (count($item) == 4) {
                    $product_sale[] = $item;
                }
            }
            $data['info_sale'] = json_encode($product_sale);
            if ($request->thumbnail) {
                $thumbnail = $request->thumbnail;
                Storage::delete('public/uploads/' . $uni_flashsale->thumbnail);
            } else {
                $thumbnail = $uni_flashsale->thumbnail;           
            }

            $param = [
                "type_buy" => $request->type_buy,
                "name" => $request->name,
                "slug" => $request->slug,
                "is_flash" => $request->is_flash,
                "desscription" => $request->desscription,
                "price" => $request->price_all_subtotal,
                "qty" => $request->qty,
                "content" => $request->content,
                "meta_title" => $request->meta_title,
                "meta_desscription" => $request->meta_desscription,
                "status" => $request->status,
                "sale_off" => date("Y/m/d", strtotime($request->sale_off)),
                "thumbnail" => $thumbnail,
                "updated_at" => $data['updated_at'],
                "info_sale" => $data['info_sale']
            ];
            $uni_flashsale->fill($param)->save();
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_flashsale.index');
        }
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $product = Uni_FlashSale::findOrFail($id);
            if ($product) {             
                Storage::delete('public/uploads/' . $product->thumbnail);
                $product->delete();
            }
            return response()->json([
                'status'  => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
