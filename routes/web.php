<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

Route::get('/', [MainController::class, 'index_page'])->name('sait.home.page');

Route::get('/news', [PostController::class, 'getCategories'])->name('sait.home.category.list');
Route::get('/news/{category:cat_alias}', [PostController::class, 'getCategoryData'])->name('sait.category.list.show');
Route::get('/news/{category:cat_alias}/{post}', [PostController::class, 'getPostForCategory'])->name('sait.category.list.show.news.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
