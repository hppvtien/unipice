<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class User_voucher extends Model
{
    use HasFactory;
    protected $table = 'user_voucher';
    protected $guarded = [''];
}
