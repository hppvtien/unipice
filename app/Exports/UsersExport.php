<?php

namespace App\Exports;

use App\Models\Uni_Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Uni_Product::all();
    }
}
