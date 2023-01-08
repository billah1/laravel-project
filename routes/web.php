<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\postcontroller;
use App\Http\Controllers\frontcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\userInfocontroller;
use App\Http\Controllers\subcategorycontroller;

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

Route::get('/', [frontcontroller::class,'home'])->name('home');


Route::get('/about_us',[frontcontroller::class,'about'])->name('about');

Route::get('/contact_page',[frontcontroller::class,'contact'])->name('contact');

Route::get('/service_page',[frontcontroller::class,'service'])->name('service');

Route::get('/send-me-details',userInfocontroller::class)->name('sendmedetails');

Route::resource('/category', categorycontroller::class);
Route::get('/category/{category_id}/restore',[categorycontroller::class,'restore'])->name('category.restore');
Route::resource('/subcategory', subcategorycontroller::class);
Route::get('books',[frontcontroller::class,'books']);


