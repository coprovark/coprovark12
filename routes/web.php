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





Route::get('/list_user_edit/{id}','UsersController@list_user_edit');
Route::get('/list_user_update','UsersController@list_user_update');

//COPRO

Route::get('/co_register', function () {
    return view('page.co_register');
});
Route::get('/co_member', function () {
    return view('page.co_member');
});
Route::get('/co_detail', function () {
    return view('page.co_detail');
});
Route::get('/co_register', function () {
    return view('page.co_register');
});
Route::get('/co_member', function () {
    return view('page.co_member');
});
Route::get('/co_detail', function () {
    return view('page.co_detail');
});
Route::get('/co_member','UsersController@co_show');//แสดงผลในตาราง
Route::post('/find_co','UsersController@find_co');//ค้นหา
Route::post('/co_insert','UsersController@co_insert');//เพิ่ม
Route::get('/co_register','UsersController@list');//เพิ่ม->แสดง list คำนำหน้า,สาขา
Route::get('/delete_co/{id}','UsersController@delete_co');//ลบ
Route::get('/co_detail/{id}','UsersController@co_detail');//รายละเอียด
Route::get('/co_edit/{id}','UsersController@co_edit');//แก้ไข
Route::post('/co_update','UsersController@co_update');
// Route::get('/upload1', function () {
//     return view('file.upload');
// });
Route::get('/upload1','FileController@show');
Route::post('/upload1','FileController@upload');//upload
Route::get('/dl/{path}/{name}','FileController@dl');//download
Route::get('/rm/{ID}','FileController@rm');//delete
Route::get('/ed/{ID}','FileController@ed');//edit
Route::post('/update1','FileController@update1');//edit
//--------------------------------------------------//

Route::post('/api/delete','FileController@deleteItem');