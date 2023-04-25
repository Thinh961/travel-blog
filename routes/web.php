<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('admin.')->prefix('admin/')->group(function () {
        Route::get('category', [AdminCategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [AdminCategoryController::class, 'create'])->name('category.create');
        Route::get('category/store', [AdminCategoryController::class, 'store'])->name('category.store');
    });
});

require __DIR__ . '/auth.php';
