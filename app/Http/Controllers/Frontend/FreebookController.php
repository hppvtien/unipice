<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Freebook;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreebookController extends Controller
{
    public function index(){
        $book_hot = Freebook::where('is_hot',1)->get();
        $hot_down = Freebook::orderByDesc('count_down')->limit(3)->get();
        $books = Freebook::paginate(5);
        $data = [
            'book_hot' => $book_hot,
            'hot_down' => $hot_down,
            'books' => $books
        ];
        \SEOMeta::setTitle('Đây là Free bôk');
        \SEOMeta::setDescription('Đây là mô tả');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Đây là mô tả');
        \OpenGraph::setTitle('Đây là trang chủ');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        return view('pages.freebook.index',$data);
    }
}
