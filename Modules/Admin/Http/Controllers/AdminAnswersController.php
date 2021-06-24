<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Freebook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests;
use App\Models\AnswerToTeacher;
use App\Models\QuestionsToTeacher;

class AdminAnswersController extends AdminController
{
    public function index()
    {
        $answerToTeacher = AnswerToTeacher::orderBy('id','asc')
            ->paginate(20);
        $viewData = [
            'answerToTeacher' => $answerToTeacher,
        ];
        return view('admin::pages.answers_to_teachers.index', $viewData);
    }

    public function questions ($id)
    {
        $answerToTeacher = AnswerToTeacher::findOrFail($id);
        $questionsToTeacher = QuestionsToTeacher::where('qs_answerID','=',$id)->first();
        $viewData = [
            'id' => $id,
            'answerToTeacher' => $answerToTeacher,
            'questionsToTeacher' => $questionsToTeacher
        ];
        return view('admin::pages.answers_to_teachers.update', $viewData);
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
            return redirect()->route('get_admin.answer_and_questions.index');
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
            return redirect()->route('get_admin.answer_and_questions.index');
        }

    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $answerToTeacher = AnswerToTeacher::findOrFail($id);

            if ($answerToTeacher) {
                $answerToTeacher->delete();
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
