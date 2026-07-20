<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Crm\Models\People;

use Playground\Crm\Models\People;
use Tests\Unit\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Crm\Models\People\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = People::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
