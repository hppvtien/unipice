<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Trade;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniTradeRequest;

class AdminUniTradeController extends AdminController
{
    public function index()
    {
        $uni_trade = Uni_Trade::orderByDesc('order')
            ->paginate(20);

        $viewData = [
            'uni_trade' => $uni_trade
        ];
        return view('admin::pages.uni_trade.index', $viewData);
    }

    public function create()
    {
        $uni_trade = Uni_Trade::orderByDesc('order')->get();

        return view('admin::pages.uni_trade.create',compact('uni_trade'));
    }

    public function store(AdminUniTradeRequest  $request)
    {
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $menuID = Uni_Trade::insertGetId($data);
        if($menuID)
        {
            $this->showMessagesSuccess();
            RenderUrlSeoBLogService::init($request->slug,SeoBlog::TYPE_MENU, $menuID);
            return redirect()->route('get_admin.uni_trade.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $trade = Uni_Trade::findOrFail($id);
        $uni_trade = Uni_Trade::orderByDesc('order')->get();
        return view('admin::pages.uni_trade.update',compact('trade','uni_trade'));
    }

    public function update(AdminUniTradeRequest $request, $id)
    {
        $uni_trade = Uni_Trade::findOrFail($id);
        $data = $request->except(['avatar','save','_token','banner','delete_thumbnail']);
        $data['updated_at'] = Carbon::now();

        if ($request->banner){
            Storage::delete('public/uploads/'.$request->delete_thumbnail);    
            $data['banner'] = $request->banner;
        } elseif (!$request->banner) {
            $data['banner'] = $request->delete_thumbnail;         
        
        } elseif ($request->banner && !$uni_trade->banner) {
            $data['banner'] = $request->banner;         
        }
        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;

        $uni_trade->fill($data)->save();
        RenderUrlSeoBLogService::update($request->slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_trade.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Trade::findOrFail($id);
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
