<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Product_Trade extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'product_trade';
}

