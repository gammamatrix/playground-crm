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

    protected array $hasMany = [
        'clients',
        'contacts',
        'locations',
        'organizations',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'client',
        'contact',
        'location',
        'organization',
    ];
}
