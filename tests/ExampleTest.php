<?php

namespace Axitbv\LaravelBlueprintStreamlinedTestAddon\Tests;

use Orchestra\Testbench\TestCase;
use Axitbv\LaravelBlueprintStreamlinedTestAddon\LaravelBlueprintStreamlinedTestAddonServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelBlueprintStreamlinedTestAddonServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
