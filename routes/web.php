<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::view('register','auth.regsistration')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);
Route::view('home','home')->middleware('auth');


Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);


//product

Route::get('product',[ProductController::class,'index']);
Route::post('add_to_card',[ProductController::class,'addtocard']);

