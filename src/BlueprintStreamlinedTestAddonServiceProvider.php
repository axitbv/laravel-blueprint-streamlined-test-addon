<?php

namespace Axitbv\LaravelBlueprintStreamlinedTestAddon;

use Illuminate\Support\ServiceProvider;

class BlueprintStreamlinedTestAddonServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->extend(Blueprint::class, function (Blueprint $blueprint, $app) {
            $blueprint->swapGenerator(
                \Blueprint\Generators\TestGenerator::class,
                new StreamlinedTestGenerator($app['files'])
            );

            return $blueprint;
        });
    }}
