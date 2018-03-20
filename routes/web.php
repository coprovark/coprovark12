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
    $array=["NUMBER"=>""];
    return view('page/page3',$array);
});

Route::get('/page4', function () {
    return view('page/page4');
});

Route::get('/page5', function () {
    return view('page/page5');
});


Route::get('/page10/{id}', function ($id) {
    $array=[
        "ID"=>$id
    ];
    return view('page.page10',$array);
});





Route::post('/page','PageController@show');
Route::post('/page11','PageController@show_select');
Route::post('/page12','PageController@show_pass');


Route::get('/form_register', function () {
    return view('page.form_register');
});

Route::post('/page','PageController@ShowLogin');
Route::get('/form_login', function () {
    $data = ["USER"=>"",'PASSWORD'=>""];
    return view('page.form_login',$data);
});

Route::get('/form_check_login', function () {
    $data=[
            'users'=>[]
    ];
    return view('page.form_check_login',$data);
});
Route::post('/form_check_login','PageController@form_check_login');


Route::get('/form_login', function () {
    $data=[
            'users'=>[]
    ];
    return view('page.form_login',$data);
});
Route::post('/form_login','PageController@form_login');




Route::get('/form_login2', function () {
    $data = ['username' => '',
             'name'=>''];
    return view('page.form_login',$data);
});
Route::post('/form_login2','PageController@form_login2');



// Route::get('/list_users',function(){
//         return view('page.list_users');
// });
Route::get('/list_users','UsersController@list_users');



Route::get('delete_user/{id}', function ($id) {
    return 'User ='.$id;
});
Route::get('/delete_user/{id}','UsersController@delete_users');

Route::post('/form_register_save','UsersController@form_register_save');

Route::post('/list_users_find','UsersController@list_users_find');
//-------------------------------------------------------//


Route::get('/std_form', function () {
    return view('page.std_form');
});
//หน้าแสดงข้อมูลนักศึกษา
Route::get('/std_show', function () {
    return view('page.std_show');
});
Route::get('/std_show','UsersController@std_show');//แสดงผลในตาราง
Route::get('/delete_std/{id}','UsersController@delete_std');//ลบ
Route::get('/save_std','UsersController@save_std');//เพิ่ม
Route::post('/find_std','UsersController@find_std');//ค้นหา