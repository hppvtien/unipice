<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use App\Models\Freebook;
// use Illuminate\Routing\Controller;

class BlogMenuController extends Controller
{
    public function getArticleByMenu($id, $request)
    {
        $menu = Menu::find($id);
        if (!$menu) return abort(404);

        $articles = Article::where('a_menu_id', $id)
            ->select('id', 'a_name', 'a_slug', 'a_avatar', 'a_description', 'created_at')
            ->paginate(9);

        \SEOMeta::setTitle($menu->m_title_seo);
        \SEOMeta::setDescription($menu->m_description_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($menu->m_description_seo);
        \OpenGraph::setTitle($menu->m_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($menu->m_avatar));

        $viewData = [
            'articles' => $articles,
            'menu' => $menu,
            'book_hot' => $book_hot
        ];

        return view('blog::pages.menu.index', $viewData);
    }

    public function getArticleByCat(Request $request)
    {        
        $id = $request->cat_ID;;
        $menu = Menu::find($id);
        if (!$menu) return abort(404);

        $articles = Article::where('a_menu_id', $id)
            ->select('id', 'a_name', 'a_slug', 'a_avatar', 'a_description','created_at')
            ->paginate(20);
        \SEOMeta::setTitle($menu->m_name);
        \SEOMeta::setDescription($menu->m_name);
        \SEOMeta::setCanonical(\Request::url());

        // $viewData = [
        //     'articles' => $articles,
        // ];
        $html = view('blog::pages.home.include.items_post',compact('articles'))->render();
        // return $returnHTML;
        return $html;

        
        // return view('blog::pages.menu.index', $viewData);
    }
}
