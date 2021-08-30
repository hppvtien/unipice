<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\Education\SeoEdutcation;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminCategoryRequest;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends AdminController
{
    public function index()
    {
        $categories = Category::orderByDesc('c_sort')
            ->paginate(20); 

        $viewData = [
            'categories' => $categories
        ];
        return view('admin::pages.category.index', $viewData);
    }

    public function create()
    {
        $categories = Category::orderByDesc('c_sort')->get();

        return view('admin::pages.category.create',compact('categories'));
    }

    public function store(AdminCategoryRequest  $request)
    {
        $data = $request->except(['avatar','save','_token']);
        $data['created_at'] = Carbon::now();
        $data['c_position_1'] = 0;

        if(!$request->c_title_seo)             $data['c_title_seo'] = $request->c_name;
        if(!$request->c_description_seo) $data['c_description_seo'] = $request->c_name;
        if($request->c_position_1) $data['c_position_1'] = 1;

        $categoryID = Category::insertGetId($data);
        if($categoryID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.category.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::orderByDesc('c_sort')->get();
        return view('admin::pages.category.update',compact('category','categories'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->except(['avatar','save','_token','c_position_1', 'd_avatar']);
        $data['updated_at'] = Carbon::now();

        if(!$request->c_title_seo)             $data['c_title_seo'] = $request->c_name;
        if(!$request->c_description_seo) $data['c_description_seo'] = $request->c_name;
        if($request->c_position_1) $data['c_position_1'] = 1;
        if ($request->c_avatar){
            Storage::delete('public/uploads/'.$request->d_avatar);    
            $data['c_avatar'] = $request->c_avatar;
        } elseif (!$request->c_avatar) {
            $data['c_avatar'] = $request->d_avatar;         
        
        } elseif ($request->c_avatar && !$category->c_avatar) {
            $data['c_avatar'] = $request->c_avatar;         
        }

        $category->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.category.index');
    }


    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $category = Category::find($id);
            if ($category)
            {
                Storage::delete('public/uploads/'.$category->c_avatar);
                $category->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
