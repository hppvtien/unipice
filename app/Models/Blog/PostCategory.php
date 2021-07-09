<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_category';
    protected $guarded = [''];
}
