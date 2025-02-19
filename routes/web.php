<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

//Cart
Route::get('/cart',[CartController::class,'showCart'])->name('shop.cart');

//Product Of Category
Route::get('/shop/{id?}',[ProductController::class,'productOfCategory']);

//Product Details
Route::get('/{id}',[ProductController::class,'detail'])->name('shop.detail');



//Add To Cart
Route::get('/addToCart/{id}',[CartController::class,'addToCart']);

//Clear Cart
Route::get('/cart/clearCart',[CartController::class,'clearCart']);

Route::get('/cart/remove/{id}', [CartController::class, 'removeItemOnCart']);
