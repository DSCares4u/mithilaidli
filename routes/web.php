<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/blog-page',[HomeController::class,'blog']);
Route::get('/whyus',[HomeController::class,'whyUs']);
Route::get('/brand-story',[HomeController::class,'brandStory']);
Route::get('/franchise-query',[HomeController::class,'franchiseQuery']);
Route::get('/book-event',[HomeController::class,'bookEvent']);
Route::get('/cart-locator',[HomeController::class,'cartLocator']);
Route::get('/career-page',[HomeController::class,'career']);
Route::get('/career-applied/{id}',[HomeController::class,'appliedCareer']);


Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin',[AdminController::class,'manageOrder']);
Route::get('/admin/manage-order/insert',[AdminController::class,'insertOrder']);
Route::get('/admin/manage-franchise',[AdminController::class,'manageFranchise']);
Route::get('/admin/manage-franchise/insert',[AdminController::class,'insertFranchise']);
Route::get('/admin/manage-event',[AdminController::class,'manageEvent']);
Route::get('/admin/manage-event/insert',[AdminController::class,'insertEvent']);
Route::get('/admin/manage-blog',[AdminController::class,'manageBlog']);
Route::get('/admin/manage-blog/insert',[AdminController::class,'insertBlog']);
Route::get('/admin/manage-career',[AdminController::class,'manageCareer']);
Route::get('/admin/manage-career/insert',[AdminController::class,'insertCareer']);
Route::get('/admin/manage-job-form',[AdminController::class,'manageJobForm']);
Route::get('/admin/manage-job-form/insert',[AdminController::class,'insertJobForm']);
Route::get('/admin/manage-rating',[AdminController::class,'viewRating']);
