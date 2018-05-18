<?php

namespace prnc\crud;

use Illuminate\Support\ServiceProvider; 

class CrudeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/view','crud');
        $this->loadMigrationsFrom(__DIR__.'/database/migratation/2018_05_16_141135_create_cruds_table.php');
        $this->publishes([__DIR__.'/view/'=> resource_path('views/crud')]);
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('prnc\crud\CrudController');
    }
}
