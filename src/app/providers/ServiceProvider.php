<?php

namespace Lydia\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider; // 把舊的名字加上 Base 以區分名稱

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'HelloWorld');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
