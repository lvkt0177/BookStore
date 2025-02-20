<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//Add this line
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function ($view) {

            //Wishlist
            $wishlist = session()->get('wishlist',[]);

            

            //CART============
            $cart = session()->get('cart',[]);
            $totalQuantity = array_sum(array_column($cart, 'quantity'));
            // $totalPrice = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

            $totalPrice = array_reduce($cart,function($carry,$item){
                return $carry + ($item['price'] * $item['quantity']);
            },0);


            $view->with(compact('totalQuantity','cart','totalPrice','wishlist'));
        });
    }
}
