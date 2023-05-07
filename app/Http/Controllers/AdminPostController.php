<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostUpdateRequest;
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

    public function index(Request $request)
    {
        $keyword = ($request->keyword);
        $posts = Post::with('category.translations')->paginate(10);
        if (!empty($keyword)) {
            $posts = Post::with(['category.translations', 'translations'])
            ->whereHas('translations', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->orWhereHas('category.translations', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->paginate(10);
        }

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
            'feature' => $request->feature ?? self::STATUS_OFF,
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

    public function show($id)
    {
        $categories = CategoryTrait::getNestedCategories(0, 0);
        $post = Post::with('category.translations')->find($id);
        return view('admin.posts.update', compact('post', 'categories'));
    }

    public function update(PostUpdateRequest $request, $id)
    {
        $data = [
            'active' => $request->active ?? self::STATUS_OFF,
            'feature' => $request->feature ?? self::STATUS_OFF,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name, '-'),
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
        if (!empty($request->image)) {
            $data['image'] = $this->uploadService->uploadImage($request->image, self::UPLOAD_FOLDER);
        }
        Post::find($id)->update($data);
        $this->toastUpdateSuccess();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Post::destroy($id);
        $this->toastDeleteSuccess();
        return redirect()->back();
    }
}
