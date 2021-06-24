<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freebook extends Model
{
    use HasFactory;

    protected $table = 'free_book';
    protected $guarded = [''];
}
