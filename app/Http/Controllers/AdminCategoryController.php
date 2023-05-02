<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\CategoryTrait;


class AdminCategoryController extends Controller
{
    public function create()
    {
        $categories = CategoryTrait::paginateNestedCategories(0, 10);
        return view('admin.category.create', compact('categories'));
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = [
            'active' => $request->active,
            'parent_id' => $request->parent_id ?? 0,
            'slug' => Str::slug($request->name, '-'),
            'vie' => ['name' => $request->name],
            'zh' => ['name' =>  $request->name_zh],
        ];
        Category::create($data);
        $this->toastCreateSuccess();

        return redirect()->back();
    }
}
