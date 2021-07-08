<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class PostTag extends Model
{
    use HasFactory;

    protected $table = 'post_tag';
    protected $guarded = [''];
}
