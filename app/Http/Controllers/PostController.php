<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\CategoryTrait;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index($slug, $id)
    {
        $category = Category::with(['translations', 'descendants'])->find($id);
        $categoryIds = CategoryTrait::getCategoryIds($category);
        $categoryIds = array_merge($categoryIds, [$id]);
        $posts = Post::with(['translations'])
            ->whereIn('category_id', $categoryIds)
            ->where('active', 'on')
            ->paginate(10);

        return view('user.post.index', compact('category', 'posts'));
    }

    public function show($slug, $id)
    {
        $post = Post::with('translations')->where(['active' => 'on', 'id' => $id])->first();
        if (!$this->hasViewedPostRecently($id)) {
            $post->increment('view');
            $this->markPostAsViewed($id);
        }

        return view('user.post.detail', compact('post'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $posts = Post::with(['category.translations', 'translations'])
            ->where(function ($query) use ($keyword) {
                $query->whereHas('translations', function ($query) use ($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%');
                })->orWhereHas('category.translations', function ($query) use ($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%');
                });
            })
            ->where('active', 'on')
            ->paginate(10);

        return view('user.post.search', compact('posts', 'keyword'));
    }

    private function hasViewedPostRecently($id)
    {
        $viewedPosts = session()->get('viewed_posts', []);
        return isset($viewedPosts[$id]) && Carbon::now()->lt(Carbon::parse($viewedPosts[$id])->addMinutes(1));
    }

    private function markPostAsViewed($id)
    {
        $viewedPosts = session()->get('viewed_posts', []);
        $viewedPosts[$id] = Carbon::now()->toDateTimeString();
        session()->put('viewed_posts', $viewedPosts);
    }
}
