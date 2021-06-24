<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Education\CourseFaq;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminCourseFaqController extends AdminController
{

    public function index($id)
    {
        $courseFaq = CourseFaq::get();

        $viewData = [
            'courseFaq' => $courseFaq,
            'id'        => $id
        ];

        return view('admin::pages.course_faq.index', $viewData);
    }

    public function create($id)
    {
        $viewData = [
            'id' => $id
        ];
        return view('admin::pages.course_faq.create', $viewData);
    }

    public function store(Request $request , $id)
    {
        $data           = $request->except('_token', 'save');
        $courseFaq       = CourseFaq::create($data);

        if ($request->a_name)
            $this->syncAnswers($courseFaq->id, $request->a_name);

        return redirect()->back();
    }

    public function edit($id, $course_id)
    {
        $courseFaq = CourseFaq::find($course_id);
        $viewData = [
            'id'       => $id,
            'courseFaq' => $courseFaq
        ];

        return view('admin::pages.course_faq.update', $viewData);
    }

    public function update(Request $request, $id, $course_id)
    {
        $data           = $request->except('save','_token');
        $courseFaq       = CourseFaq::find($course_id);

        $courseFaq->fill($data)->save();
        return redirect()->back();
   
    }

    public function destroy($id)
    {
        //
    }
}
