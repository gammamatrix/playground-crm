<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Crm\Models\Client;

use Playground\Crm\Models\Client;
use Tests\Unit\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Crm\Models\Client\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Client::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
