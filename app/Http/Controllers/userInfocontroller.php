<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userInfocontroller extends Controller
{
    public function __invoke(Request $request) {
        $secret_key = 85978;
    $user_key = $request->user_key;

    $data = [
        'user_name' =>'Masum Billah',
        'designation' =>'full stack developer',
        'mobile' => '01968949523',
        'bank_acc' =>'7017010736686',
    ];
    if($secret_key == $user_key){
        return response()->json([
            'user_info' =>$data
        ]);

    }else
    return response([
        'message' =>'provide valid secret key'
    ],404);

    }
}
