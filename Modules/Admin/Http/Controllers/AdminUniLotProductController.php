<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Supplier;
use App\Models\Uni_Size;
use App\Models\Uni_Product;
use App\Models\Uni_LotProduct;
use App\Models\ProductLotProduct;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniLotProductRequest;

class AdminUniLotProductController extends AdminController
{
    public function index()
    {
       
        $uni_lotproduct = Uni_LotProduct::orderByDesc('id')
            ->paginate(20);
       
        $viewData = [
            'uni_lotproduct' => $uni_lotproduct
        ];
        return view('admin::pages.uni_lotproduct.index', $viewData);
    }
    public function importview($id)
    {
        $uni_product= Uni_Product::where('id', $id)->first();
        $uni_size = Uni_Size::orderByDesc('id')->get();
        $uni_supplier = Uni_Supplier::orderByDesc('id')->get();
        $uni_lotproduct  = Uni_LotProduct::where('product_id', $id)->orderby('created_at', 'asc')->get();
        foreach ($uni_lotproduct as $key => $item) {
            if ($item->export_qty != null) {
                $item['total_export'] = array_sum(json_decode($item->export_qty));
                if ($item->total_qty == $item['total_export']) {
                    $item['status'] = 0;
                } else {
                    $item['status'] = 1;
                }
            } else {
                $item['total_export'] = 0;
            }

            if ($item->qty == 0) {
                $item['status'] = 0;
                $item['key_lot'] = 0;
            } else {
                $item['status'] = 1;
                $item['key_lot'] = $key + 1;
            }
        }
        $viewData = [
            'uni_size' => $uni_size,
            'uni_supplier' => $uni_supplier,
            'uni_product' => $uni_product,
            'uni_lotproduct' => $uni_lotproduct,
        ];
        return view('admin::pages.uni_lotproduct.lotpruduct', $viewData);
    }
    public function import(AdminUniLotProductRequest $request, $id)
    {
        $data = $request->except(['save','_token']);
        $data['created_at'] = Carbon::now();
        $data['product_id'] = $id;
        $data['expiry_date'] = $request->expiry_date;
        $data['qty'] = $request->qty_box * $request->size_box;
        $data['total_qty'] = $request->qty_box * $request->size_box;
        $lotproductID = Uni_LotProduct::insertGetId($data);
        if($lotproductID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_lotproduct.import',$id);
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function create()
    {
        $uni_lotproduct = Uni_LotProduct::orderByDesc('id')->get();
        $uni_size = Uni_Size::orderByDesc('id')->get();
        $uni_product= Uni_Product::orderByDesc('id')->get();
        $uni_supplier = Uni_Supplier::orderByDesc('id')->get();
        $viewData = [
            'uni_lotproduct' => $uni_lotproduct,
            'uni_size' => $uni_size,
            'uni_supplier' => $uni_supplier,
            'uni_product' => $uni_product
        ];
        return view('admin::pages.uni_lotproduct.create',$viewData);
    }

    public function store(AdminUniLotProductRequest $request)
    {
        $data = $request->except(['save','_token']);
        $data['created_at'] = Carbon::now();
        $data['expiry_date'] = $request->expiry_date;
        $data['qty'] = $request->qty_box * $request->size_box;
        $data['total_qty'] = $request->qty_box * $request->size_box;
        $lotproductID = Uni_LotProduct::insertGetId($data);
        if($lotproductID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_lotproduct.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $lotproduct = Uni_LotProduct::findOrFail($id);
        $uni_lotproduct = Uni_LotProduct::orderByDesc('id')->get();
        $uni_size = Uni_Size::orderByDesc('id')->get();
        $uni_supplier = Uni_Supplier::orderByDesc('id')->get();
        $uni_product= Uni_Product::orderByDesc('id')->get();
        $viewData = [
            'lotproduct' => $lotproduct,
            'uni_lotproduct' => $uni_lotproduct,
            'uni_size' => $uni_size,
            'uni_supplier' => $uni_supplier,
            'uni_product' => $uni_product
        ];
        return view('admin::pages.uni_lotproduct.update',$viewData);
    }

    public function update(AdminUniLotProductRequest $request, $id)
    {
        
        $uni_lotproduct = Uni_LotProduct::findOrFail($id);
        $data = $request->except(['save','_token']);
        $data['updated_at'] = Carbon::now();

        $uni_lotproduct->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_lotproduct.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_LotProduct::findOrFail($id);
            if ($menu)
            {
                $menu->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
