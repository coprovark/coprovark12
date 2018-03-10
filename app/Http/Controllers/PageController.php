<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
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
}