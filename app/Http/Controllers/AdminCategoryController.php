<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store()
    {
    }
}
