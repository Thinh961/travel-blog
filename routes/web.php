<?php

use App\Http\Controllers\AdminAboutUsController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

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
        Route::post('posts/store', [AdminPostController::class, 'store'])->name('posts.store');

        Route::get('users/show', [AdminUserController::class, 'show'])->name('users.show');
        Route::post('users/update', [AdminUserController::class, 'update'])->name('users.update');

        Route::get('banners/index', [AdminBannerController::class, 'index'])->name('banners.index');
        Route::get('banners/create', [AdminBannerController::class, 'create'])->name('banners.create');
        Route::post('banners/store', [AdminBannerController::class, 'store'])->name('banners.store');
        Route::get('banners/show/{id}', [AdminBannerController::class, 'show'])->name('banners.show');
        Route::post('banners/update/{id}', [AdminBannerController::class, 'update'])->name('banners.update');
        Route::get('banners/destroy/{id}', [AdminBannerController::class, 'destroy'])->name('banners.destroy');

        Route::get('about-us/create', [AdminAboutUsController::class, 'create'])->name('about_us.create');
        Route::post('about-us/store', [AdminAboutUsController::class, 'store'])->name('about_us.store');
    });
});

require __DIR__ . '/auth.php';
