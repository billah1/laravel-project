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
    return view('home',[
        'page_name' =>'Home page',
        'name' => 'larael 9 course'
    ]);

})->name('home');

Route::get('/about_us', function () {
    return view('about',[
        'page_name' => 'About page',
    ]);

})->name('about');

Route::get('/contact_page', function () {
     $page_name = "contact page";
     $product_count = "10";
     $color ="red";
     $products = [];
    return view('contact',compact('page_name','product_count','color','products'));
})->name('contact');

Route::get('/service_page', function () {
    $services = [
     'web design',
     'web development',
     'app development',
     'graphices development',
    ];
    return view('service',compact('services'));
})->name('service');

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

