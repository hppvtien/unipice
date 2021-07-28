<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Education\Course;
use App\Models\Uni_Contact;
use App\Models\Cart\Uni_Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {

        $course = Course::get();
        $course_show = Course::limit(6)->get();
        $contact = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact_show = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->limit(6)->get();
        $user = User::get();
        $order = Uni_Order::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->get();
        $order_show = Uni_Order::whereBetween('created_at', [date_format(Carbon::now(), 'Y-m-d'), date_format(Carbon::now(),'Y-m-d')])->orwhere('status','=',1)->limit(5)->get();
        $viewData = [
            'course' => $course,
            'course_show' => $course_show,
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

        $course = Course::get();
        $course_show = Course::limit(6)->get();
        $contact = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact_show = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->limit(6)->get();
        $user = User::get();
        $order = Uni_Order::where('created_at','<',date_format(Carbon::now(), 'Y-m-d'))->get();
        $order_show = Uni_Order::whereBetween('created_at', [date_format(Carbon::now(), 'Y-m-d'), date_format(Carbon::now(),'Y-m-d')])->orwhere('status','=',1)->limit(5)->get();
        $viewData = [
            'course' => $course,
            'course_show' => $course_show,
            'contact' => $contact,
            'contact_show' => $contact_show,
            'user' => $user,
            'order' => $order,
            'order_show' => $order_show
        ];
        return view('admin::components._inc_header', $viewData);
    }
}
