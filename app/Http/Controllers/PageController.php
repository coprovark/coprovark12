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
        $txtradio = $request->input('radio');
        $txtcheckbox = $request->input('checkbox');
        $txthidden = $request->input('hidden');

        $array=["NAME"=>$txtname,
        "ID"=>$txthidden,
        "GEN"=>$txtradio,
        "PRICE"=>$txtcheckbox];
        return view('page.page1',$array);
    }
}