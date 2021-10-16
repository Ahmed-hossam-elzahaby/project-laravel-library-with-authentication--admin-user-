<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\CatController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;
use App\Models\cat;
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
    // return view('welcome');
    return redirect(url('cats'));
});

                           // about cats
Route::get('/cats',[CatController::class,'getcat']);
Route::get('/cats/{id}',[CatController::class,'show']);
Route::get('form/cat',[CatController::class,'form'])->middleware(['auth','isadmin']);
Route::post('creat/cat',[CatController::class,'creat'])->middleware(['auth','isadmin']);
Route::get('edite/cat/{id}',[CatController::class,'edite'])->middleware(['auth','isadmin']);
Route::post('update/cat/{id}',[CatController::class,'update'])->middleware(['auth','isadmin']);
Route::delete('remove/cat/{id}',[CatController::class,'remove'])->middleware(['auth','isadmin']);

Route::get('/test',function(){

// $cats= cat::where('id','>',1)->get();
// dd($cats);

// $cats=cat::where('id','>',1)->where('name','=','history')->get();
// dd($cats);

// $cats=cat::orderby('id','desc')->take(1)->get();
// dd($cats);

});

Route::get('/last/{num}',[CatController::class,'laste']);
Route::post('search/cat',[CatController::class,'search']);
                                // about book 
Route::get("/books",[bookcontroller::class,"getbooks"]);                                
Route::get("form/book",[bookcontroller::class,"form"])->middleware(['auth','isadmin']);
Route::post("creat/book",[bookcontroller::class,"creat"])->middleware(['auth','isadmin']);
Route::post('search/book',[bookController::class,'search']);

                   // aoout Auth 
Route::get("register",[Authcontroller::class,"registerform"])->middleware('guest');
Route::post("register",[Authcontroller::class,"register"])->middleware('guest');
Route::get("login",[Authcontroller::class,"loginform"])->middleware('guest');
Route::post("login",[Authcontroller::class,"login"])->middleware('guest');
Route::get("logout",[Authcontroller::class,"logout"]);

Route::get("users",[UserControler::class,"user"])->middleware(['auth','isadmin']);

