<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Education\Course;
use App\Models\Uni_Contact;
use App\Models\Uni_Store;
use App\Models\Cart\Uni_Order;
use App\Models\User;
use App\Models\Cart\Uni_Order_Nap;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {

        $contact = Uni_Contact::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact_show = Uni_Contact::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->limit(6)->get();
        $user = User::get();
        $order = Uni_Order::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->get();
        $order_show = Uni_Order::whereBetween('created_at', [date_format(Carbon::now(), 'Y-m-d'), date_format(Carbon::now(), 'Y-m-d')])->orwhere('status', '=', 1)->limit(5)->get();
        $viewData = [
            'contact' => $contact,
            'contact_show' => $contact_show,
            'user' => $user,
            'order' => $order,
            'order_show' => $order_show
        ];
        return view('admin::index', $viewData);
    }
    public function inc_header()
    {

        $contact = Uni_Contact::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact_show = Uni_Contact::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->limit(6)->get();
        $user = User::get();
        $order = Uni_Order::where('created_at', '<', date_format(Carbon::now(), 'Y-m-d'))->get();
        $order_show = Uni_Order::whereBetween('created_at', [date_format(Carbon::now(), 'Y-m-d'), date_format(Carbon::now(), 'Y-m-d')])->orwhere('status', '=', 1)->limit(5)->get();
        $viewData = [
            'contact' => $contact,
            'contact_show' => $contact_show,
            'user' => $user,
            'order' => $order,
            'order_show' => $order_show
        ];
        return view('admin::components._inc_header', $viewData);
    }
    public function update_level(Request $request)
    {
        $uni_store = Uni_Store::where('end_date', '<=', Carbon::now())->get();
        foreach ($uni_store as $key => $store) {
            $uni_store_tt = Uni_Store::where('id', $store->id)->first();
            if ($store->poin_store >= 30000 && $store->poin_store < 75000) {
                $data_store['type_store'] = 'Gold';
                $uni_store_tt->fill($data_store)->update();
            } elseif ($store->poin_store >= 75000 && $store->poin_store < 135000) {
                $data_store['type_store'] = 'Diamond';
                $uni_store_tt->fill($data_store)->update();
            } elseif ($store->poin_store >= 135000) {
                $data_store['type_store'] = 'Platinum';
                $uni_store_tt->fill($data_store)->update();
            } elseif ($store->poin_store < 30000) {
                $data_store['type_store'] = 'Silver';
                $uni_store_tt->fill($data_store)->update();
            }
        }
        $mes = 'load to page';
        return $mes;
    }
    public function update_status(Request $request)
    {
        $uni_order = Uni_Order_Nap::where('end_year', '<=', Carbon::now())->get();
        foreach ($uni_order as $key => $store) {
            $uni_store_tt = Uni_Order_Nap::where('id', $store->id)->first();
            $storle['status'] = 5;
            $uni_store_tt->fill($storle)->update();
        }
        $mes = 'load to page';
        return $mes;
    }
}
