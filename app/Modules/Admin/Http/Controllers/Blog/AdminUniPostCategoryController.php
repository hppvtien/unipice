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
use Modules\Admin\Http\Requests\AdminUniCategoryRequest;

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

    public function store(Request $request)
    {
        $data = $request->except(['avatar', 'save', '_token', 'banner']);
        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('web');
        // $banner = $this->processUploadFile($request->banner);
        if (!$request->meta_title)             $data['meta_title'] = $request->name;
        if (!$request->meta_description) $data['meta_desscription'] = $request->name;
        if ($request->banner) {
            $banner = $this->processUploadFile($request->banner);
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->name,
            'meta_desscription' => $request->desscription,
            'created_at' => Carbon::now(),
            'created_by' => get_data_user('web'),
            'status' => $request->status,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
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

    public function update(Request $request, $id)
    {
        $uni_postcategory = Uni_PostCategory::findOrFail($id);
        $data = $request->except(['avatar', 'save', '_token', 'banner']);
        $data['updated_at'] = Carbon::now();

        if (!$request->meta_title)             $data['meta_title'] = $request->name;
        if (!$request->meta_description) $data['meta_description'] = $request->desscription;
        if ($request->banner) {
            Storage::delete('public/uploads_product/' . $uni_postcategory->banner);
            $banner = $this->processUploadFile($request->banner);
        } else {
            $banner = $uni_postcategory->banner;
        }
        if ($request->thumbnail) {
            Storage::delete('public/uploads_product/' . $uni_postcategory->thumbnail);
            $thumbnail = $this->processUploadFile($request->thumbnail);
        } else {
            $thumbnail = $uni_postcategory->thumbnail;
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->name,
            'meta_desscription' => $request->desscription,
            'updated_at' => Carbon::now(),
            'updated_by' => get_data_user('web'),
            'status' => $request->status,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'banner' => $banner,
            'status' => $request->status,
        ];
        $uni_postcategory->fill($param)->save();
        // RenderUrlSeoBLogService::update($request->slug, SeoBlog::TYPE_MENU, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.post_category.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $uni_postcategory = Uni_PostCategory::findOrFail($id);
            PostCategory::where('category_id',$id)->delete();
            if ($uni_postcategory)
            {
                $uni_postcategory->delete();
                // RenderUrlSeoBLogService::deleteUrlSeo(SeoBlog::TYPE_MENU, $id);
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
