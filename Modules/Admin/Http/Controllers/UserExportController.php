<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

class UserExportController extends AdminController
{
    public function fileImportExport()
    {
       return view('admin::pages.uni_contact.file-excell');
    }
   
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function fileImport(Request $request) 
    // {
    //     Excel::import(new UsersImport, $request->file('file')->store('temp'));
    //     return back();
    // }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }   
}
