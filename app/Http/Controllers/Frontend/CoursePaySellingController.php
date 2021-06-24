<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education\Course;
use Illuminate\Http\Request;
use App\Models\Category;

class CoursePaySellingController extends Controller
{
    // public function __construct()
    // {   
    //     $categoriesParent = Category::where('c_parent_id', 0)
    //     ->orderByDesc('c_sort')
    //     ->select('id', 'c_name', 'c_icon', 'c_slug', 'c_avatar')
    //     ->get();
    //     view()->share('categoriesParent',$categoriesParent);      
    // }
    public function index(Request $request)
    {
        \SEOMeta::setTitle('Khoá học bán chạy');

        $courses = Course::with('teacher:id,t_name,t_avatar,t_slug,t_job')
            ->where('c_status', Course::STATUS_DEFAULT)
            ->where('c_total_pay', '>', 0);


        if ($lv = $request->level) $courses->where('c_level', $lv);
        if ($time = $request->time) {
            if ($time == 1) {
                $courses->where('c_total_time', '<=', 3);
            } else {
                $courses->where('c_total_time', '>', 3);
            }
        }
        $courses = $courses->orderBy('c_total_pay', 'desc')
        ->paginate(12);

        $level = (new Course())->level;

        $viewData = [
            'courses' => $courses,
            'level'   => $level,
            'query'   => $request->query()
        ];

        return view('pages.pay_selling.index', $viewData);
    }
}
