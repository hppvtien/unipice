<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Configuration;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Modules\Admin\Http\Requests\AdminContactRequest;

class PageController extends Controller
{

    public function getabout()
    {
        $pages = Page::where('p_style', 'about-us')->first();
        \SEOMeta::setTitle($pages->p_title_seo);
        \SEOMeta::setDescription($pages->p_desscription_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($pages->p_desscription_seo);
        \OpenGraph::setTitle($pages->p_title_seo);
        \OpenGraph::setUrl(\Request::url());
        return view('pages.about.index', compact('pages'));
    }
    public function getinhouse()
    {
        $pages = Page::where('p_style', 'in-house')->first();
        \SEOMeta::setTitle($pages->p_title_seo);
        \SEOMeta::setDescription($pages->p_desscription_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($pages->p_desscription_seo);
        \OpenGraph::setTitle($pages->p_title_seo);
        \OpenGraph::setUrl(\Request::url());
        return view('pages.inhouse.index', compact('pages'));
    }

}
