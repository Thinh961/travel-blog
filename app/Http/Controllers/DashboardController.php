<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'dashboard']);

            return $next($request);
        });
    }

    public function index()
    {
        $countPost = Post::count();
        $countCategory = Category::count();
        $countContact = Contact::count();
        return view('admin.home', compact('countPost', 'countCategory', 'countContact'));
    }
}
