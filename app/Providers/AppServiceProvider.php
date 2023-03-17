<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

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
        view()->composer('*',function($view) {
            if(Auth::check()){
                $cartContent = \Cart::session(Auth()->user()->id)->getContent();
                $cartQty= \Cart::session(Auth()->user()->id)->getTotalQuantity();
                $view->with('user', Auth::user());
                $view->with('cartContent', $cartContent); 
                $view->with('cartQty', $cartQty); 
            }
        });
        View()->share('global_tel', '886-2-1234-5678');
        View()->share('global_fax', '886-2-1234-4567');
        View()->share('global_address', '台北市XX區XXX路X段XXX號XX樓');
    }
}
