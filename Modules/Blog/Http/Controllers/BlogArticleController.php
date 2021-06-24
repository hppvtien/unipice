<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Blog\Article;
use App\Http\Controllers\Controller;
use App\Models\Education\Tag;
use Illuminate\Support\Facades\URL;
use App\Models\Freebook;
// use Illuminate\Routing\Controller;

class BlogArticleController extends Controller
{
    public function getArticleById($id, $request)
    {
        $books = Freebook::where('is_hot',1)->limit(3)->get();
        $article = Article::with('menu:id,m_name,m_slug')->find($id);
        if (!$article) return about(404);

        $articlesRelate = Article::where('a_menu_id', $article->a_menu_id)
            ->select('id', 'a_name', 'a_slug', 'a_avatar', 'a_description', 'created_at')
            ->orderByDesc('id')
            ->get(10);
        $tag_home = Tag::limit(10)->get();

        \SEOMeta::setTitle($article->a_title_seo);
        \SEOMeta::setDescription($article->a_description_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($article->a_description_seo);
        \OpenGraph::setTitle($article->a_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($article->a_avatar));

        $viewData = [
            'articlesRelate' => $articlesRelate,
            'article' => $article,
            'tag_home' => $tag_home,
            'books' => $books
        ];

        return view('blog::pages.article.index', $viewData);
    }
}
