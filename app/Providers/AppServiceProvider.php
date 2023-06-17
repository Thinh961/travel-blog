<?php

namespace App\Providers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
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
        if (!App::runningInConsole()) {
            $categories = Category::where('parent_id', 0)->with('descendants')->get();
            $featurePosts = Post::with(['translations'])
                ->where(['active' => 'on', 'feature' => 'on'])
                ->paginate(8);
            $mostViewPosts = Post::with(['translations'])
                ->where(['active' => 'on'])
                ->orderBY('view', 'desc')
                ->paginate(8);
            $banner = Banner::where('active', 'on')->first();
            $aboutUs = AboutUs::first();
            $medias = Media::all();
            
            View::share(compact('categories', 'medias', 'aboutUs', 'featurePosts', 'mostViewPosts', 'banner'));
        }
    }
}
