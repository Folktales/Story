<?php

namespace App\Providers;

use View;
use Carbon\Carbon;
use Auth;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void 
     */
    public function boot()
    {
         Schema::defaultStringLength(191);

        $age = Carbon::createFromDate(1993, 7, 6)->age;
        View::share('age',$age);
        View::share('name', 'John');
        View::share('auth', Auth::user());

        View::composer('*', function($view){
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
