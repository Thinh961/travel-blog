<?php

use App\Http\Controllers\AdminAboutUsController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminMediaController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ContactController;
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

/**Client Router */
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

/**Admin Router */
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
        Route::get('posts/show/{id}', [AdminPostController::class, 'show'])->name('posts.show');
        Route::post('posts/update/{id}', [AdminPostController::class, 'update'])->name('posts.update');
        Route::get('posts/destroy/{id}', [AdminPostController::class, 'destroy'])->name('posts.destroy');

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

        Route::get('medias/create', [AdminMediaController::class, 'create'])->name('medias.create');
        Route::post('medias/store', [AdminMediaController::class, 'store'])->name('medias.store');
        Route::get('medias/show/{id}', [AdminMediaController::class, 'show'])->name('medias.show');
        Route::post('medias/update/{id}', [AdminMediaController::class, 'update'])->name('medias.update');
        Route::get('medias/destroy/{id}', [AdminMediaController::class, 'destroy'])->name('medias.destroy');

        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/show/{id}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::get('contacts/destroy/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

    });
});

require __DIR__ . '/auth.php';
