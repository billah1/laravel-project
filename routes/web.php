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
})->name('home');

Route::get('/about_us', function () {
    return view('about');
})->name('about');

Route::get('/contact_page', function () {
    return view('contact');
})->name('contact');

Route::get('/service_page/{service_id}/{service_name?}', function ($service_id,$service_name=null) {
    // return view('service');
    return "service".$service_id.' '.$service_name;
})->name('service');
Route::get('/user/{name}',function($name){
    echo $name;
})->where('name');
