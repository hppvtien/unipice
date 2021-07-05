<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Tag;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniTagRequest;

class AdminUniTagController extends AdminController
{
    public function index()
    {
        $uni_tag = Uni_Tag::orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'uni_tag' => $uni_tag
        ];
        return view('admin::pages.uni_tag.index', $viewData);
    }

    public function create()
    {
        $uni_tag = Uni_Tag::orderByDesc('id')->get();

        return view('admin::pages.uni_tag.create',compact('uni_tag'));
    }

    public function store(AdminUniTagRequest  $request)
    {
        $data = $request->except(['save','_token']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

        $menuID = Uni_Tag::insertGetId($data);
        if($menuID)
        {
            $this->showMessagesSuccess();
            RenderUrlSeoBLogService::init($request->slug,SeoBlog::TYPE_MENU, $menuID);
            return redirect()->route('get_admin.uni_tag.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $tags = Uni_Tag::findOrFail($id);
        $uni_tag = Uni_Tag::orderByDesc('id')->get();
        return view('admin::pages.uni_tag.update',compact('tags','uni_tag'));
    }

    public function update(AdminUniTagRequest $request, $id)
    {
        $uni_tag = Uni_Tag::findOrFail($id);
        $data = $request->except(['save','_token']);
        $data['updated_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

        $uni_tag->fill($data)->save();
        RenderUrlSeoBLogService::update($request->slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_tag.index');
    }

    public function delete(AdminUniTagRequest $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Tag::findOrFail($id);
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
