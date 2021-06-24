<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Education\CourseContent;
use App\Models\Education\CourseVideo;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\AdminCourseContentVideoRequest;

class AdminCourseVideoController extends AdminController
{
    public function index($id)
    {
        $contentsVideos = CourseVideo::where('cv_course_id', $id)
            ->orderBy('cv_sort', 'asc')
            ->paginate(20);

        $viewData = [
            'id' => $id,
            'contentsVideos' => $contentsVideos
        ];
        return view('admin::pages.course_video.index', $viewData);
    }

    public function create($id)
    {
        $courseContent = CourseContent::where('cc_course_id', $id)
            ->orderBy('cc_sort', 'asc')
            ->get();

        $viewData = [
            'id' => $id,
            'courseContent' => $courseContent
        ];
        return view('admin::pages.course_video.create', $viewData);
    }

    public function store(AdminCourseContentVideoRequest $request, $id)
    {
        $data = $request->except(['save', '_token','video']);
        $data['created_at'] = Carbon::now();
        if($video = $request->video)
        {
            $fileVideo = $this->processUploadVideo($video);
        }

        if(isset($fileVideo) && $fileVideo) $data['cv_path'] = $fileVideo;

        $idVideo = CourseVideo::insertGetId($data);
        if ($idVideo) {
            $this->showMessagesSuccess();
            return redirect()->back();
        }
        $this->showMessagesError();
        return redirect()->back();
    }

    public function edit($id, $videoID)
    {
        $courseVideo = CourseVideo::find($videoID);
        $courseContent = CourseContent::where('cc_course_id', $id)
            ->orderBy('cc_sort', 'asc')
            ->get();

        $viewData = [
            'id' => $id,
            'courseContent' => $courseContent,
            'courseVideo' => $courseVideo
        ];

        return view('admin::pages.course_video.update', $viewData);
    }

    public function update(AdminCourseContentVideoRequest $request, $id, $videoID)
    {
        $courseVideo = CourseVideo::findOrFail($videoID);
        $data = $request->except(['save', '_token','video', 'cv_path']);
        if ($request->video) {
            Storage::delete('public/uploads_Video/'.$courseVideo->cv_path);
            if ($file_video = $request->video) {
                $file_video = $this->processUploadVideo($file_video);
            }
            if (isset($file_video) && $file_video) $data['cv_path'] = $file_video;
        }

        $data['updated_at'] = Carbon::now();
        $courseVideo->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->back();
    }

    public function delete(Request $request, $id, $content)
    {
        if ($request->ajax()) {
            $course = CourseVideo::find($content);
            if ($course) {
                Storage::delete('public/uploads_Video/'.$course->cv_path);
                $course->delete();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }

    public function processUploadVideo($fileName)
    {
        try{
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'mp4','mov'
            ];
            $time_img =  Carbon::now();
            if(!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Video/';

            if(!\File::exists($path)) mkdir($path,0777, true);

            $fileName->move($path, $filename);

            return  $filename; 
        }catch (\Exception $exception)
        {
            Log::error("[processUploadVideo] :". $exception->getMessage());
        }

        return  null;
    }
}
