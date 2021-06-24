<?php

namespace Modules\Teacher\Http\Controllers;

use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AnswerToTeacher;
use App\Models\QuestionsToTeacher;

class QuestionToTeacherController extends TeacherBaseController
{
    public function index()
    {
        $answerToTeacher = AnswerToTeacher::orderBy('id','asc')
        ->where([
            'asw_teacher' => get_data_user('teachers')
        ])
            ->paginate(20);
        $viewData = [
            'answerToTeacher' => $answerToTeacher,
        ];
        return view('teacher::pages.questiontoteacher.index', $viewData);

        return view('teacher::pages.course_content.index', $viewData);

    }

    public function edit ($id)
    {
        $answerToTeacher = AnswerToTeacher::findOrFail($id);
        $questionsToTeacher = QuestionsToTeacher::where('qs_answerID','=',$id)->first();
        $viewData = [
            'id' => $id,
            'answerToTeacher' => $answerToTeacher,
            'questionsToTeacher' => $questionsToTeacher
        ];
        return view('teacher::pages.questiontoteacher.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $answerToTeacher = AnswerToTeacher::findOrFail($id);   
        // $data['updated_at'] = Carbon::now();
        if($answerToTeacher->asw_parent == NULL){
            $data['as']=[
                'updated_at'=> Carbon::now(),
                'asw_parent'=> $request->asw_parent,
                'asw_status'=> $request->asw_status
            ];
        } else {
            $data['as']=[
                'updated_at'=> Carbon::now(),
                'asw_parent'=> $answerToTeacher->asw_parent,
                'asw_status'=> $request->asw_status
            ];
        }
        $answerToTeacher->fill($data['as'])->update();
        $data['qs_ID'] = $request->qs_ID;
       
        if($data['qs_ID'] == NULL){
            $data['qs']['created_at'] = Carbon::now();
            $data['qs']['qs_content'] = $request->qs_content;
            $data['qs']['qs_answerID'] = $request->qs_answerID;
           
            QuestionsToTeacher::insertGetId($data['qs']);
            $this->showMessagesSuccess();
            return redirect()->route('get_teacher.questiontoteacher.index');
        } else {
            $questionsToTeacher = QuestionsToTeacher::findOrFail($data['qs_ID']);
            if($answerToTeacher->asw_parent){
                $data['qs']['qs_answerID'] = $answerToTeacher->asw_parent;
            } else {
                $data['qs']['qs_answerID'] = $request->qs_answerID;
            }
            $data['qs']['updated_at'] = Carbon::now();
            $data['qs']['qs_content'] = $request->qs_content;
            $questionsToTeacher->fill($data['qs'])->update();
            $this->showMessagesSuccess();
            return redirect()->route('get_teacher.questiontoteacher.index');
        }

    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $freebook = Freebook::findOrFail($id);

            if ($freebook) {
                Storage::delete('public/uploads_Ebook/'.$freebook->file_fb);
                Storage::delete('public/uploads/'.$freebook->f_avatar);
                $freebook->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
