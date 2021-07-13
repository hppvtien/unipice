<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Size;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $data = $request->except(['avatar','save','_token']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

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
        $data = $request->except(['avatar','save','_token']);
        $data['updated_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

        $uni_size->fill($data)->save();
        RenderUrlSeoBLogService::update($request->slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_size.index');
    }

    public function delete(AdminUniSizeRequest $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Size::findOrFail($id);
            if ($menu)
            {
                $menu->delete();
                RenderUrlSeoBLogService::deleteUrlSeo(SeoBlog::TYPE_MENU, $id);
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}