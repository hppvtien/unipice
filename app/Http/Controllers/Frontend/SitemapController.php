<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_Category;

use App\Models\Uni_Category;


class SitemapController extends Controller
{
    public function sitemap(){
        // create new sitemap object
	$sitemap = App::make('sitemap');

	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
	$sitemap->setCache('laravel.sitemap', 60);

	// check if there is cached sitemap and build new only if is not
	if (!$sitemap->isCached()) {
		// add item to the sitemap (url, date, priority, freq)
		
		$product_cat = Uni_Category::orderBy('created_at', 'desc')->get();



        foreach($product_cat as $post){
            $sitemap->add(URL::to('san-pham/'.$post->slug.'.html'), $post->created_at, '1.0', 'daily');
        }
		
	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->store('xml', 'sitemap');
    }
}
