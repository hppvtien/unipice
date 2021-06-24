<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Jobs;
use Carbon\Carbon;
use App\Models\Contact_job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\JobsContactRequest;

class JobsController extends Controller
{
    public function showMessagesSuccess($message = 'Thêm mới thành công')
    {
        return \Session::flash('toastr', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function showMessagesError($message = 'Xử lý dữ liệu thất bại')
    {
        return \Session::flash('toastr', [
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function index()
    {
        \SEOMeta::setTitle('Tin tuyển dụng');
        $jobs = Jobs::where('status',1)->where('end_date','>',Carbon::now())->orderByDesc('is_hot')->get();
        $viewData = [
            'jobs' => $jobs
        ];
        return view('pages.jobs.index', $viewData);
    }
    public function jobsdetail($slug)
    {
        $jobs = Jobs::where('slug', $slug)->first();
        $viewData = [
            'jobs' => $jobs
        ];
        return view('pages.jobs.jobsdetail', $viewData);
    }
    public function jobscontact(JobsContactRequest $request, $slug)
    {
        $jobs = Jobs::where('slug', $slug)->first();

        // $jobs = Jobs::where('status',1)->where('is_hot',1)->orderByDesc('id')->get();
        if ($request) {
            $id_apply = Contact_job::insertGetId([
                'j_job_id' => $request->j_job_id,
                'j_fullname' => $request->j_fullname,
                'j_phone' => $request->j_phone,
                'j_address' => $request->j_address,
                'j_email' => $request->j_email,
                'j_file_cv' => $this->processUploadFile($request->j_file_cv),
                'created_at' => Carbon::now()
            ]);

            if ($id_apply) {
                $message = $this->showMessagesSuccess();
                $viewData = [
                    'jobs' => $jobs,
                    'message' => $message
                ];

                return  redirect()->back();
            }
            $message = $this->showMessagesError();
            $viewData = [
                'jobs' => $jobs,
                'message' => $message
            ];
            return  redirect()->back();
        } else {
        }
    }
    public function processUploadFile($fileName)
    {
        // dd($fileName);
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'pdf'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Ebook/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
