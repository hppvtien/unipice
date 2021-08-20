<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\Uni_Post;
use App\Models\System\Slide;
use App\Models\Blog\PostCategory;
use App\Models\Education\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class BlogHomeController extends Controller
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
        
        return view('pages.blog.index', $viewData);
    }
    public function fillter_post(Request $request)
    {
        $data_slug = $request->data_slug_cat;
        if ($request->data_slug_cat) {
            $data_slug = $request->data_slug_cat;
            $cat_id = Uni_PostCategory::where('slug', $data_slug)->pluck('id')->first();
            $blog_post  = Uni_Post::where('category_id', $cat_id)->orderBy('id', 'asc')->limit(8)->get();
           
        } 
        $html = view('pages.blog._item_post', compact('blog_post'))->render();
        return $html;
    }
    public function SingleBlog($slug)
    {   

        $post_category = Uni_PostCategory::orderByDesc('id')->get();
        $slide = Slide::where('s_type',7)->first();
        $blog_post = Uni_Post::where('slug',$slug)->first();
        $user_ids = get_data_user('web');

        $current_cate = Uni_PostCategory::where('id',$blog_post->category_id)->first();
        \SEOMeta::setTitle($blog_post->meta_title);
        \SEOMeta::setDescription($blog_post->meta_desscription);
        $viewdata = [
            'blog_post'=>$blog_post,
            'post_category'=>$post_category,
            'slide' => $slide,
            'current_cate' => $current_cate,
            'blog_post_id' => $blog_post->id,
            'user_ids' => $user_ids,
            'slug' => $slug,
        ];
        return view('pages.blog.single_blog',$viewdata);
    }

    public function add_comment_post(Request $request)
    {
        if($request->user_id){
            $type_product = 'blog';
            $id = DB::table('uni_comment')->insertGetId(
                ['user_id' => $request->user_id, 'product_id' => $request->blog_id, 'type_comment' => $type_product, 'noi_dung_comment' => $request->noi_dung_commnet, 'created_at' => Carbon::now(), 'update_at' => NULL]
            );
            return 'Đã thêm bình luận thành công';
        }
        else{
            return 'Lỗi không thể bình luận';
        }
        
    }

    public function SingleCat($slug)
    {
        $post_category = Uni_PostCategory::orderByDesc('id')->get();
        $cat_id = Uni_PostCategory::where('slug', $slug)->pluck('id')->first();
        $current_cate = Uni_PostCategory::where('slug',$slug)->first();
        $blog_post  = Uni_Post::where('category_id', $cat_id)->orderBy('id', 'asc')->limit(8)->get();
        $slide = Slide::where('s_type',6)->first();
        \SEOMeta::setTitle($current_cate->meta_title);
        \SEOMeta::setDescription($current_cate->meta_desscription);
        $viewData = [
            'post_category' => $post_category,
            'blog_post' => $blog_post,
            'slide' => $slide,
            'current_cate' => $current_cate
        ];
        return view('pages.blog.single_cat', $viewData);
    }
    public function ThoaThuan()
    {
        $cat_ids = Uni_PostCategory::where('id', 9)->first();
        $blog_posts  = Uni_Post::where('status', 0)->get();
        $viewData = [
            'blog_posts' => $blog_posts,
            'cat_ids' => $cat_ids,
        ];
        return view('pages.blog.thoa_thuan', $viewData);
    }

}
