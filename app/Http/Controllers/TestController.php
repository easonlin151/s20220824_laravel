<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

//php artisan make:controller TestController


class TestController extends Controller
{
    public function testFun(){
        // dd('testFun ok');
        $price = 100;

        return view('kr',['price'=> $price]);
    }

    public function dis7(){
        // dd('testFun ok');
        $price = 100;
        $price = $price *0.7;

        return view('kr',['price'=> $price]);
    }

    public function dis5(...$arg){
        // dd('testFun ok');
        $price = $arg[0];
        $price = $price * $arg[1];

        return view('kr',['price'=> $price]);
    }
}

