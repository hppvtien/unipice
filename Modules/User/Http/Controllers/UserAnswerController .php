<?php

namespace Modules\User\Http\Controllers;

use App\Models\AnswerToTeacher;
use App\Models\QuestionsToTeacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAnswerController  extends Controller
{
    public function addAnswer(Request $request)
    {
        dd($request);
      
    }
}
