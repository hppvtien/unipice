<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerToTeacher extends Model
{
    use HasFactory;
    protected $table = 'answer_to_teacher';
    protected $fillable = ['updated_at','asw_status'];
    protected $guarded = [''];
    public function teacher()
    {
        return $this->hasOne(Teacher::class,'asw_teacher');
    }
    public function answerToTeacher()
    {
        return $this->hasMany(AnswerToTeacher::class,'asw_parent');
    }
    public function childAnswer()
    {
        return $this->hasMany(AnswerToTeacher::class, 'asw_parent')->with('answerToTeacher');
    }
    public function questionsToTeacher()
    {
        return $this->hasOne(QuestionsToTeacher::class,'qs_answerID');
    }
    public function question()
    {
        return $this->hasOne(QuestionsToTeacher::class, 'qs_answerID')->with('questionsToTeacher');
    }

  
}
