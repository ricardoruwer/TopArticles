<?php

namespace Ruwer\TopArticles;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Ruwer\TopArticles\TopArticlesController;

class TopArticlesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Publish config file
        $this->publishes([
            __DIR__.'/config' => base_path('config'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Controller
        $this->app->make('Ruwer\TopArticles\TopArticlesController');

        //Facade
        App::bind('toparticles', function()
        {
            return new TopArticlesController;
        });
    }
}
