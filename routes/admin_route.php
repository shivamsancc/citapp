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

Route::group(['prefix' => 'admin','middleware' => ['Visitor_log']], function () {

    Route::get('/dashboard', [App\Http\Controllers\admin\dashboardController::class, 'dashboard'])->name('dashboard');
    //==========================Master Settings=======================
    Route::get('/master', [App\Http\Controllers\admin\master\masterController::class, 'index'])->name('master_dashboard');
});