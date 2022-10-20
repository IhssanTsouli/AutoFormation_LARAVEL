<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   public function afficher(){
    return "hello world";

   }
   public function index(){
    $name="ihssan";
    $age=22;
    return view('index',compact('name','age'));
   }
}

