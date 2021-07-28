<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uni_Product;
use App\Models\Blog\Uni_Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $product = Uni_Product::where('name','like','%'.$search.'%')
            ->where('status', 1)
            ->orderByDesc('id')
            ->limit(20)
            ->get();
        $post = Uni_Post::where('name','like','%'.$search.'%')
            ->where('status', 1)
            ->orderByDesc('id')
            ->limit(20)
            ->get();
        $viewData=[
            'product'=>$product,
            'post'=>$post
        ];
        dd($viewData);
        return view('pages.search.index', $viewData);
    }
}
