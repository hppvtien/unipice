<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_job extends Model
{
    use HasFactory;

    protected $table = 'contact_jobs';
    protected $guarded = [''];
}
