<?php
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;



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

// Route::get('/test',[PromotionsController::class,'hasOne']);
route::get('/aa',[PromoController::class,'hasOne']);

Route::get('/bb',[PromoController::class,'hasMany']);
 // many to many
 Route::get('/cc',[PromoController::class,'ManyToMany']);


