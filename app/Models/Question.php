<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'questions';

    public function answers()
    {
        return $this->hasMany(Answer::class,'a_question_id');
    }

    public function correctsAnswers()
    {
        return $this->hasMany(CorrectAnswer::class,'ca_question_id');
    }
}
