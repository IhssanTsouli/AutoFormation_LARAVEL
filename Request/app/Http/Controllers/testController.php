<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(Request $request){
        $name=$request->input("name");
        $email=$request->input("email");
        return view('index',compact("name","email"));
    }
}
