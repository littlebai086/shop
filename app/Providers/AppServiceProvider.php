<?php

namespace App\Providers;
use App\Models\Element;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //語系轉成中文
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('zh_TW');
           });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $prods = Product::get();
        view()->composer(['shop.*'],function($view) use ($prods){
            $view->with('prods',$prods);
        });

        $main_titles = Element::where('page','index')->where('position','main_title')->orderBy('sort','asc')->get();
        view()->composer(['*'],function($view) use ($main_titles){
            $view->with('main_titles',$main_titles);
        });
    }
}
