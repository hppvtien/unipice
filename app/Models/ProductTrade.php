<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTrade extends Model
{
    use HasFactory;

    protected $table = 'product_trade';
    protected $guarded = [''];
}
