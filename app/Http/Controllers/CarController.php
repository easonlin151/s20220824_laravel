<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CarController extends Controller{
    function index(){
        return view('car.index');
    }
}