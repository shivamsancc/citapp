<?php

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

Route::group(['prefix' => 'admin','middleware' => ['auth','Visitor_log']], function () {

    Route::get('/dashboard', [App\Http\Controllers\admin\dashboardController::class, 'dashboard'])->name('dashboard');
    //==========================Master Settings=======================
    Route::get('/master', [App\Http\Controllers\admin\master\masterController::class, 'index'])->name('master_dashboard');
    Route::get('/master/create', [App\Http\Controllers\admin\master\masterController::class, 'create'])->name('master_create');
    Route::post('/master/store', [App\Http\Controllers\admin\master\masterController::class, 'store'])->name('master_store');
    Route::get('/master/edit/{id}', [App\Http\Controllers\admin\master\masterController::class, 'edit'])->name('master_edit');
    Route::post('/master/update/{id}', [App\Http\Controllers\admin\master\masterController::class, 'update'])->name('master_update');
    Route::post('/master/update/{id}', [App\Http\Controllers\admin\master\masterController::class, 'update'])->name('master_update');
    Route::get('/master/destroy/{id}', [App\Http\Controllers\admin\master\masterController::class, 'destroy'])->name('master_destroy');
    Route::get('/master/download/{id}', [App\Http\Controllers\admin\master\masterController::class, 'download'])->name('master_download');
    Route::resource('/course',  App\Http\Controllers\admin\courseController::class);
    Route::resource('/coursecategory',  App\Http\Controllers\admin\coursecategoryController::class);
    Route::resource('/slider',  App\Http\Controllers\admin\sliderController::class);
    Route::resource('/contact_query',  App\Http\Controllers\admin\contact_query::class);
    Route::resource('/gallery',  App\Http\Controllers\admin\galleryController::class);
    Route::resource('/page',  App\Http\Controllers\admin\master\pageController::class);
});