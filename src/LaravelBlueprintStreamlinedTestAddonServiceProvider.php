<?php

namespace Axitbv\LaravelBlueprintStreamlinedTestAddon;

use Illuminate\Support\ServiceProvider;

class LaravelBlueprintStreamlinedTestAddonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-blueprint-streamlined-test-addon');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-blueprint-streamlined-test-addon');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-blueprint-streamlined-test-addon.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-blueprint-streamlined-test-addon'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-blueprint-streamlined-test-addon'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-blueprint-streamlined-test-addon'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-blueprint-streamlined-test-addon');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-blueprint-streamlined-test-addon', function () {
            return new LaravelBlueprintStreamlinedTestAddon;
        });
    }
}
