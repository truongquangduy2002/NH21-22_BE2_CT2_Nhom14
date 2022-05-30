<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return view('index');
    }
    // function signup(Request $request){
    //     $request->flash();
    //  echo $request->old('tname');
    //  $name = $request->tname;
    //  return view('output',['tname'=>$name]);
    // }
}
