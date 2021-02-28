<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('layouts.master', function($view){
        //     $view->with('count', 3);
        // });

        view()->composer('layouts.master', \App\Http\View\Composers\TestComposer::class);
    }
}
