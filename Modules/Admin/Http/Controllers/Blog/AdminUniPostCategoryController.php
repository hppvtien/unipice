<?php

namespace Modules\Admin\Http\Controllers\Blog;

use App\Models\Blog\Uni_PostCategory;
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
        return view('admin::pages.blog_post.uni_post_category.create',compact('uni_postcategory'));
    }

    // public function store(AdminMenuRequest  $request)
    // {
    //     $data = $request->except(['avatar','save','_token']);
    //     $data['created_at'] = Carbon::now();

    //     if(!$request->m_title_seo)             $data['m_title_seo'] = $request->m_name;
    //     if(!$request->m_description_seo) $data['m_description_seo'] = $request->m_name;

    //     $menuID = Uni_PostCategory::insertGetId($data);
    //     if($menuID)
    //     {
    //         $this->showMessagesSuccess();
    //         RenderUrlSeoBLogService::init($request->m_slug,SeoBlog::TYPE_MENU, $menuID);
    //         return redirect()->route('get_admin.menu.index');
    //     }
    //     $this->showMessagesError();
    //     return  redirect()->back();
    // }
    public function store(Request $request)
    {
        $data = $request->except(['avatar','save','_token','banner']);
        dd($data);
        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('web');
        // $banner = $this->processUploadFile($request->banner);
        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;
        $postCatID = Uni_PostCategory::insertGetId($data);
        if($postCatID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_category.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
    public function edit($id)
    {
        $postcategory = Uni_PostCategory::findOrFail($id);
        $uni_postcategory = Uni_PostCategory::orderByDesc('order')->get();
        return view('admin::pages.blog.menu.update',compact('postcategory','uni_postcategory'));
    }

    // public function update(AdminMenuRequest $request, $id)
    // {
    //     $menu = Menu::findOrFail($id);
    //     $data = $request->except(['avatar','save','_token','c_position_1']);
    //     $data['updated_at'] = Carbon::now();

    //     if(!$request->m_title_seo)             $data['m_title_seo'] = $request->m_name;
    //     if(!$request->m_description_seo) $data['m_description_seo'] = $request->m_name;

    //     $menu->fill($data)->save();
    //     RenderUrlSeoBLogService::update($request->m_slug,SeoBlog::TYPE_MENU, $id);
    //     $this->showMessagesSuccess();
    //     return redirect()->route('get_admin.menu.index');
    // }


    // public function delete(Request $request, $id)
    // {
    //     if($request->ajax())
    //     {
    //         $menu = Menu::findOrFail($id);
    //         if ($menu)
    //         {
    //             $menu->delete();
    //             RenderUrlSeoBLogService::deleteUrlSeo(SeoBlog::TYPE_MENU, $id);
    //         }
    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Xoá dữ liệu thành công'
    //         ]);
    //     }

    //     return redirect()->to('/');
    // }
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
