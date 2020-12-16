<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::post("/login","\App\Http\Controllers\UserController@login")->name("login");
Route::get("/register","\App\Http\Controllers\UserController@register")->name("register");
Route::post("/register","\App\Http\Controllers\UserController@add_user")->name("add_user");
Route::get("/logout","\App\Http\Controllers\UserController@logout")->name("logout");




Route::group(["middleware"=>["web"]],function(){

    Route::get("/","\App\Http\Controllers\ProductController@index")->name("product");

});

Route::get("/detail/{id}","\App\Http\Controllers\ProductController@detail")->name("detail");

Route::get("search","\App\Http\Controllers\ProductController@search")->name("search");

Route::post("card","\App\Http\Controllers\ProductController@card")->name("card");
Route::get("card","\App\Http\Controllers\ProductController@basket")->name("basket");
Route::get("remove/{id}","\App\Http\Controllers\ProductController@remove")->name("remove");

Route::get("payment","\App\Http\Controllers\ProductController@payment")->name("payment");
