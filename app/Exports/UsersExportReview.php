<?php

namespace App\Exports;

use App\Models\Uni_Comment;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExportReview implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Uni_Comment::select('email','created_at')->where('type','review')->get();
    }
}
