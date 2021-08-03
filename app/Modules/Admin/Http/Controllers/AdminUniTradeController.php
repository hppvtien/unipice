<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Trade;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $data = $request->except(['avatar','save','_token']);
        $data['created_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

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
        $data = $request->except(['avatar','save','_token']);
        $data['updated_at'] = Carbon::now();

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

        $uni_trade->fill($data)->save();
        RenderUrlSeoBLogService::update($request->slug,SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_trade.index');
    }


    public function delete(AdminUniTradeRequest $request, $id)
    {
        if($request->ajax())
        {
            $menu = Uni_Trade::findOrFail($id);
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
