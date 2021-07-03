<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Uni_Product extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'uni_product';
    public function courses()
    {
        return $this->hasMany(Course::class,'lotproduct_id');
    }
}
