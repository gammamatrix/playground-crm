<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Crm\Console\Commands\About;

use Illuminate\Foundation\Application;
use Illuminate\Testing\PendingCommand;
use PHPUnit\Framework\Attributes\CoversClass;
use Playground\Crm\ServiceProvider;
use Symfony\Component\Console\Command\Command;
use Tests\Feature\Playground\Crm\TestCase;

/**
 * \Tests\Feature\Playground\Crm\Console\Commands\About\CommandTest
 */
#[CoversClass(ServiceProvider::class)]
class CommandTest extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  Application  $app
     * @return void
     */
    protected function defineEnvironment($app)
    {
        parent::defineEnvironment($app);

        $app['config']->set('playground-crm.load.migrations', true);
    }

    public function test_command_about_displays_package_information_and_succeed(): void
    {
        /**
         * @var PendingCommand $result
         */
        $result = $this->artisan('about');
        $result->assertExitCode(Command::SUCCESS);
        $result->expectsOutputToContain('Playground: CRM');
    }
}
