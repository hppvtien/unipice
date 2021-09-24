<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Category;
use App\Models\ProductCategory;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniCategoryRequest;

class AdminUniCategoryController extends AdminController
{
    public function index()
    {
       
        $uni_category = Uni_Category::orderByDesc('order')
            ->paginate(20);
       
        $viewData = [
            'uni_category' => $uni_category
        ];
        return view('admin::pages.uni_category.index', $viewData);
    }

    public function create()
    {
        $uni_category = Uni_Category::orderByDesc('order')->get();
        return view('admin::pages.uni_category.create',compact('uni_category'));
    }

    public function store(AdminUniCategoryRequest $request)
    {
        $data = $request->except(['banner','icon_thumb','save','_token','thumbnail','delete_thumbnail']);
        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('web');
        if ($request->icon_thumb) {
            $data['icon_thumb'] = $this->processUploadFile($request->icon_thumb);
        } 
        if ($request->icon_thumb) {
            $data['thumbnail'] = $this->processUploadFile($request->thumnail);
        } 
        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;
        $menuID = Uni_Category::insertGetId($data);
        if($menuID) 
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_category.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $uni_cate = Uni_Category::findOrFail($id);
        $uni_category = Uni_Category::orderByDesc('order')->get();
        return view('admin::pages.uni_category.update',compact('uni_cate','uni_category'));
    }

    public function update(AdminUniCategoryRequest $request, $id)
    {
        
        $uni_category = Uni_Category::findOrFail($id);
        $data = $request->except(['banner','icon_thumb','save','_token','thumbnail','delete_thumbnail']);
        $data['updated_at'] = Carbon::now();
        // $data['updated_by'] = get_data_user('web');
       if($request->icon_thumb){
        $data['icon_thumb'] = $this->processUploadFile($request->icon_thumb);
        Storage::delete('public/uploads_Product/'.$uni_category->icon_thumb);
       }else{
        $data['icon_thumb'] = $uni_category->icon_thumb;
       }

       if($request->thumbnail){
        $data['thumbnail'] = $this->processUploadFile($request->thumbnail);
        Storage::delete('public/uploads_Product/'.$uni_category->thumbnail);
       }else{
        $data['thumbnail'] = $uni_category->thumbnail;
       }

    if ($request->banner){
        Storage::delete('public/uploads/'.$request->delete_thumbnail);    
        $data['banner'] = $request->banner;
    } elseif (!$request->banner) {
        $data['banner'] = $request->delete_thumbnail;         
    
    } elseif ($request->banner && !$uni_category->banner) {
        $data['banner'] = $request->banner;         
    }
        if(!$request->meta_title)             $data['meta_title'] = $request->meta_title;
        if(!$request->meta_description) $data['meta_desscription'] = $request->meta_desscription;
        
        
        $uni_category->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_category.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $uni_category = Uni_Category::findOrFail($id);
            if ($uni_category)
            {
                Storage::delete('public/uploads/'.$uni_category->banner);
                Storage::delete('public/uploads_Product/'.$uni_category->icon_thumb);
                Storage::delete('public/uploads_Product/'.$uni_category->thumbnail);
                $uni_category->delete();
            }
            $product_category = ProductCategory::where('category_id',$id)->pluck('id');
            if($product_category){
                ProductCategory::where('category_id', $id)->delete();
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
            $path = public_path() . '/storage/uploads_Product/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
