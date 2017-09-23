<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Portfolio;
use App\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

View::composer('frontEnd.home.homeContent',function($view){
        $portfolios=Portfolio::all();
        $view->with('portfolios',$portfolios);
        });
View::composer('frontEnd.home.homeContent',function($view){
        $pages=Page::all();
        $view->with('pages',$pages);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
