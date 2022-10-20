<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $user = DB::table('promotion')->get();
 
        return view('index',compact('user'));
    }

    public function FindId($id)
    {
        $user = DB::table('promotion')->where("id",$id)->get();
        
        return view('userId',compact('user'));
    }

}
