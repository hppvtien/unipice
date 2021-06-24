<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use App\Models\Education\Tag;
use App\Http\Controllers\Controller;
class BlogHomeController extends BlogController
{
    public function index()
    {
        
        \SEOMeta::setTitle('Góc kiến thức');
        \SEOMeta::setDescription('Góc kiến thức');
        \SEOMeta::setCanonical(\Request::url());

        // Bài viết banner
        $articlesHotOne = Article::with('menu:id,m_name,m_slug')->orderByDesc('id')
        
            ->select('id', 'a_name', 'a_slug', 'a_avatar', 'created_at', 'a_menu_id','a_description')
            ->paginate(5);

        $menuPositionOne = Menu::with('articles')
            ->where('m_position', 1)
            ->first();

        $menuPositionTwo = Menu::with('articles')
            ->where('m_position', 2)
            ->first();
        $tag_home = Tag::limit(10)->get();
        $viewData = [
            'articlesHotOne' => $articlesHotOne,
            'menuPositionOne' => $menuPositionOne,
            'menuPositionTwo' => $menuPositionTwo,
            'tag_home' => $tag_home
        ];
// dd($articlesHotOne);
        return view('blog::pages.home.index', $viewData);
    }
}
