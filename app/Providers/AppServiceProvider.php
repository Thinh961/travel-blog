<?php

namespace App\Providers;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Support\ServiceProvider;
use App\Traits\CategoryTrait;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

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
        if(!App::runningInConsole()) {
            $categories = Category::where('parent_id', 0)->with('descendants')->get();
            // echo '<pre>';
            // print_r(json_encode($categories));
            // echo '<pre>';
            // die;
            $aboutUs = AboutUs::first();
            $medias = Media::all();
            View::share(compact('categories', 'medias', 'aboutUs'));
        }
    }
}
