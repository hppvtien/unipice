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
        $bill = Uni_LotProduct::orderBy('created_at','asc')->get();
        return view('admin::pages.bill.index', compact('bill'));
    }
    public function index_order()
    {
        $order = Uni_Order::where('status',2)->pluck('total_money');
        
        $order_total = 0;
     foreach($order as $item){
        $order_total += (int)str_replace('.','',$item); 
     }
        return view('admin::pages.bill.index_order', compact('order_total'));
    }

    public function search_ajax(Request $request)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $range_date = $request->range_date;
        $type_pay = $request->type_pay;
        $order_total = 0;
        if($range_date) {
            $type_range = 'trong '.$range_date.' ngày trước tới hiện tại';
            $uni_order = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date),Carbon::now()])->where('status',2)->pluck('total_money');
            foreach($uni_order as $item){
                $order_total += (int)str_replace('.','',$item); 
             }
        } elseif($to_date != '' && $from_date != ''){
            $type_range = 'trong khoảng thời gian '.$to_date.'-'.$from_date;
            $uni_order = Uni_Order::whereBetween('updated_at', [$from_date,$to_date])->where('status',2)->pluck('total_money');
            foreach($uni_order as $item){
                $order_total += (int)str_replace('.','',$item); 
             }
        } elseif($type_pay) {
            $type_range = 'của hình thức thanh toán -'.$type_pay;
            $uni_order = Uni_Order::where('type_pay', $type_pay)->where('status',2)->pluck('total_money');
            foreach($uni_order as $item){
                $order_total += (int)str_replace('.','',$item); 
             }
        } else {
            $uni_order = Uni_Order::where('status',2)->pluck('total_money');
            foreach($uni_order as $item){
                $order_total += (int)str_replace('.','',$item); 
             }
        }
        if($order_total != 0){
            $html = 'Tổng doanh thu '.$type_range.': <span class="text-danger">'.formatVnd($order_total).'</span>';
        } else {
            $html = 'Doanh thu chưa có vui lòng bán hàng';
        }
        return $html;
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
