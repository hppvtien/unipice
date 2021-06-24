<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Models\Education\SeoEdutcation;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminCategoryRequest;

class AdminApMenuController extends AdminController
{
    public function index()
    {
    
        return view('admin::pages.apmenu.index');
    }

    public function ajax_load(){
       
          $Category = Category::get();
          $list_name_category = [
            'post'=>'Danh mục bài viết',
            'product'=>'Danh mục sản phẩm',
          ];
          $data_select_general = [
            [
              'slug'=>'#','title'=>'Link khác'
            ],
            [
              'slug'=>'/','title'=>'Trang chủ'
            ]
          ];
          $list_tabs = [
            [ // Tab chung mặc định
                'id'=>'tab_general',
                'name'=>'Chung',
                'conver_link'=>'',
                'data_select'=>$data_select_general
            ],
            [ // Lấy danh sách các trang tĩnh
                'id'=>'tab_page',
                'name'=>'Trang tĩnh',
                'convert_link'=>'getUrlPage',
                'data_select'=>$this->_pageModel->getAll($lang_code)
            ],
          ];
          $list_tabs_category = [];
          
          // Danh sách các danh mục theo bảng category
          if(!empty($groupCategory)) foreach ($groupCategory as $item) {
            if(!empty($list_name_category[$item['type']])){
              $data_category = $this->getCategoryByType($allCategory, $item['type']);
              switch ($item['type']) {
                  case 'product':
                      $urlCate = 'getUrlCateProduct';
                      break;
                  default:
                      $urlCate = 'getUrlCateNews';
                      break;
              }
              $list_tabs_category[] =  [
                  'id'=>'tab_category_'.$item['type'],
                  'name'=>$list_name_category[$item['type']],
                  'convert_link'=>$urlCate,
                  'data_select'=> $data_category
              ];
            }
          }
          $list_tabs = array_merge($list_tabs,$list_tabs_category);
          // $list_tabs[] = [
          //     'id'=>'tab_post',
          //     'name'=>'Bài viết',
          //     'convert_link'=>'getUrlNews',
          //     'data_select'=> $this->_postModel->getAll($lang_code),
          // ];
          // $list_tabs[] = [
          //     'id'=>'tab_product',
          //     'name'=>'Sản phẩm/ dịch vụ',
          //     'convert_link'=>'getUrlProService',
          //     'data_select'=>$this->pro_service_model->getAll($lang_code),
          // ];
          $data['list_tabs'] = $list_tabs;
          echo $this->load->view($this->template_path . 'menus/_ajax_load_data', $data, TRUE);
        
     
      }
      }
    
    // public function create()
    // {
    //     $data = Grmenu::orderByDesc('id')->get();

    //     return view('admin::pages.apmenu.create', compact('data'));
    // }

    // public function store(AdminCategoryRequest  $request)
    // {
    //     $data = $request->except(['avatar','save','_token']);
    //     $data['created_at'] = Carbon::now();
    //     $data['c_position_1'] = 0;

    //     if(!$request->c_title_seo)             $data['c_title_seo'] = $request->c_name;
    //     if(!$request->c_description_seo) $data['c_description_seo'] = $request->c_name;
    //     if($request->c_position_1) $data['c_position_1'] = 1;

    //     $categoryID = Category::insertGetId($data);
    //     if($categoryID)
    //     {
    //         $this->showMessagesSuccess();
    //         RenderUrlSeoCourseService::init($request->c_slug,SeoEdutcation::TYPE_CATEGORY, $categoryID);
    //         return redirect()->route('get_admin.category.index');
    //     }
    //     $this->showMessagesError();
    //     return  redirect()->back();
    // }

    // public function edit($id)
    // {
    //     $category = Category::findOrFail($id);
    //     $categories = Category::orderByDesc('c_sort')->get();
    //     return view('admin::pages.category.update',compact('category','categories'));
    // }

    // public function update(AdminCategoryRequest $request, $id)
    // {
    //     $category = Category::findOrFail($id);
    //     $data = $request->except(['avatar','save','_token','c_position_1']);
    //     $data['updated_at'] = Carbon::now();

    //     if(!$request->c_title_seo)             $data['c_title_seo'] = $request->c_name;
    //     if(!$request->c_description_seo) $data['c_description_seo'] = $request->c_name;
    //     if($request->c_position_1) $data['c_position_1'] = 1;

    //     $category->fill($data)->save();
    //     RenderUrlSeoCourseService::update($request->c_slug,SeoEdutcation::TYPE_CATEGORY, $id);
    //     $this->showMessagesSuccess();
    //     return redirect()->route('get_admin.category.index');
    // }


    // public function delete(Request $request, $id)
    // {
    //     if($request->ajax())
    //     {
    //         $category = Category::find($id);
    //         if ($category)
    //         {
    //             $category->delete();
    //             RenderUrlSeoCourseService::deleteUrlSeo(SeoEdutcation::TYPE_CATEGORY, $id);
    //         }
    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Xoá dữ liệu thành công'
    //         ]);
    //     }

    //     return redirect()->to('/');
    // }
    public function menuChildren($data, $id, $item)
    {
        if (count($item->get_child_cate()) > 0) {
            echo '<ol class="dd-list">';
            foreach ($item->get_child_cate() as $item) {
                if ($item->parent_id == $id) {
                    echo '<li class="dd-item" data-id="' . $item->id . '">';
                    echo '  <div class="dd-handle">' . $item->title . '(<i>' . $item->url . '</i>)</div>
                                        <div class="button-group">
                                            <a href="javascript:;" class="modalEditMenu" data-id="' . $item->id . '">
                                                <i class="fa fa-pencil fa-fw"></i> Sửa
                                            </a> &nbsp; &nbsp; &nbsp;
                                            <a class="text-danger" href="' . route('setting.menu.delete', $item['id']) . '" onclick="return confirm(\'Bạn có chắc chắn xóa không ?\')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                                        </div>';
                    menuChildren($data, $item->id, $item);
                    echo '</li>';
                }
            }
            echo '</ol>';
        }
        return view('admin::pages.apmenu.create');
    }
}
