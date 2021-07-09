<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Category;
use App\Models\ProductCategory;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $data = $request->except(['avatar','save','_token']);
        $data['created_at'] = Carbon::now();
        $data['created_by'] = get_data_user('web');

        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;
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
        $data = $request->except(['avatar','save','_token']);
        $data['updated_at'] = Carbon::now();
        $data['updated_by'] = get_data_user('web');
        if(!$request->meta_title)             $data['meta_title'] = $request->name;
        if(!$request->meta_description) $data['meta_desscription'] = $request->name;

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
                ProductCategory::where('category_id', $id)->delete();
                $uni_category->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
