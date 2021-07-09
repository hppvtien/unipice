<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Uni_PostCategory extends Model
{
    use HasFactory;

    protected $table = 'uni_post_category';
    protected $guarded = [''];
}
