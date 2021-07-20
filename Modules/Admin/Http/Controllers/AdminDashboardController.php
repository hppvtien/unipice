<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Education\Course;
use App\Models\Uni_Contact;
use App\Models\Vote;
use App\Models\Cart\Order;
use App\Models\Jobs;
use App\Models\User;
use App\Models\Freebook;
use App\Models\Blog\Article;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {

        $course = Course::get();
        $course_show = Course::limit(6)->get();
        $vote = Vote::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact_show = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->limit(6)->get();
        $freebook = Freebook::get();
        $freebook_show = Freebook::limit(5)->get();
        $jobs = Jobs::get();
        $jobs_show = Jobs::limit(5)->get();
        $article = Article::get();
        $article_show = Article::limit(6)->get();
        $user = User::get();
        $order = Order::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->get();
        $order_show = Order::whereBetween('created_at', [date_format(Carbon::now(), 'Y-m-d'), date_format(Carbon::now(),'Y-m-d')])->orwhere('o_status','=',1)->limit(5)->get();
        $viewData = [
            'course' => $course,
            'course_show' => $course_show,
            'vote' => $vote,
            'contact' => $contact,
            'contact_show' => $contact_show,
            'freebook' => $freebook,
            'freebook_show' => $freebook_show,
            'jobs_show' => $jobs_show,
            'jobs' => $jobs,
            'user' => $user,
            'order' => $order,
            'order_show' => $order_show,
            'article' => $article,
            'article_show' => $article_show
        ];
        return view('admin::index', $viewData);
    }
    public function inc_header()
    {

        $course = Course::get();
        $course_show = Course::limit(6)->get();
        $vote = Vote::where('created_at', '=', date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->get();
        $contact_show = Uni_Contact::where('created_at','=',date_format(Carbon::now(), 'Y-m-d'))->limit(6)->get();
        $freebook = Freebook::get();
        $freebook_show = Freebook::limit(5)->get();
        $jobs = Jobs::get();
        $jobs_show = Jobs::limit(5)->get();
        $article = Article::get();
        $article_show = Article::limit(6)->get();
        $user = User::get();
        $order = Order::where('created_at','<',date_format(Carbon::now(), 'Y-m-d'))->get();
        $order_show = Order::whereBetween('created_at', [date_format(Carbon::now(), 'Y-m-d'), date_format(Carbon::now(),'Y-m-d')])->orwhere('o_status','=',1)->limit(5)->get();
        $viewData = [
            'course' => $course,
            'course_show' => $course_show,
            'vote' => $vote,
            'contact' => $contact,
            'contact_show' => $contact_show,
            'freebook' => $freebook,
            'freebook_show' => $freebook_show,
            'jobs_show' => $jobs_show,
            'jobs' => $jobs,
            'user' => $user,
            'order' => $order,
            'order_show' => $order_show,
            'article' => $article,
            'article_show' => $article_show
        ];
        dd($viewData);
        return view('admin::components._inc_header', $viewData);
    }
}
