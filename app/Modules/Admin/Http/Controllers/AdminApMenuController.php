<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\ApMenu;
use App\Models\ApCategory;
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

  public function ajax_load(Request $request)
  {
    if ($request->ajax()) {
      $lang_code = $request->lang_code;
      $data['lang_code'] = !empty($lang_code) ? $lang_code : $this->session->admin_lang;
      $groupCategory = ApCategory::groupBy('type');
      $allCategory = ApCategory::get();
      $list_name_category = [
        'post' => 'Danh mục bài viết',
        'product' => 'Danh mục sản phẩm',
      ];
      $data_select_general = [
        [
          'slug' => '#',
          'title' => 'Link khác'
        ],
        [
          'slug' => '/',
          'title' => 'Trang chủ'
        ]
      ];
      $list_tabs = [
        [ // Tab chung mặc định
          'id' => 'tab_general',
          'name' => 'Chung',
          'conver_link' => '',
          'data_select' => $data_select_general
        ],
        [ // Lấy danh sách các trang tĩnh
          'id' => 'tab_page',
          'name' => 'Trang tĩnh',
          'convert_link' => 'getUrlPage',
          'data_select' => $allCategory
        ],
      ];
      $list_tabs_category = [];

      // Danh sách các danh mục theo bảng category
      if (!empty($groupCategory)) foreach ($groupCategory as $item) {
        if (!empty($list_name_category[$item['type']])) {
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
            'id' => 'tab_category_' . $item['type'],
            'name' => $list_name_category[$item['type']],
            'convert_link' => $urlCate,
            'data_select' => $data_category
          ];
        }
      }
      $list_tabs = array_merge($list_tabs, $list_tabs_category);
      $data['list_tabs'] = $list_tabs;

      $response = view('admin::pages.apmenu._ajax_load_data', $data)->render();
      return $response;
    }
    exit;
  }

  public function ajax_load_menu()
  {
      $data = ApMenu::get();
// dd($data);
      
      return json_encode($data);

  }

  public function ajax_save_menu()
  {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $menuLocation = $this->input->post('loc');
      $response = $this->input->post('s'); // decoding received JSON to array
      //log_message('error', $response);
      $menuLanguage = $this->input->post('lang');

      log_message('error', json_encode($response));
      $this->_data->delete(['location_id' => $menuLocation, 'language_code' => $menuLanguage]);
      if (is_array($response)) {
        //start saving now
        $topmenusorder = 1;
        log_message('error', json_encode($response));
        if (!empty($response)) foreach ($response as $key => $block) {
          $tmp['title'] = trim($block['label']);
          $tmp['class'] = trim($block['cls']);
          $tmp['type'] = !empty($block['type']) ? trim($block['type']) : "";
          $tmp['link'] = trim($block['link']);
          $tmp['icon'] = !empty($block['icon']) ? trim($block['icon']) : "";
          $tmp['order'] = $topmenusorder;
          $tmp['parent_id'] = 0;
          $tmp['location_id'] = $menuLocation;
          $tmp['language_code'] = $menuLanguage;
          $menuid = $this->_data->saveMenu($tmp);
          if (!empty($block['children'])) {
            $this->childsubmenus($menuid, $block['children'], $menuLocation, $menuLanguage);
          }
          $topmenusorder++;
        }
      } //if is_array($response);
      echo 1;
    }
    exit;
  }

  //-----------------------------------
  private function childsubmenus($menuid, $e, $menuLocation, $menuLanguage)
  {
    $topmenusorder = 1;
    foreach ($e as $key => $block) {
      $tmp['title'] = trim($block['label']);
      $tmp['class'] = trim($block['cls']);
      //$tmp['type'] = trim($block['type']);
      $tmp['link'] = trim($block['link']);
      $tmp['order'] = $topmenusorder;
      $tmp['parent_id'] = $menuid;
      $tmp['location_id'] = $menuLocation;
      $tmp['language_code'] = $menuLanguage;
      $menu = $this->_data->saveMenu($tmp);
      if (!empty($block['children'])) {
        $this->childsubmenus($menu, $block['children'], $menuLocation, $menuLanguage);
      }
      $topmenusorder++;
    }
  }

  // hiển thị dữ liệu
  public function listMenu($menu, $parent = 0, $locationId, $lang_code)
  {
    if (!empty($menu)) foreach ($menu as $row) {
      $row = (array) $row;
      if ($row['parent_id'] == $parent) {
        $this->_listMenu[] = array(
          'id' => $row['id'],
          'name' => $row['title'],
          'class' => $row['class'],
          'icon' => $row['icon'],
          'type' => $row['type'],
          'link' => $row['link'],
          'level' => $row['parent_id']
        );
        // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
        $this->listMenu($menu, $row['id'], $locationId, $lang_code);
      }
    }
  }

  private function getCategoryByType($all, $type)
  {
    $data = [];
    if (!empty($all)) foreach ($all as $item) {
      if ($item->type === $type) $data[] = $item;
    }
    return $data;
  }
}
