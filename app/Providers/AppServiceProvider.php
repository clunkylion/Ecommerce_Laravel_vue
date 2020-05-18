<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ShoppingCart;

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
        //En los Providers se crean variables para que estén en todas las vistas..
        //identificar sesion del carrito
        
        View::composer('*', function($view){
            $sessionName = 'shopping_cart_id';
            $shopping_cart_id = \Session::get($sessionName);

            $shopping_cart = ShoppingCart::findOrCreateById($shopping_cart_id);
            \Session::put($sessionName, $shopping_cart->id);
            $view->with('productsCount', $shopping_cart->productsCount()); 
        });
    }
}
