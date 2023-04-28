<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminCategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = [
            'active' => $request->active,
            'slug' => Str::slug($request->name, '-'),
            'vie' => ['name' => $request->name],
            'zh' => ['name' =>  $request->name_zh],
        ];
        Category::create($data);
        $this->toastCreateSuccess();

        return redirect()->back();
    }
}
