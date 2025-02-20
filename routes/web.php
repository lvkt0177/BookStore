<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;


//Admin
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/wishlist',[WishlistController::class,'showWishlist'])->name('shop.wishlist');


//Product Of Category
Route::get('/shop/{id?}',[ProductController::class,'productOfCategory']);


//Add To Wishlist
Route::get('/addToWishlist/{id?}',[WishlistController::class,'addToWishlist']);

//Clear Wishlist
Route::get('/wishlist/clear',[WishlistController::class,'clearWishlist']);


//Remove Item (Wishlist)
Route::get('/wishlist/remove/{id?}',[WishlistController::class,'removeItem']);

Route::get('/AddToCartFromWishlist',[CartController::class,'AddAllToCartFromWishlist']);

//Add To Cartcart
Route::get('/addToCart/{id?}',[CartController::class,'addToCart']);

//Clear Cart
Route::get('/cart/clearCart',[CartController::class,'clearCart']);

Route::get('/cart/remove/{id?}', [CartController::class, 'removeItemOnCart']);




//Product Details
Route::get('/{id}',[ProductController::class,'detail'])->name('shop.detail');


//Admin

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard',[AdminAuthController::class,'showDashboard'])->name('admin.dashboard');
});





Route::get('/admin/login',[AdminAuthController::class,'showLoginAdmin']);