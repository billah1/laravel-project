<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    public function home()
    {
        return view('home',[
            'page_name' =>'Home page',
            'name' => 'larael 9 course'
        ]);
    }
    public function about()
    {
        return view('about',[
            'page_name' => 'About page',
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
        $services = [
            'web design',
            'web development',
            'app development',
            'graphices development',
           ];
           return view('service',compact('services'));
    }
    
}
