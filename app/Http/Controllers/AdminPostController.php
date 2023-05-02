<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\CategoryTrait;
use Illuminate\Support\Str;
use App\Services\UploadService;

class AdminPostController extends Controller
{
    /** @var string upload folder */
    const UPLOAD_FOLDER = 'posts';

    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'posts']);
            return $next($request);
        });
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $posts = Post::with('category.translations')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = CategoryTrait::getNestedCategories(0, 0);
        return view('admin.posts.create', compact('categories'));
    }

    public function store(PostCreateRequest $request)
    {
        $data = [
            'active' => $request->active ?? self::STATUS_OFF,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name, '-'),
            'image' => $this->uploadService->uploadImage($request->image, self::UPLOAD_FOLDER),
            'vie' => [
                'name' => $request->name,
                'description' => $request->description,
                'content' => $request->content,
            ],
            'zh' => [
                'name' =>  $request->name_zh,
                'description' => $request->description_zh,
                'content' => $request->content_zh,
            ],
        ];
        Post::create($data);
        $this->toastCreateSuccess();

        return redirect()->back();
    }
}
