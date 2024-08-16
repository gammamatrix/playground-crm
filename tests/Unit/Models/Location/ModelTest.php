<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Crm\Models\Location;

use Tests\Unit\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Crm\Models\Location\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Crm\Models\Location::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<int, string> Test has one relationships.
     */
    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
