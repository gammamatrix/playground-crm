<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Crm\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Carbon;
use Playground\Crm\ServiceProvider;
use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Test\Feature\Models\ModelCase as BaseModelCase;

/**
 * \Tests\Feature\Playground\Crm\Models\ModelCase
 */
class ModelCase extends BaseModelCase
{
    use DatabaseTransactions;

    protected bool $load_migrations_crm = true;

    protected bool $load_migrations_laravel = false;

    protected bool $load_migrations_playground = true;

    protected function getPackageProviders($app)
    {
        return [
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        Carbon::setTestNow(Carbon::now());

        if (! empty(env('TEST_DB_MIGRATIONS'))) {
            if ($this->load_migrations_crm) {
                $this->loadMigrationsFrom(dirname(dirname(dirname(__DIR__))).'/database/migrations');
            }
            // if ($this->load_migrations_laravel) {
            //     $this->loadMigrationsFrom(dirname(dirname(dirname(__DIR__))).'/database/migrations-laravel');
            // }
            if ($this->load_migrations_playground) {
                $this->loadMigrationsFrom(dirname(dirname(dirname(__DIR__))).'/database/migrations-playground');
            }
        }
    }

    /**
     * Set up the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('auth.providers.users.model', 'Playground\\Models\\User');
        $app['config']->set('playground-auth.verify', 'user');

        $app['config']->set('playground-crm.load.migrations', true);
    }
}
