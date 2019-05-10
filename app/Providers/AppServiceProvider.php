<?php

namespace App\Providers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\URL;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', function($view){
            $cate = Category::all();
            // share du lieu cho nhieu tat ca cac view ma extends view master
            $view->with('cate',$cate);
        });
    }
}
