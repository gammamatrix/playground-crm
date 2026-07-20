<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Crm;

use Playground\ServiceProvider;

/**
 * \Tests\Unit\Playground\Crm\PackageProviders
 */
trait PackageProviders
{
    protected string $package_providers_dir = __DIR__;

    protected function getPackageProviders($app)
    {
        return [
            \Playground\Test\ServiceProvider::class,
            ServiceProvider::class,
            \Playground\Crm\ServiceProvider::class,
        ];
    }
}
