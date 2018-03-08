<?php

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
Route::get('/layouts/main', function () {
    return view('/layouts/main');
});

Route::get('/page1', function () {
    $array=["NAME"=>"",
    "ID"=>"",
    "GEN"=>"",
    "PRICE"=>""];
    return view('page/page1',$array);
});

Route::get('/page2', function () {
    return view('page/page2');
});

Route::get('/page3', function () {
    return view('page/page3');
});

Route::get('/page4', function () {
    return view('page/page4');
});

Route::get('/page10/{id}', function ($id) {
    $array=[
        "ID"=>$id
    ];
    return view('page.page10',$array);
});

Route::post('/page','PageController@show');