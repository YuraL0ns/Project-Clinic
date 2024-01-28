<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DoctorController;

Route::get('/', [MainController::class, 'index_page'])->name('sait.home.page');

Route::get('/news', [PostController::class, 'getCategories'])->name('sait.home.category.list');
Route::get('/news/{cat_alias}', [PostController::class, 'getCategoryData'])->name('sait.category.list.show');
Route::get('/news/{cat_alias}/{post_alias}', [PostController::class, 'getPostForCategory'])->name('sait.category.list.show.news.show');


Route::get('/services', [ServicesController::class, 'getServicesList'])->name('sait.home.services.list');
Route::get('/services/{razdel_alias}', [ServicesController::class, 'getRazdelData'])->name('sait.razdel.show');
Route::get('/services/{razdel_alias}/{alias}', [ServicesController::class, 'getServicesInfo'])->name('sait.razdel.show.services');

Route::get('/specialist', [DoctorController::class, 'getDoctorData'])->name('sait.doctor.list');
Route::get('/specialist/{doctor_name}', [DoctorController::class, 'getDoctorShowData'])->name('sait.doctor.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
