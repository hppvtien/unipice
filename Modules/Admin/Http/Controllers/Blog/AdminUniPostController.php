<?php

namespace Modules\Admin\Http\Controllers\Blog;

use App\Models\Blog\Uni_Post;
use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\PostTag;
use App\Models\BLog\SeoBlog;
use App\Models\Uni_Tag;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniPostRequest;
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
        $uni_tag = Uni_Tag::where('type', 1)->get();
        $tagOld = [];
        $viewData = [
            'uni_postcategory' => $uni_postcategory,
            'uni_tag' => $uni_tag,
            'tagOld' => $tagOld
        ];

        return view('admin::pages.blog_post.uni_post.create', $viewData);
    }

    public function store(AdminUniPostRequest $request)
    {
        $data = $request->except(['avatar', 'save', '_token','thumbnail','delete_thumbnail']);
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'meta_title' => $request->meta_title,
            'meta_desscription' => $request->meta_desscription,
            'created_at' => Carbon::now(),
            'status' => $request->status,
            'order' => $request->order,
            'thumbnail' => $request->thumbnail,
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

    public function edit($id)
    {
     
        $uni_post = Uni_Post::findOrFail($id);
        $uni_postcategory = Uni_PostCategory::all();
        $uni_tag = Uni_Tag::where('type', 1)->get();
        $tagOld = PostTag::where('post_id', $id)->pluck('tag_id')->toArray() ?? [];
        $viewData = [
            'uni_post' => $uni_post,
            'uni_postcategory' => $uni_postcategory,
            'uni_tag' => $uni_tag,
            'tagOld' => $tagOld
        ];
        return view('admin::pages.blog_post.uni_post.update', $viewData);
    }

    public function update(AdminUniPostRequest $request, $id)
    {
      
        $uni_post = Uni_Post::findOrFail($id);
        $data = $request->except(['avatar', 'save', '_token', 'tags','thumbnail','delete_thumbnail']);

        if ($request->thumbnail){
            Storage::delete('public/uploads/'.$request->delete_thumbnail);    
            $thumbnail = $request->thumbnail;
        } elseif (!$request->thumbnail) {
            $thumbnail = $request->delete_thumbnail;         
        
        } elseif ($request->thumbnail && !$uni_post->thumbnail) {
            $thumbnail = $request->thumbnail;         
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'meta_title' => $request->meta_title,
            'meta_desscription' => $request->meta_desscription,
            'updated_at' => Carbon::now(),
            'status' => $request->status,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
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
                Storage::delete('public/uploads/'.$uni_post->thumbnail);
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
    public function search_ajax(Request $request)
    {
        $keyword = $request->keyword;
        $uni_post = Uni_Post::where('name', 'LIKE', '%' . $keyword . "%")->get();
        if($uni_post){
            $html = view('admin::pages.blog_post.uni_post.index_ajax', compact('uni_post'))->render();
        }
        return $html;
    }
}
