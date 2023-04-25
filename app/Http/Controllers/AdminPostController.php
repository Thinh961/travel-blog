<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
    }
}
