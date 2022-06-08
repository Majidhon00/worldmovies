<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\rekController;
use App\Http\Controllers\trailerController;
use App\Http\Controllers\VideoController;
use App\Models\trailer;
use Illuminate\Support\Facades\Auth;
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

Route::resource('/', indexController::class);
Route::resource('index', indexController::class);

Route::resource('video',VideoController::class);
Route::resource('admin2',adminController::class)->middleware('auth');
Route::resource('trailer',trailerController::class)->middleware('auth');
Route::resource('rek',rekController::class);
Route::get('vid/{video}',[indexController::class,'show']);
Route::get('deltr/{trailer}',[trailerController::class,'destroy']);
Route::get('up/{id}',[adminController::class,'edit']);
Route::get('del/{video}',[adminController::class,'destroy']);
Route::get('showvid/{video}',[VideoController::class,'index']);
Route::get('vid/live/{id}',[indexController::class,'live'])->name('live');
Route::get('video/live/{id}',[indexController::class,'live'])->name('live');
Route::post('ajaxtdata',[VideoController::class,'ajaxdata'])->name('ajaxdata');
Route::post('ajaxtable',[adminController::class,'ajaxtable'])->name('ajaxtable');
// Route::get() 
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
