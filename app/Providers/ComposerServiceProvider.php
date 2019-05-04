<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        // view()->composer('layout.nav',function($view){
        //     $view->with('notifications',5);
        // });
        view()->composer('layout.nav','App\Http\ViewComposers\NavComposer');

    }
}
