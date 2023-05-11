<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug, $id)
    {
        return $slug . $id;
    }
}
