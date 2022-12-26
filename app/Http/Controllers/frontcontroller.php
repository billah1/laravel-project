<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\category;
use App\Models\subcatergory;
use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    public function home()
    {
        $users =  User::where('created_at','<=',now())->get();
        return view('home',[
            'page_name' =>'Home page',
            'name' => 'larael 9 course',
            'users' =>$users
        ]);
    }
    public function about()
    {
        $categories =category::all();
        // dd($categories);
        return view('about',[
            'page_name' =>'About page',
            'categories' =>$categories
        ]);
    }
    public function contact()
    {
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
    return view('contact',compact('page_name','products'));
    }
    public function service()
    {
        $subcategories = subcatergory::all();
        $services = [
            'web design',
            'web development',
            'app development',
            'graphices development',
           ];
           return view('service',[
           'subcategories' =>$subcategories,
           ],compact('services'));
    }
    public function userindex(){
        $users =  User::all();

        return view('home',[
            'users' =>$users
        ]);
    }
    public function categoryindex(){
        $categories =  category::all();

        return view('about',[
            'categories' =>$categories
        ]);
    }

}
