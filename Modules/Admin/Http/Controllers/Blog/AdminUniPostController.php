<?php

namespace Modules\Admin\Http\Controllers\Blog;

use App\Models\Blog\Uni_Post;
use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\PostTag;
use App\Models\BLog\SeoBlog;
use App\Models\Uni_Tag;
use Illuminate\Support\Facades\Storage;
use App\Service\Seo\RenderUrlSeoBLogService;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniPostRequest;
use Modules\Admin\Http\Requests\AdminCourseRequest;

class AdminUniPostController extends AdminController
{
    public function index()
    {
        $uni_post = Uni_Post::orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'uni_post' => $uni_post
        ];
        return view('admin::pages.blog_post.uni_post.index', $viewData);
    }

    public function create()
    {
        $uni_postcategory = Uni_PostCategory::all();
        $uni_tag = Uni_Tag::all();
        $tagOld = [];
        $viewData = [
            'uni_postcategory' => $uni_postcategory,
            'uni_tag' => $uni_tag,
            'tagOld' => $tagOld
        ];

        return view('admin::pages.blog_post.uni_post.create', $viewData);
    }

    public function store(Request $request)
    {
        $data = $request->except(['avatar', 'save', '_token']);
        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('web');

        // if (!$request->meta_title) $data['meta_title'] = $request->name;
        // if (!$request->meta_desscription) $data['meta_desscription'] = $request->desscription;
       
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'meta_title' => $request->name,
            'meta_desscription' => $request->desscription,
            'created_at' => Carbon::now(),
            'created_by' => get_data_user('web'),
            'status' => $request->status,
            'order' => $request->order,
            'thumnail' => $request->thumbnail,
            'status' => $request->status,
        ];
        $postID = Uni_Post::insertGetId($param);
        
        if ($postID) {
            $this->showMessagesSuccess();
            $this->syncTagPost($postID, $request->tags);
            return redirect()->route('get_admin.post.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }

    // protected function syncKeywordsArticle($articleID, $keywords)
    // {
    //     if (!empty($keywords)) {
    //         \DB::table('articles_keywords')->where('ak_article_id', $articleID)->delete();
    //         foreach ($keywords as $item) {
    //             ArticleKeyword::insert([
    //                 'ak_article_id' => $articleID,
    //                 'ak_keyword_id' => $item
    //             ]);
    //         }
    //     }
    // }

    public function edit($id)
    {
     
        $uni_post = Uni_Post::findOrFail($id);
        $uni_postcategory = Uni_PostCategory::all();
        $uni_tag = Uni_Tag::all();
        $tagOld = PostTag::where('post_id', $id)->pluck('tag_id')->toArray() ?? [];

        // $tagOld = Uni_Tag::where('ak_article_id', $id)
        //         ->pluck('ak_keyword_id')->toArray() ?? [];


        $viewData = [
            'uni_post' => $uni_post,
            'uni_postcategory' => $uni_postcategory,
            'uni_tag' => $uni_tag,
            'tagOld' => $tagOld
        ];
        return view('admin::pages.blog_post.uni_post.update', $viewData);
    }

    public function update(Request $request, $id)
    {
      
        $uni_post = Uni_Post::findOrFail($id);
        $data = $request->except(['avatar', 'save', '_token', 'tags']);
        $data['created_at'] = Carbon::now();
        if ($request->thumbnail) {
            Storage::delete('public/uploads/' . $uni_post->thumbnail);
            $thumbnail = $request->thumbnail;
        } else {
            $thumbnail = $uni_post->thumbnail;
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'meta_title' => $request->name,
            'meta_desscription' => $request->desscription,
            'updated_at' => Carbon::now(),
            'updated_by' => get_data_user('web'),
            'status' => $request->status,
            'order' => $request->order,
            'thumnail' => $thumbnail,
            'status' => $request->status,
        ];
        
        $uni_post->fill($param)->save();
        $this->syncTagPost($id, $request->tags);

        $this->showMessagesSuccess();
        return redirect()->route('get_admin.post.index');
    }
    protected function syncTagPost($postID, $tags)
    {
        if (!empty($tags)) {
            \DB::table('post_tag')->where('post_id', $postID)->delete();
            foreach ($tags as $item) {
                PostTag::insert([
                    'post_id' => $postID,
                    'tag_id'    => $item
                ]);
            }
        }
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $uni_post = Uni_Post::findOrFail($id);
            if ($uni_post) {
                PostTag::where('post_id', $id)->delete();
                $uni_post->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
