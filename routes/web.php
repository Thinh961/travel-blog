<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
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

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('admin.')->prefix('admin/')->group(function () {
        Route::get('categories', [AdminCategoryController::class, 'index'])->name('categories.index');
        Route::get('categories/create', [AdminCategoryController::class, 'create'])->name('categories.create');
        Route::post('categories/store', [AdminCategoryController::class, 'store'])->name('categories.store');
        Route::get('categories/show/{id}', [AdminCategoryController::class, 'show'])->name('categories.show');
        Route::post('categories/update/{id}', [AdminCategoryController::class, 'update'])->name('categories.update');
        Route::get('categories/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('categories.destroy');

        Route::get('posts/index', [AdminPostController::class, 'index'])->name('posts.index');
        Route::get('posts/create', [AdminPostController::class, 'create'])->name('posts.create');

        Route::get('users/show', [AdminUserController::class, 'show'])->name('users.show');
        Route::post('users/update', [AdminUserController::class, 'update'])->name('users.update');
    });
});

require __DIR__ . '/auth.php';
