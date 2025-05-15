<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\type_products;
use App\Models\cart;
use App\Models\bill_detail;
use App\Models\bills;
use App\Models\customer;
use App\Models\products;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $type_products = type_products::all();
        
        view()->composer(["layouts/header", "pages/dathang"], function($view){
            if (Session('cart'))
            {
                $oldcart = Session::get('cart');
                $cart = new cart($oldcart);
                $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            }
        });

        View::share(["type_products" => $type_products]);
    }
}
