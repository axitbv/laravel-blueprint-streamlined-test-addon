<?php

namespace Axitbv\BlueprintStreamlinedTestAddon\Tests;

use Orchestra\Testbench\TestCase;
use Axitbv\BlueprintStreamlinedTestAddon\BlueprintStreamlinedTestAddonServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BlueprintStreamlinedTestAddonServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
