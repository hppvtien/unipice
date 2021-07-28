<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\KeywordSearch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\AbstractList;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->k;
//        if (!$keyword) return redirect()->to('/');
        $this->syncKeywordSearch($keyword);
        

        return view('pages.category.index');
    }

    protected function syncKeywordSearch($keyword)
    {
        $slug         = Str::slug($keyword);
      
    }
}
