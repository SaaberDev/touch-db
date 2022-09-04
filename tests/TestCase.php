<?php

namespace SaaberDev\TouchDB\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;
use SaaberDev\TouchDB\TouchDBServiceProvider;

class TestCase extends Orchestra
{
//    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            TouchDBServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'mysql');


        Schema::dropIfExists('users');
        $migration = include __DIR__.'/../database/migrations/2014_10_12_000000_create_users_table.php.stub';
        $migration->up();

    }
}
