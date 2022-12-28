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

Route::resource('/subcategory', subcategorycontroller::class);

// Route::prefix('page')->name('laravel.')->group(function(){
//    Route::get('/home',function(){
//     return view('home');
//    })->name('home');
//    Route::get('/contact',function(){
//     return view('contact');
//    })->name('contact');
//    Route::get('/about',function(){
//     return view('about');
//    })->name('about');
//    Route::get('/service',function(){
//     return view('service');
//    })->name('service');
// });

// Route::get('/course-count/download',function(){
//     return response()->download(public_path('/course_content.pdf'),'laravel 9 master class.pdf');
// });

// Route::get('/service-page/{service_id}/{service_name?}', function ($service_id,$service_name=null) {

//     return "Service".$service_id.''.$service_name;
// })->name('service');
// Route::get('/user/{id}/{name}',function($id,$name){
//     echo $id, $name;
// })->where(['id' =>'[0-9]+','name' =>'[a-z]+']);

// Route::get('/category/{category_name}',function($category_name){
//     echo $category_name;
// })->whereIn('category_name',['electronices','movie','books','watch','laptop']);

// Route::get('/search/{keywords}',function($keywords){
//     echo $keywords;
// })->where('keywords','.*');

