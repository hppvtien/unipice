<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_Store;
use Illuminate\Http\Request;

class FindStoreController extends Controller
{
    public function index()
    {
        \SEOMeta::setTitle('Danh sách cửa hàng');
        \SEOMeta::setDescription('Danh sách cửa hàng Unispice');
        $uni_store = Uni_Store::get();
        $uni_province = Uni_Store::groupByRaw('store_province')->pluck('store_province');
        $view_data=[
            'uni_store'=>$uni_store,
            'uni_province'=>$uni_province
        ];
        return view('pages.find.index',$view_data);
    }
    public function searchName(Request $request)
    {
        $store_name = $request->store_name;
        $store_province = $request->store_province;
        if($store_name){
            $uni_store = Uni_Store::where('store_name', 'LIKE', "%{$store_name}%")->get();
        } elseif($store_province) {
            $uni_store = Uni_Store::where('store_province',$store_province)->get();
        } else  {
            $uni_store = Uni_Store::get();
        }
        $html = view('pages.find.list_store', compact('uni_store'))->render();
        return $html;
    }
}
