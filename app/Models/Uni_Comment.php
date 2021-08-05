<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Uni_Comment extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'uni_comment';
}
