<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/order-now',[HomeController::class,'orderPage']);
Route::get('/carrer',[HomeController::class,'carrer']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/whyus',[HomeController::class,'whyUs']);
Route::get('/brand-story',[HomeController::class,'brandStory']);
Route::get('/franchise-query',[HomeController::class,'franchiseQuery']);
