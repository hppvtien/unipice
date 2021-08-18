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
        $slug_page = URL::current();
        $doamin_page = URL::to('/');
        $str = str_replace( URL::to('/'), '', URL::current() );
        $str = str_replace('/','',$str);
        $info_page = PAGE::where('p_slug', 'like', '%'.$str.'%')->get();
        if($str != ''){
            foreach($info_page as $item){
                \SEOMeta::setTitle($item->p_name);
                \SEOMeta::setDescription($item->p_desscription);
                \SEOMeta::setCanonical(URL::current());
                \OpenGraph::setDescription($item->p_desscription);
                \OpenGraph::setTitle($item->p_name);
                \OpenGraph::setUrl(URL::current());
                \OpenGraph::addProperty('type', 'articles');
            }
        }
        else{
            \SEOMeta::setTitle('Đây là trang chủ');
            \SEOMeta::setDescription('Đây là mô tả');
            \SEOMeta::setCanonical(\Request::url());
            \OpenGraph::setDescription('Đây là mô tả');
            \OpenGraph::setTitle('Đây là trang chủ');
            \OpenGraph::setUrl(\Request::url());
            \OpenGraph::addProperty('type', 'articles');
        }
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
