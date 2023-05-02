<?php

namespace App\Http\Controllers;

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
        return view('admin.home');
    }
}
