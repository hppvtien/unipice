<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_Category;

use App\Models\Uni_Category;
use App\Models\Uni_Product;
use App\Models\Blog\Uni_PostCategory;
use App\Models\Blog\Uni_Post;
use App\Models\Page;


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
		$product_list = Uni_Product::orderBy('created_at', 'desc')->get();
		$post_catagory = Uni_PostCategory::orderBy('created_at', 'desc')->get();
		$post_list = Uni_Post::orderBy('created_at', 'desc')->get();
		$page_list = Page::orderBy('created_at', 'desc')->get();

		foreach($page_list as $item){
			$sitemap->add(URL::to($item->p_slug), $item->created_at, '1.0', 'daily');
			/*$images = [
				['url' => URL::to('images/pic1.jpg'), 'title' => 'Image title', 'caption' => 'Image caption', 'geo_location' => 'Plovdiv, Bulgaria'],
				['url' => URL::to('images/pic2.jpg'), 'title' => 'Image title2', 'caption' => 'Image caption2'],
				['url' => URL::to('images/pic3.jpg'), 'title' => 'Image title3'],
			];*/
		}

		foreach($post_list as $item){
			$sitemap->add(URL::to('bai-viet/'.$item->slug), $item->created_at, '1.0', 'daily');
		}

		foreach($post_catagory as $post){
			$sitemap->add(URL::to('danh-muc-bai-viet/'.$post->slug), $post->created_at, '1.0', 'daily');
		}

		foreach($product_list as $item){
            $sitemap->add(URL::to('san-pham/'.$item->slug), $item->created_at, '1.0', 'daily');
        }

        foreach($product_cat as $post){
            $sitemap->add(URL::to('san-pham/'.$post->slug.'.html'), $post->created_at, '1.0', 'daily');
        }
		
	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->store('xml', 'sitemap');
    }
}
