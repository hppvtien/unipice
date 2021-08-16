<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Content_Page;

class SpiceClubController extends Controller
{
    function index(){
        \SEOMeta::setTitle('Đây là spice club');
        \SEOMeta::setDescription('Đây là mô tả');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Đây là mô tả');
        \OpenGraph::setTitle('Đây là trang chủ');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');

        $page = Page::where('p_style','spice-club')->first();
        $content_page_1 = Content_Page::where('page_id',$page->id)->where('order',0)->first();
        $content_page_2 = Content_Page::where('page_id',$page->id)->where('order',1)->first();
        $content_page_3 = Content_Page::where('page_id',$page->id)->where('order',2)->first();
        $content_page_4 = Content_Page::where('page_id',$page->id)->where('order',3)->first();
        $content_page_5 = Content_Page::where('page_id',$page->id)->where('order',4)->first();
        $content_page_6 = Content_Page::where('page_id',$page->id)->where('order',5)->first();
        $content_page_7 = Content_Page::where('page_id',$page->id)->where('order',6)->first();
        $content_page_8 = Content_Page::where('page_id',$page->id)->where('order',7)->first();
        $content_page_9 = Content_Page::where('page_id',$page->id)->where('order',8)->first();
        $viewdata = [
            'page'=>$page,
            'content_page_1' => $content_page_1,
            'content_page_2' => $content_page_2,
            'content_page_3' => $content_page_3,
            'content_page_4' => $content_page_4,
            'content_page_5' => $content_page_5,
            'content_page_6' => $content_page_6,
            'content_page_7' => $content_page_7,
            'content_page_8' => $content_page_8,
            'content_page_9' => $content_page_9,
        ];
        return view('pages.spiceclub.index', $viewdata);
    }
}
