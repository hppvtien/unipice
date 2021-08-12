<?php

namespace Modules\Admin\Http\Controllers\Blog;

use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\Uni_Post;
use App\Models\BLog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniBlogCategoryRequest;

class AdminUniPostCategoryController extends AdminController
{
    public function index()
    {
        $uni_postcategory = Uni_PostCategory::orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'uni_postcategory' => $uni_postcategory
        ];
        return view('admin::pages.blog_post.uni_post_category.index', $viewData);
    }

    public function create()
    {
        $uni_postcategory = Uni_PostCategory::orderByDesc('id')->get();
        return view('admin::pages.blog_post.uni_post_category.create', compact('uni_postcategory'));
    }

    public function store(AdminUniBlogCategoryRequest $request)
    {
        $data = $request->except(['avatar', 'save', '_token', 'banner','thumbnail','delete_thumbnail']);
       
        if ($request->banner) {
            $banner = $this->processUploadFile($request->banner);
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_desscription' => $request->meta_desscription,
            'created_at' => Carbon::now(),
            'created_by' => Carbon::now(),
            'status' => $request->status,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'thumbnail' => $request->thumbnail,
            'banner' => $banner,
            'status' => $request->status,
        ];
        $postCatID = Uni_PostCategory::insertGetId($param);
        if ($postCatID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.post_category.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
    public function edit($id)
    {
        $postcategory = Uni_PostCategory::findOrFail($id);
        $uni_postcategory = Uni_PostCategory::orderByDesc('order')->get();
        return view('admin::pages.blog_post.uni_post_category.update', compact('postcategory', 'uni_postcategory'));
    }

    public function update(AdminUniBlogCategoryRequest $request, $id)
    {
        $uni_postcategory = Uni_PostCategory::findOrFail($id);
        $data = $request->except(['avatar', 'save', '_token', 'banner','thumbnail','delete_thumbnail']);

        if ($request->banner) {
            Storage::delete('public/uploads_Post/' . $uni_postcategory->banner);
            $banner = $this->processUploadFile($request->banner);
        } else {
            $banner = $uni_postcategory->banner;
        }
        if ($request->thumbnail){
            Storage::delete('public/uploads/'.$request->delete_thumbnail);    
            $thumbnail = $request->thumbnail;
        } elseif (!$request->thumbnail) {
            $thumbnail = $request->delete_thumbnail;         
        } elseif ($request->thumbnail && !$uni_postcategory->thumbnail) {
            $thumbnail = $request->thumbnail;         
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_desscription' => $request->meta_desscription,
            'updated_at' => Carbon::now(),
            'updated_by' => Carbon::now(),
            'status' => $request->status,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'banner' => $banner,
            'status' => $request->status,
        ];
        $uni_postcategory->fill($param)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.post_category.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $uni_postcategory = Uni_PostCategory::findOrFail($id);
            if ($uni_postcategory)
            {
                Storage::delete('public/uploads/'.$uni_postcategory->thumbnail);
                Storage::delete('public/uploads_Post/'.$uni_postcategory->banner);
                $uni_postcategory->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg', 'png', 'jpeg'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Post/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
