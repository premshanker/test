<?php

namespace App\Providers;

use Auth;

use View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('message','Hi Amit, How are you! ');
        View::composer(['new','home'], function ($view) {
            $view->with('auth',Auth::user());
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
