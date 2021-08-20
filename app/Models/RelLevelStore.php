<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class RelLevelStore extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'rel_level_store';
}
