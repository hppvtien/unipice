<?php

namespace Modules\User\Http\Controllers;

use App\Models\Jobs;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\AdminJobsRequest;
// use Illuminate\Routing\Controller;
class UserJobsController extends Controller
{

    public function index()
    {
        \SEOMeta::setTitle('Tin tuyển dụng');
        $jobs = Jobs::where('user_id', get_data_user('web'))
            ->paginate(12);

        $viewData = [
            'jobs' => $jobs
        ];
        return view('user::pages.jobs.index', $viewData);
    }
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

    public function create()
    {
        $countjobs = Jobs::where('user_id', get_data_user('web'))->count();
        if ($countjobs < 10) {
            return view('user::pages.jobs.addJobs');
        } else {
            return view('user::pages.jobs.contactAdmin');
        }
    }
    public function addJobs(AdminJobsRequest $request)
    {
        $data = $request->except(['save', '_token', 'j_avatar', 'd_avatar']);
        $data['created_at'] = Carbon::now();
        $data['created_at'] = date('Y-m-d', strtotime($data['created_at']));
        $data['user_id'] = get_data_user('web');
        $data['status'] = 0;
        $data['is_hot'] = 0;
        if ($j_avatar = $request->j_avatar) {
            $j_avatar = $this->processUploadFile($j_avatar);
        }
        if (isset($j_avatar) && $j_avatar) $data['j_avatar'] = $j_avatar;
        $job_by_user = Jobs::where('user_id', $data['user_id'])->get();
        if (count($job_by_user) > 0) {
            return  redirect()->route('get_user.jobs');
        } else {
            $jobsID = Jobs::insertGetId($data);
            if ($jobsID) {
                $this->showMessagesSuccess();
                return  redirect()->route('get_user.jobs');
            }
            $this->showMessagesError();
        }
    }
    public function edit($id)
    {
        $jobedit = Jobs::findOrFail($id);
        return view('user::pages.jobs.editJobs', compact('jobedit'));
    }

    public function update(AdminJobsRequest $request, $id)
    {
        $data = $request->except(['save', '_token', 'j_avatar', 'd_avatar']);
        $data['updated_at'] = Carbon::now();
        $jobedit = Jobs::findOrFail($id);
        if ($request->j_avatar) {
            Storage::delete('uploads_job/'.$jobedit->j_avatar);
            if ($j_avatar = $request->j_avatar) {
                $j_avatar = $this->processUploadFile($j_avatar);
            }
            if (isset($j_avatar) && $j_avatar) $data['j_avatar'] = $j_avatar;
        }
        $jobedit->fill($data)->update();
        $this->showMessagesSuccess('Sửa thành công');
        return redirect()->route('get_user.jobs');
    }
    public function delete(Request $request, $id)
    {

        if ($request->ajax()) {
            $job = Jobs::findOrFail($id);
            if ($job) {
                $job->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }
    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg','png','jpeg'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_job/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
