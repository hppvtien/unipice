<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $page_faq = Page::where('p_style','cau-hoi-thuong-gap-faq')->first();
        \SEOMeta::setTitle($page_faq->p_title_seo);
        \SEOMeta::setDescription($page_faq->p_desscription_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($page_faq->p_desscription_seo);
        \OpenGraph::setTitle($page_faq->p_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($page_faq->p_banner));
        $viewData=[
            'page_faq'=>$page_faq
        ];
        return view('pages.faqs.index', $viewData);
    }
}
