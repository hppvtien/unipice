<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uni_Post extends Model
{
    use HasFactory;
    protected $table = 'uni_post';
    protected $guarded = [''];
}
