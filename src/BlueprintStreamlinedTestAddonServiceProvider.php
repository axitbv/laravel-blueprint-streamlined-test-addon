<?php

namespace Axitbv\BlueprintStreamlinedTestAddon;

use Blueprint\Blueprint;
use Illuminate\Support\ServiceProvider;

class BlueprintStreamlinedTestAddonServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php',
            'blueprint'
        );

        $this->app->extend(Blueprint::class, function (Blueprint $blueprint, $app) {
            $blueprint->swapGenerator(
                \Blueprint\Generators\TestGenerator::class,
                new StreamlinedTestGenerator($app['files'])
            );

            return $blueprint;
        });
    }
}
