<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLotProduct extends Model
{
    use HasFactory;

    protected $table = 'product_lotproduct';
    protected $guarded = [''];
}
