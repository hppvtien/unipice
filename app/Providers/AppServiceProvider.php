<?php

namespace App\Providers;

use App\Models\Blog\Menu;
use App\Models\Uni_Category;
use App\Models\Configuration;
use App\Models\Education\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        try {
            $menuBlog      = Menu::orderBy('m_sort', 'asc')->get();
            $configuration = Configuration::first();
            $tagsHot       = Tag::where('t_hot', Tag::HOT)->get();
            $category_mn = Uni_Category::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        } catch (\Exception $exception) {

        }

        \View::share('menuBlog', $menuBlog ?? []);
        \View::share('configuration', $configuration ?? []);
        \View::share('tagsHot', $tagsHot ?? []);
        \View::share('category_mn', $category_mn ?? []);
    }
}
