<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsToTeacher extends Model
{

    use HasFactory;
    protected $table = 'questions_from_teacher';
    protected $fillable = ['updated_at','qs_content'];
    protected $guarded = [''];
}
