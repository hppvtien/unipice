<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education\Course;
use App\Models\Education\Teacher;
use App\Models\Education\CourseContent;
use App\Models\AnswerToTeacher;
use App\Models\Education\CourseVideo;
use App\Models\QuestionsToTeacher;
use File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VideoKhoaHocController extends Controller
{

    public function courseVideo($slug)
    {

        $courseDetail = Course::where('c_slug', '=', $slug)->get();

        $id_course = $courseDetail[0]->id;
        $id_teacher = $courseDetail[0]->c_teacher_id;
        $courseVideos = CourseContent::where('cc_course_id', '=', $id_course)->get();
        
        $courseContent = CourseContent::with('videos')->where('cc_course_id', '=', $id_course)
            ->orderBy('cc_sort', 'asc')
            ->get();

        $courseVideo = CourseVideo::where('cv_course_id', '=', $id_course)
            ->orderBy('id', 'asc')
            ->get();
        $teachers = Teacher::get();
        $comment_cc = AnswerToTeacher::whereNull('asw_parent')
        ->where('asw_teacher',$id_teacher)
        ->with('childAnswer')
        ->orderby('id', 'asc')
        ->get();
        $comment_cc_not_null = AnswerToTeacher::whereNotNull('asw_parent')->with('childAnswer')->get();
        $questionsToTeacher = QuestionsToTeacher::get();
        \SEOMeta::setTitle($courseDetail[0]->c_title_seo);
        \SEOMeta::setDescription($courseDetail[0]->c_description_seo);
        $viewData = [
            'courseDetail'       => $courseDetail,
            'courseContent'      => $courseContent,
            'teachers'      => $teachers,
            'courseVideos'      => $courseVideo,
            'comment_cc'      => $comment_cc,
            'comment_cc_not_null'      => $comment_cc_not_null,
            'questionsToTeacher'=> $questionsToTeacher
        ];
        return view('pages.course_video.index', $viewData);
    }
    public function addAnswer(Request $request)
    {
       
        $data = $request->except(['save', '_token', 'asw_image']);
        if ($asw_image = $request->asw_image) {
            $asw_image = $this->processUploadFile($asw_image);
        }
        if (isset($asw_image) && $asw_image) $data['asw_image'] = $asw_image;
        $data['created_at'] = Carbon::now();
        $data['asw_teacher'] = $request->asw_teacher;
        $data['asw_content'] = $request->asw_content;
        $data['asw_id_course'] = $request->asw_id_course;
        $data['asw_id_user'] = get_data_user('web');
        $data['asw_status'] = 0;
        $data['asw_parent']= $request->asw_parent;
         if($data['asw_parent'] == NULL){
            $data['asw_parent'] = NULL;
         } else {
            $data['asw_parent'] = $request->asw_parent;
         }
        $answerToTeacherID = AnswerToTeacher::insertGetId($data);
        if ($answerToTeacherID) {
            return  redirect()->back();
        }
    
    }
    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg', 'png'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Video/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
