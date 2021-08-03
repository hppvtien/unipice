<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Bill;
use App\Models\Configuration;
use App\Models\Education\SeoEdutcation;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminBillController extends AdminController
{
    public function index()
    {
        $bill = Bill::orderBy('created_at','desc')
            ->paginate(20);

        return view('admin::pages.bill.index', compact('bill'));
    }
    public function viewBill(Request $request)
    {
        $bill_view = Bill::where('id',$request->b_id)->first();
        $configuration = Configuration::first();
        $view_data = [
            'bill_view' => $bill_view,
            'configuration' => $configuration
        ];
        return view('admin::pages.bill.view', $view_data);
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
