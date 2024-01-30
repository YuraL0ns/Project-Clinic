<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DoctorController;

// Обновить согласно путям и наименованиям

Route::get('/', [MainController::class, 'index_page'])->name('sait.home.page');

Route::prefix('news')->name('sait.news.')->group(function (){
    Route::get('/', [PostController::class, 'getPostsList'])->name('list');
    Route::get('/{post_alias}', [PostController::class, 'getPostData'])->name('info');
});

Route::get('/services', [ServicesController::class, 'getServicesList'])->name('sait.home.services.list');
Route::get('/services/{razdel_alias}', [ServicesController::class, 'getRazdelData'])->name('sait.razdel.show');
Route::get('/services/{razdel_alias}/{alias}', [ServicesController::class, 'getServicesInfo'])->name('sait.razdel.show.services');

Route::get('/specialist', [DoctorController::class, 'getDoctorData'])->name('sait.doctor.list');
Route::get('/specialist/{doctor_name}', [DoctorController::class, 'getDoctorShowData'])->name('sait.doctor.show');

Route::get('support',  [MainController::class, 'page_support'])->name('sait.page.support');
Route::get('price-for-services', [MainController::class, 'page_price'])->name('sait.page.price');
Route::get('time-to-work', [MainController::class, 'page_tiemToWorks'])->name('sait.page.timeToWork');
Route::get('abouts', [MainController::class, 'page_abouts'])->name('sait.page.abouts');
Route::get('documents', [MainController::class, 'page_documents'])->name('sait.page.documents');

Route::get('sales', function(){});
















//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
