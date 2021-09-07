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

Route::group(['middleware' => ['visitor_log']], function () {
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
  Route::resource('/online-admission',  App\Http\Controllers\frontend\crudcontroller\admissionController::class);
  Route::get('/new-franchise', [App\Http\Controllers\frontend\crudcontroller\franchiseController::class, 'franchiseform'])->name('franchiseform');
  Route::get('/locate-franchise', [App\Http\Controllers\frontend\crudcontroller\franchiseController::class, 'franchiselocate'])->name('franchiselocate');
  Route::resource('/franchise',  App\Http\Controllers\frontend\crudcontroller\franchiseController::class);
  //===========Post Methods===============================
  Route::post('/postcontactform', [App\Http\Controllers\frontend\webSiteController::class, 'postcontactform'])->name('postcontactform');

 //==================================Student Route=========================================
 Route::get('/cerificate_verification', [App\Http\Controllers\frontend\studentController::class, 'certificate'])->name('getcerificate');
 Route::get('/admintcard_download', [App\Http\Controllers\frontend\studentController::class, 'admitcard'])->name('getadmintcard');
 Route::get('/admission_verification', [App\Http\Controllers\frontend\studentController::class, 'admission'])->name('getadmission');
 Route::get('/result_download', [App\Http\Controllers\frontend\studentController::class, 'result'])->name('getresult');





































  //==================================Admins routes=====================================
  Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/importcerificate', [App\Http\Controllers\admin\dashboardController::class, 'importcerificate'])->name('importcerificate');
    Route::post('/importadmitcard', [App\Http\Controllers\admin\dashboardController::class, 'importadmitcard'])->name('importadmitcard');
    Route::post('/importaresult', [App\Http\Controllers\admin\dashboardController::class, 'importaresult'])->name('importaresult');
  });




  //==================================Custom Route=========================================
  Route::get('/getcerificatesubmit', [App\Http\Controllers\frontend\webpageController::class, 'getcerificate'])->name('getcerificatesubmit');
  Route::get('/getadmintcardsubmit', [App\Http\Controllers\frontend\webpageController::class, 'getadmintcard'])->name('getadmintcardsubmit');
  Route::get('/getadmissionsubmit', [App\Http\Controllers\frontend\webpageController::class, 'getadmission'])->name('getadmissionsubmit');
  Route::get('/getresultsubmit', [App\Http\Controllers\frontend\webpageController::class, 'getresult'])->name('getresultsubmit');


//==============================Clear Route================
Route::get('/clear', function() {

  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('config:cache');
  Artisan::call('view:clear');

  return "Cleared!";

});
Route::match(['get', 'post'], 'register', function(){
  return redirect('/');
  });




});