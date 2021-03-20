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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Auth::routes();


//==================================Admins routes=====================================
Route::middleware(['auth'])->group(function () {
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::post('/importcerificate', [App\Http\Controllers\admin\dashboardController::class, 'importcerificate'])->name('importcerificate');
  Route::post('/importadmitcard', [App\Http\Controllers\admin\dashboardController::class, 'importadmitcard'])->name('importadmitcard');
  Route::post('/importaresult', [App\Http\Controllers\admin\dashboardController::class, 'importaresult'])->name('importaresult');
});




//==================================Custom Route=========================================
Route::get('/getcerificate', [App\Http\Controllers\frontend\webpageController::class, 'getcerificate'])->name('getcerificate');
Route::get('/getadmintcard', [App\Http\Controllers\frontend\webpageController::class, 'getadmintcard'])->name('getadmintcard');
Route::get('/getadmission', [App\Http\Controllers\frontend\webpageController::class, 'getadmission'])->name('getadmission');
Route::get('/getresult', [App\Http\Controllers\frontend\webpageController::class, 'getresult'])->name('getresult');
