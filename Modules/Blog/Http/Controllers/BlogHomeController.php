<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\Uni_Post;
use App\Models\System\Slide;
use App\Models\Blog\PostCategory;
use App\Models\Education\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogHomeController extends BlogController
{
    public function index()
    {
        
        \SEOMeta::setTitle('Bài viết Unispice');
        \SEOMeta::setDescription('Bài viết Unispice');
        \SEOMeta::setCanonical(\Request::url());
        // Bài viết banner
        $post_category = Uni_PostCategory::orderByDesc('id')->get();
        $slide = Slide::where('s_type',6)->first();
        $blog_post = Uni_Post::orderByDesc('id')->limit(8)->get();
        $viewData = [
            'post_category' => $post_category,
            'blog_post' => $blog_post,
            'slide' => $slide
        ];
        return view('blog::pages.home.index', $viewData);
    }
    public function fillter_post(Request $request)
    {
        $data_slug = $request->data_slug_cat;
        if ($request->data_slug_cat) {
            $data_slug = $request->data_slug_cat;
            $cat_id = Uni_PostCategory::where('slug', $data_slug)->pluck('id')->first();
            $blog_post  = Uni_Post::where('category_id', $cat_id)->orderBy('id', 'asc')->limit(8)->get();
           
        } 
        $html = view('blog::pages.home._item_post', compact('blog_post'))->render();
        return $html;
    }
    public function SingleBlog($slug)
    {
        $post_category = Uni_PostCategory::orderByDesc('id')->get();
        $slide = Slide::where('s_type',7)->first();
        $blog_post = Uni_Post::where('slug',$slug)->first();
        $current_cate = Uni_PostCategory::where('id',$blog_post->category_id)->first();
        $viewdata = [
            'blog_post'=>$blog_post,
            'post_category'=>$post_category,
            'slide' => $slide,
            'current_cate' => $current_cate
        ];
        return view('blog::pages.home.single_blog',$viewdata);
    }
    public function SingleCat($slug)
    {
        $post_category = Uni_PostCategory::orderByDesc('id')->get();
        $cat_id = Uni_PostCategory::where('slug', $slug)->pluck('id')->first();
        $current_cate = Uni_PostCategory::where('slug',$slug)->first();
        $blog_post  = Uni_Post::where('category_id', $cat_id)->orderBy('id', 'asc')->limit(8)->get();
        $slide = Slide::where('s_type',6)->first();
        $viewData = [
            'post_category' => $post_category,
            'blog_post' => $blog_post,
            'slide' => $slide,
            'current_cate' => $current_cate
        ];
        return view('blog::pages.home.single_cat', $viewData);
    }
}
