<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\CategoryTrait;


class AdminCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'category']);

            return $next($request);
        });
    }

    public function index()
    {
        $categories = CategoryTrait::paginateNestedCategories(0, 10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = CategoryTrait::getNestedCategories(0, 0);
        return view('admin.category.create', compact('categories'));
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = [
            'active' => $request->active ?? self::STATUS_OFF,
            'parent_id' => $request->parent_id ?? 0,
            'slug' => Str::slug($request->name, '-'),
            'vie' => ['name' => $request->name],
            'zh' => ['name' =>  $request->name_zh],
        ];
        Category::create($data);
        $this->toastCreateSuccess();

        return redirect()->back();
    }

    public function show($id)
    {
        $categories = CategoryTrait::getNestedCategories(0, 0);
        $category = Category::find($id);
        return view('admin.category.update', compact('category', 'categories'));
    }

    public function update(CategoryCreateRequest $request, $id)
    {
        $data = [
            'active' => $request->active ?? 'off',
            'parent_id' => $request->parent_id ?? 0,
            'slug' => Str::slug($request->name, '-'),
            'vie' => ['name' => $request->name],
            'zh' => ['name' =>  $request->name_zh],
        ];
        Category::find($id)->update($data);
        $this->toastUpdateSuccess();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::destroy($id);
        $this->toastDeleteSuccess();
        return redirect()->back();
    }
}
