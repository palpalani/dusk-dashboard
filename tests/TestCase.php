<?php

namespace BeyondCode\DuskDashboard\Tests;

use BeyondCode\DuskDashboard\DuskDashboardServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            DuskDashboardServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_dusk-dashboard_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
