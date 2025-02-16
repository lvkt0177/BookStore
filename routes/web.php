<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

//Home
Route::get('/',[HomeController::class,'index'])->name('shop.home');


//Product Details
Route::get('/{id}',[ProductController::class,'detail'])->name('shop.detail');


//Product Of Category
Route::get('/shop/{id}',[ProductController::class,'productOfCategory']);