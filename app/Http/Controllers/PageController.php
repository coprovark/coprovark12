<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    
    public function show(Request $request)
    {
        $txtname = $request->input('name');
        $txtradio = $request->input('sex');
        $txtcheckbox = $request->input('price');
    
        $txtnum=$request->input('number');

        $array=["NAME"=>$txtname,
        "ID"=>$txtname,
        "GEN"=>$txtradio,
        "PRICE"=>$txtcheckbox];
        return view('page.page1',$array);
    }
    public function show_select(Request $res){
        return view('page.page11',$res);
    }
    public function show_pass(Request $request){
        $txtpass=$request->input('pass');
        $array=["pass"=>$txtpass];
        return view('page.page12',$array);
    }
    public function ShowLogin(Request $request)
    {
        $txtUser = $request->input('user');
        $txtPassword = $request->input('password');
        $data = ["USER"=>$txtUser,"PASSWORD"=>$txtPassword];
        return view('page.form_login',$data);
    }
    public function form_check_login(Request $res)
    {
        $users = DB::select('select * from users where username = ? and password = ?' , 
                            [$res['username'],$res['password']]
                           );
                           return View('page.form_check_login',['users'=>$users]);
    }
    public function form_login(Request $res)
    {
        $users = DB::select('select * from users where username = ? and password = ?' , 
                            [$res['username'],$res['password']]
                           );
                           $txtUser = $res->input('user');
                           $txtPassword = $res->input('password');
                           foreach ($users as $value) {
                              if($txtUser == $value->username){
                                  if($txtPassword == $value->password){
                                    $data['status']="true";
                                  }
                              }
                           }
                           return View('page.form_login',['users'=>$users]);
    }
    public function form_login2(Request $res){
        $users = DB::table('users')->where([
            ['username','=',$res['username']],
            ['password','=',$res['password']]
        ])->get();
        $name='';
        foreach($users as $value){
            $name = $value->id;
        }
        $res['name']=$name;

        return view('page.form_login',$res);
   }
   
}

