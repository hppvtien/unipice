<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Page;

class FindStoreController extends Controller
{
    public function index()
    {
        $uni_store = Uni_Store::get();

        \SEOMeta::setTitle('Tìm kiếm cửa hàng của chúng tôi');
        \SEOMeta::setDescription('Tìm kiếm cửa hàng của chúng tôi');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Tìm kiếm cửa hàng của chúng tôi');
        \OpenGraph::setTitle('Tìm kiếm cửa hàng của chúng tôi');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        
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
