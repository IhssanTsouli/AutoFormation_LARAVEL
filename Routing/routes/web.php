<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use Illuminate\Http\Request;
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

 //Basic Routing

Route::get('/hello', function () {
    return "Hello world";
});

Route::get('/about', function () {
    return view('about');
});

// Routing Requests
/*Route::get('/store', function () {
    $filter =request('style');
    if(isset($filter)){
        return 'this page is viewing<span style="color: red">'.$filter.'</span>';
    }
    return 'this page is viewing<span style="color: red">All Product</span>';
});

*/
// Routing Categories
Route::get('/store/{category}/{item}', function ($category,$item) {
    return '<H1>'.$categor.'</H1>';
});
//Route avec Controller
Route::get('/ihssan',[testController::class,'f1']);

// Methode match 


Route::match(['get','post'],'/test',function(){
    return('option');
  });

//methode any

Route::any(('/all'),function(){
    return('function for all');
});

//Route request!!

Route::any(('/input'),function(){
    return view('input');
   });

Route::get('/user',function(request $request){
   return  $request->input("name");
   
});
 //Protection CSRF
 Route::get('/profile',function(){
    return view('csrf');
});

Route::any('/csrf',function(request $request){
    return  $request->input("name");
    
 });










