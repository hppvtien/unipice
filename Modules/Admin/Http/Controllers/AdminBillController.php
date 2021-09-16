<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Bill;
use App\Models\Cart\Uni_Order;
use App\Models\User;
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
        $total_top = 0;
        $total_mid = 0;
        $total_bot = 0;
        $bill = Uni_LotProduct::orderBy('created_at', 'asc')->get();
        foreach ($bill as $item) {
            $total_top += $item->total_qty * $item->price_lotproduct;
            $total_mid += ($item->total_qty - $item->qty) * $item->price_lotproduct;
            $total_bot += $item->qty * $item->price_lotproduct;
        }
        $viewData = [
            'bill' => $bill,
            'total_top' => $total_top,
            'total_mid' => $total_mid,
            'total_bot' => $total_bot
        ];
        return view('admin::pages.bill.index', $viewData);
    }
    public function ajax_index(Request $request)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $range_date = $request->range_date;
        $total_top = 0;
        $total_mid = 0;
        $total_bot = 0;
        if ($range_date) {
            $bill = Uni_LotProduct::whereBetween('updated_at', [Carbon::now()->subDays($range_date), Carbon::now()])->get();
            foreach ($bill as $item) {
                $total_top += $item->total_qty * $item->price_lotproduct;
                $total_mid += ($item->total_qty - $item->qty) * $item->price_lotproduct;
                $total_bot += $item->qty * $item->price_lotproduct;
            }
        } elseif ($to_date != '' && $from_date != '') {
            $bill = Uni_LotProduct::whereBetween('updated_at', [$from_date, $to_date])->get();
            foreach ($bill as $item) {
                $total_top += $item->total_qty * $item->price_lotproduct;
                $total_mid += ($item->total_qty - $item->qty) * $item->price_lotproduct;
                $total_bot += $item->qty * $item->price_lotproduct;
            }
        } else {
            $bill = Uni_LotProduct::where('status', 2)->get();
            foreach ($bill as $item) {
                $total_top += $item->total_qty * $item->price_lotproduct;
                $total_mid += ($item->total_qty - $item->qty) * $item->price_lotproduct;
                $total_bot += $item->qty * $item->price_lotproduct;
            }
        }
        $viewData = [
            'bill' => $bill,
            'total_top' => $total_top,
            'total_mid' => $total_mid,
            'total_bot' => $total_bot
        ];
        if ($viewData != 0) {
            $html = view('admin::pages.bill.ajax_index', $viewData)->render();
        } else {
            $html = 'Doanh thu chưa có vui lòng bán hàng';
        }
        return $html;
    }
    public function index_order()
    {
        $order = Uni_Order::where('status', 2)->pluck('total_money');
        $user_notstore = User::where('status',null)->pluck('id');
        $user_store = User::where('status',1)->pluck('id');
        $user_spice = User::where('status',2)->pluck('id');
        $order_all  = Uni_Order::where('status', 2)->get();
        $order_notstore  = Uni_Order::whereIn('user_id',$user_notstore)->where('status', 2)->get();
        $order_store = Uni_Order::whereIn('user_id',$user_store)->where('status', 2)->get();
        $order_spice = Uni_Order::whereIn('user_id',$user_spice)->where('status', 2)->get();
        $order_total = 0;
        $order_total_notstore = 0;
        $order_total_store = 0;
        $order_total_spice = 0;
        foreach ($order as $item) {
            $order_total += (int)str_replace('.', '', $item);
        }
        foreach ($order_notstore as $item) {
            $order_total_notstore += (int)str_replace('.', '', $item->total_money);
        }
        foreach ($order_store as $item) {
            $order_total_store += (int)str_replace('.', '', $item->total_money);
        }
        foreach ($order_spice as $item) {
            $order_total_spice += (int)str_replace('.', '', $item->total_money);
        }
        $viewData = [
            'order_total' => $order_total,
            'order_total_notstore' => $order_total_notstore,
            'order_total_store' => $order_total_store,
            'order_total_spice' => $order_total_spice,
            'order_notstore' => $order_notstore,
            'order_store' => $order_store,
            'order_spice' => $order_spice,
        ];
        return view('admin::pages.bill.index_order', $viewData);
    }

    public function search_ajax(Request $request)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $range_date = $request->range_date;
        $type_pay = $request->type_pay;
        $status_pay = $request->status_pay;
        $user_notstore = User::where('status',null)->pluck('id');
        $user_store = User::where('status',1)->pluck('id');
        $user_spice = User::where('status',2)->pluck('id');
        $order_total = 0;
        $order_total_notstore = 0;
        $order_total_store = 0;
        $order_total_spice = 0;
        if ($range_date) {
            $type_range = 'trong ' . $range_date . ' ngày trước tới hiện tại';
            $uni_order = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date), Carbon::now()])->where('status', 2)->pluck('total_money');
            $order_all  = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date), Carbon::now()])->where('status', 2)->get();
            $order_notstore  = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date), Carbon::now()])->whereIn('user_id',$user_notstore)->where('status', 2)->get();
            $order_store = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date), Carbon::now()])->whereIn('user_id',$user_store)->where('status', 2)->get();
            $order_spice = Uni_Order::whereBetween('updated_at', [Carbon::now()->subDays($range_date), Carbon::now()])->whereIn('user_id',$user_spice)->where('status', 2)->get();
            foreach ($uni_order as $item) {
                $order_total += (int)str_replace('.', '', $item);
            }
            foreach ($order_notstore as $item) {
                $order_notstore += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_store as $item) {
                $order_total_store += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_spice as $item) {
                $order_total_spice += (int)str_replace('.', '', $item->total_money);
            }
            $viewData=[
                'order_total' => $order_total,
                'order_total_notstore' => $order_total_notstore,
                'order_total_store' => $order_total_store,
                'order_total_spice' => $order_total_spice,
                'order_notstore' => $order_notstore,
                'order_store' => $order_store,
                'order_spice' => $order_spice,
            ];
        } elseif ($to_date != '' && $from_date != '') {
            $type_range = 'trong khoảng thời gian từ ' . $to_date . ' tới ' . $from_date;
            $uni_order = Uni_Order::whereBetween('updated_at', [$from_date, $to_date])->where('status', 2)->pluck('total_money');
            $order_all  = Uni_Order::whereBetween('updated_at', [$from_date, $to_date])->where('status', 2)->get();
            $order_notstore  = Uni_Order::whereBetween('updated_at', [$from_date, $to_date])->whereIn('user_id',$user_notstore)->where('status', 2)->get();
            $order_store = Uni_Order::whereBetween('updated_at', [$from_date, $to_date])->whereIn('user_id',$user_store)->where('status', 2)->get();
            $order_spice = Uni_Order::whereBetween('updated_at', [$from_date, $to_date])->whereIn('user_id',$user_spice)->where('status', 2)->get();
            foreach ($uni_order as $item) {
                $order_total += (int)str_replace('.', '', $item);
            }
            foreach ($order_notstore as $item) {
                $order_notstore += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_store as $item) {
                $order_total_store += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_spice as $item) {
                $order_total_spice += (int)str_replace('.', '', $item->total_money);
            }
            $viewData=[
                'order_total' => $order_total,
                'order_total_notstore' => $order_total_notstore,
                'order_total_store' => $order_total_store,
                'order_total_spice' => $order_total_spice,
                'order_notstore' => $order_notstore,
                'order_store' => $order_store,
                'order_spice' => $order_spice,
            ];
        }
        elseif ($type_pay) {
            $type_range = 'của hình thức thanh toán ' . $type_pay;
            $uni_order = Uni_Order::where('type_pay', $type_pay)->where('status', 2)->pluck('total_money');
            $order_all  = Uni_Order::where('type_pay', $type_pay)->where('status', 2)->where('status', 2)->get();
            $order_notstore  = Uni_Order::where('type_pay', $type_pay)->where('status', 2)->whereIn('user_id',$user_notstore)->where('status', 2)->get();
            $order_store = Uni_Order::where('type_pay', $type_pay)->where('status', 2)->whereIn('user_id',$user_store)->where('status', 2)->get();
            $order_spice = Uni_Order::where('type_pay', $type_pay)->where('status', 2)->whereIn('user_id',$user_spice)->where('status', 2)->get();
            foreach ($uni_order as $item) {
                $order_total += (int)str_replace('.', '', $item);
            }
            foreach ($order_notstore as $item) {
                $order_notstore += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_store as $item) {
                $order_total_store += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_spice as $item) {
                $order_total_spice += (int)str_replace('.', '', $item->total_money);
            }
            $viewData=[
                'order_total' => $order_total,
                'order_total_notstore' => $order_total_notstore,
                'order_total_store' => $order_total_store,
                'order_total_spice' => $order_total_spice,
                'order_notstore' => $order_notstore,
                'order_store' => $order_store,
                'order_spice' => $order_spice,
            ];
        }
        elseif ($status_pay) {
            $type_range = 'của trạng thái đơn hàng ' . $status_pay;
            $uni_order = Uni_Order::where('status', 2)->pluck('total_money');
            $order_all  = Uni_Order::where('status', 2)->get();
            $order_notstore  = Uni_Order::whereIn('user_id',$user_notstore)->where('status', $status_pay)->get();
            $order_store = Uni_Order::whereIn('user_id',$user_store)->where('status', $status_pay)->get();
            $order_spice = Uni_Order::whereIn('user_id',$user_spice)->where('status', $status_pay)->get();
            foreach ($uni_order as $item) {
                $order_total += (int)str_replace('.', '', $item);
            }
            foreach ($order_notstore as $item) {
                $order_notstore += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_store as $item) {
                $order_total_store += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_spice as $item) {
                $order_total_spice += (int)str_replace('.', '', $item->total_money);
            }
            $viewData=[
                'order_total' => $order_total,
                'order_total_notstore' => $order_total_notstore,
                'order_total_store' => $order_total_store,
                'order_total_spice' => $order_total_spice,
                'order_notstore' => $order_notstore,
                'order_store' => $order_store,
                'order_spice' => $order_spice,
            ];
        }
        else {
            $uni_order = Uni_Order::where('status', 2)->pluck('total_money');
            $order_all  = Uni_Order::where('status', 2)->where('status', 2)->get();
            $order_notstore  = Uni_Order::where('status', 2)->whereIn('user_id',$user_notstore)->where('status', 2)->get();
            $order_store = Uni_Order::where('status', 2)->whereIn('user_id',$user_store)->where('status', 2)->get();
            $order_spice = Uni_Order::where('status', 2)->whereIn('user_id',$user_spice)->where('status', 2)->get();
            foreach ($uni_order as $item) {
                $order_total += (int)str_replace('.', '', $item);
            }
            foreach ($order_notstore as $item) {
                $order_notstore += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_store as $item) {
                $order_total_store += (int)str_replace('.', '', $item->total_money);
            }
            foreach ($order_spice as $item) {
                $order_total_spice += (int)str_replace('.', '', $item->total_money);
            }
            $viewData=[
                'order_total' => $order_total,
                'order_total_notstore' => $order_total_notstore,
                'order_total_store' => $order_total_store,
                'order_total_spice' => $order_total_spice,
                'order_notstore' => $order_notstore,
                'order_store' => $order_store,
                'order_spice' => $order_spice,
            ];
        }
        if ($order_total != 0) {
            $html = view('admin::pages.bill.index_order_ajax', $viewData)->render();
        }
        return $html;
    }
}
