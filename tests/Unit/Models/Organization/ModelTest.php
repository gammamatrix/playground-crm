<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Crm\Models\Organization;

use Tests\Unit\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Crm\Models\Organization\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Crm\Models\Organization::class;

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
