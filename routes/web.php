<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    // dd(
    //     // "Laravel 9"
    //     $request->path(), //path
    //     $request->is('/'), //1 or 0
    //     $request->fullUrl(),
    //     $request->host(),
    //     $request->httpHost(),
    //     $request->schemeAndHttpHost(),


    //     $request->routeIs('home'),
    //     $request->header('X-Header-Name'),
    //     $request->header('X-Header-Name','default'),
    //     $request->bearerToken(),//used in api building
    //     $request->ip(),
    //     $request->prefers(['text/html','aplication/json']),
    // );
    // $data = [
    //     'page_name' => 'Home page',
    //     'name' =>'laravel 9 cpurse'
    // ];
    // return response($data)
    // ->header('content-type','Application/Json')
    // ->cookie('My_IDCard', 'Masum Billah', 3600);

    return view('home',[
        'page_name' =>'Home page',
        'name' => 'larael 9 course'
    ]);
    // return redirect('/contact-page');

})->name('home');


Route::get('/about_us', function () {
    return view('about',[
        'page_name' => 'About page',
    ]);

})->name('about');

Route::get('/contact_page', function () {
     $page_name = "contact page";


     $products = [
        1=>[
            'name' => 'bag',
            'color' => 'red',
            'price' => '1200',
        ],
        2 =>[
            'name' => 'sunglass',
            'color' => 'black',
            'price' => '600',
        ],
        3 =>[
            'name' => 'bpdyspray',
            'color' => 'black',
            'price' => '150',
        ],
     ];
    //  $product_count = count($products);
    //  return response()->json([
    //     'products' => $products,
    //     'product_count' =>$product_count,
    //  ],200);
    return view('contact',compact('page_name','product_count','products'));
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

