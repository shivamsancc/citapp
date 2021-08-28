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

Route::group(['middleware' => ['Visitor_log']], function () {
  include('admin_route.php');
  Auth::routes();






//===================Website Route=========================
  Route::get('/', [App\Http\Controllers\frontend\webSiteController::class, 'index'])->name('homepage');
  Route::get('/page/{slug}', [App\Http\Controllers\frontend\webSiteController::class, 'dynamicpage'])->name('dynamicpage');
  Route::get('/about', [App\Http\Controllers\frontend\webSiteController::class, 'aboutpage'])->name('aboutpage');
  Route::get('/course', [App\Http\Controllers\frontend\webSiteController::class, 'coursepage'])->name('coursepage');
  Route::get('/course/{slug}', [App\Http\Controllers\frontend\webSiteController::class, 'onecoursepage'])->name('onecoursepage');
  Route::get('/gallery', [App\Http\Controllers\frontend\webSiteController::class, 'gallery'])->name('gallery');
  Route::get('/gallery/{slug}', [App\Http\Controllers\frontend\webSiteController::class, 'gallerysingle'])->name('gallerysingle');
  Route::get('/contact', [App\Http\Controllers\frontend\webSiteController::class, 'contact'])->name('contact');

  //===========Post Methods===============================
  Route::post('/postcontactform', [App\Http\Controllers\frontend\webSiteController::class, 'postcontactform'])->name('postcontactform');







































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


//==============================Clear Route================
Route::get('/clear', function() {

  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('config:cache');
  Artisan::call('view:clear');

  return "Cleared!";

});




});