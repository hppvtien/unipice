<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Supplier;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniSupplierRequest;

class AdminUniSupplierController extends AdminController
{
    public function index()
    {
       
        $uni_supplier = Uni_Supplier::orderByDesc('id')
            ->paginate(20);
       
        $viewData = [
            'uni_supplier' => $uni_supplier
        ];
        return view('admin::pages.uni_supplier.index', $viewData);
    }

    public function create()
    {
        $uni_supplier = [];
        return view('admin::pages.uni_supplier.create',compact('uni_supplier'));
    }

    public function store(AdminUniSupplierRequest $request)
    {
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['created_at'] = Carbon::now();

        $menuID = Uni_Supplier::insertGetId($data);
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
        $uni_supplier = Uni_Supplier::findOrFail($id);
        // $uni_supplier = Uni_supplier::orderByDesc('id')->get();
        return view('admin::pages.uni_supplier.update',compact('uni_supplier'));
    }

    public function update(AdminUniSupplierRequest $request, $id)
    {
        $uni_supplier = Uni_Supplier::findOrFail($id);
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['updated_at'] = Carbon::now();
        if ($request->banner){
            Storage::delete('public/uploads/'.$request->delete_thumbnail);    
            $data['banner'] = $request->banner;
        } elseif (!$request->banner) {
            $data['banner'] = $request->delete_thumbnail;         
        
        } elseif ($request->banner && !$uni_supplier->banner) {
            $data['banner'] = $request->banner;         
        }
        $uni_supplier->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_supplier.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Supplier::findOrFail($id);
            if ($menu)
            {
                Storage::delete('public/uploads/'.$menu->banner);
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
