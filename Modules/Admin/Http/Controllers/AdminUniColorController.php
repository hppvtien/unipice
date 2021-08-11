<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Color;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniColorRequest;

class AdminUniColorController extends AdminController
{
    public function index()
    {
        $uni_color = Uni_Color::orderByDesc('order')
            ->paginate(20);

        $viewData = [
            'uni_color' => $uni_color
        ];
        return view('admin::pages.uni_color.index', $viewData);
    }

    public function create()
    {
        $uni_color = Uni_Color::orderByDesc('order')->get();

        return view('admin::pages.uni_color.create',compact('uni_color'));
    }

    public function store(AdminUniColorRequest  $request)
    {
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->nameta_titleme;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $menuID = Uni_Color::insertGetId($data);
        if($menuID)
        {
            $this->showMessagesSuccess();
            RenderUrlSeoBLogService::init($request->m_slug,SeoBlog::TYPE_MENU, $menuID);
            return redirect()->route('get_admin.uni_color.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $color = Uni_Color::findOrFail($id);
        $uni_color = Uni_Color::orderByDesc('order')->get();
        return view('admin::pages.uni_color.update',compact('color','uni_color'));
    }

    public function update(AdminUniColorRequest $request, $id)
    {
        $uni_color = Uni_Color::findOrFail($id);
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['updated_at'] = Carbon::now();
        if ($request->banner){
            Storage::delete('public/uploads/'.$request->delete_thumbnail);    
            $data['banner'] = $request->banner;
        } elseif (!$request->banner) {
            $data['banner'] = $request->delete_thumbnail;         
        
        } elseif ($request->banner && !$uni_color->banner) {
            $data['banner'] = $request->banner;         
        }
        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $uni_color->fill($data)->save();
        RenderUrlSeoBLogService::update($request->m_slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_color.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Color::findOrFail($id);
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
