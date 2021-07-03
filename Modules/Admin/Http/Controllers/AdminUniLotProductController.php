<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_supplier;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniSupplierRequest;

class AdminUniLotProductController extends AdminController
{
    public function index()
    {
       
        $uni_supplier = Uni_supplier::orderByDesc('id')
            ->paginate(20);
       
        $viewData = [
            'uni_supplier' => $uni_supplier
        ];
        return view('admin::pages.uni_supplier.index', $viewData);
    }

    public function create()
    {
        $uni_supplier = Uni_supplier::orderByDesc('id')->get();
        return view('admin::pages.uni_supplier.create',compact('uni_supplier'));
    }

    public function store(AdminUniSupplierRequest $request)
    {
        $data = $request->except(['avatar','save','_token']);
        $data['created_at'] = Carbon::now();

        $menuID = Uni_supplier::insertGetId($data);
        if($menuID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_supplier.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $supplier = Uni_supplier::findOrFail($id);
        $uni_supplier = Uni_supplier::orderByDesc('id')->get();
        return view('admin::pages.uni_supplier.update',compact('supplier','uni_supplier'));
    }

    public function update(AdminUniSupplierRequest $request, $id)
    {
        $uni_supplier = Uni_supplier::findOrFail($id);
        $data = $request->except(['avatar','save','_token']);
        $data['updated_at'] = Carbon::now();

        $uni_supplier->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_supplier.index');
    }


    public function delete(AdminUniSupplierRequest $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_supplier::findOrFail($id);
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
