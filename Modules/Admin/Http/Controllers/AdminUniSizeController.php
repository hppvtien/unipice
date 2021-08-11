<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Size;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniSizeRequest;

class AdminUniSizeController extends AdminController
{
    public function index()
    {
        $uni_size = Uni_Size::orderByDesc('order')
            ->paginate(20);

        $viewData = [
            'uni_size' => $uni_size
        ];
        return view('admin::pages.uni_size.index', $viewData);
    }

    public function create()
    {
        $uni_size = Uni_Size::orderByDesc('order')->get();

        return view('admin::pages.uni_size.create',compact('uni_size'));
    }

    public function store(AdminUniSizeRequest  $request)
    {
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $menuID = Uni_Size::insertGetId($data);
        if($menuID)
        {
            $this->showMessagesSuccess();
            RenderUrlSeoBLogService::init($request->slug,SeoBlog::TYPE_MENU, $menuID);
            return redirect()->route('get_admin.uni_size.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $size = Uni_Size::findOrFail($id);
        $uni_size = Uni_Size::orderByDesc('order')->get();
        return view('admin::pages.uni_size.update',compact('size','uni_size'));
    }

    public function update(AdminUniSizeRequest $request, $id)
    {
        $uni_size = Uni_Size::findOrFail($id);
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['updated_at'] = Carbon::now();
        if ($request->banner){
            Storage::delete('public/uploads/'.$request->delete_thumbnail);    
            $data['banner'] = $request->banner;
        } elseif (!$request->banner) {
            $data['banner'] = $request->delete_thumbnail;         
        
        } elseif ($request->banner && !$uni_size->banner) {
            $data['banner'] = $request->banner;         
        }
        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $uni_size->fill($data)->save();
        RenderUrlSeoBLogService::update($request->slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_size.index');
    }

    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Size::findOrFail($id);
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
