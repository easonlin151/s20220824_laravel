<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CarController;

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
});

Route::get('/kr_url', function () {
    return view('kr');
});

Route::get('/usa_url', function () {
    return view('usa');
});

Route::get('/index_url', function () {
    return view('index');
});

Route::get('/oop', function () {
    return view('oop');
});

Route::get('/admin_index', function () {
    return view('admin.index');
});

//admin prefix
Route::prefix('/admin')->group(function () {
    Route::get('/student' ,function() {
        // dd('admin student');
        return view('admin.student');
    });

    Route::get('/product', function() {
        // dd('admin product');
        return view('admin.product');
    });
});

// single controller
Route::get('/test',[TestController::class, 'testFun']);
Route::get('/dis7',[TestController::class, 'dis7']);
Route::get('/car',[CarController::class, 'index']);




Route::get('/eat/{name}/{num}', function (Request $request,$name,$num) {

    $data = [
        'name' => $name,
        'num' => $num
    ];
    return view('eat',['data'=> $data]);
});


Route::get('/dis7/{name}/{num}', function (Request $request,$name,$num) {

    $data = [
        'name' => $name,
        'num' => $num
    ];
    return view('eat',['data'=> $data]);
});
// 練習三
// 建立CarController
// index function
// car.index.blade.php







