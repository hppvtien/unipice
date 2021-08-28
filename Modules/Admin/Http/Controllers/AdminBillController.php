<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Bill;
use App\Models\Cart\Uni_Order;
use App\Models\Uni_LotProduct;
use App\Models\Configuration;
use App\Models\Education\SeoEdutcation;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminBillController extends AdminController
{
    public function index()
    {
        $bill = Uni_LotProduct::orderBy('created_at','desc')->get();
        return view('admin::pages.bill.index', compact('bill'));
    }
    public function index_order()
    {
        $order = Uni_Order::orderBy('created_at','desc')->get();
        return view('admin::pages.bill.index_order', compact('order'));
    }

    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $category = Bill::find($id);
            if ($category)
            {
                $category->delete();
                RenderUrlSeoCourseService::deleteUrlSeo(SeoEdutcation::TYPE_CATEGORY, $id);
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }

}
