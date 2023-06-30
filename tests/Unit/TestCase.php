<?php

namespace Slvler\BalldontlieLaravel\Tests\Unit;

use Slvler\BalldontlieLaravel\BalldontlieServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BalldontlieServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
