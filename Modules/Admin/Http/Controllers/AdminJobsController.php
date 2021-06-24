<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Education\Tag;
use App\Models\Jobs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminJobsRequest;

class AdminJobsController extends AdminController
{
    public function index()
    {
        $jobs = Jobs::orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'jobs' => $jobs
        ];

        return view('admin::pages.jobs.index', $viewData);
    }

    public function create()
    {
        return view('admin::pages.jobs.create');
    }

    public function store(AdminJobsRequest $request)
    {
        $data = $request->except(['save', '_token']);
        $data['created_at'] = Carbon::now();
        $data['created_at'] = date('Y-m-d', strtotime($data['created_at']));
        $data['end_date'] = Carbon::now();
        $data['end_date'] = date('Y-m-d', strtotime($data['end_date']));
        $data['user_id']= 0;
        $jobsID = Jobs::insertGetId($data);
        if($jobsID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.jobs.index');
        }
        $this->showMessagesError();
        return  redirect()->route('get_admin.jobs.index');
    }

    public function edit($id)
    {
        $jobs = Jobs::findOrFail($id);
        return view('admin::pages.jobs.update', compact('jobs'));
    }

    public function update(AdminJobsRequest $request, $id)
    {
        $data = $request->except(['save','_token']);
        $data['updated_at'] = Carbon::now();
        $data['number_date'] = $request->number_date;
        $jobs = Jobs::findOrFail($id);
     
            $data['end_date'] = date('Y-m-d', strtotime($request->end_date));
  
        $jobs->fill($data)->update();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.jobs.index');
    }

    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $jobs = Jobs::findOrFail($id);
            if ($jobs)
            {
                $jobs->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }
}