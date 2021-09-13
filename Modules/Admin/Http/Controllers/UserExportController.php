<?php

namespace Modules\Admin\Http\Controllers;


use App\Models\Uni_Contact;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Exports\UsersExportNews;
use App\Exports\UsersExportReview;
use App\Exports\UsersExportQuestion;

class UserExportController extends AdminController
{
    public function fileImportExport()
    {
       return view('admin::pages.uni_contact.file-excell');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'list-contact.csv');
    }   
    public function fileExportNews() 
    {
        return Excel::download(new UsersExportNews, 'list-contact-news.csv');
    }   
    public function fileExportReview() 
    {
        return Excel::download(new UsersExportReview, 'list-review.csv');
    }   
    public function fileExportQuestion() 
    {
        return Excel::download(new UsersExportQuestion, 'list-question.csv');
    }   
}
