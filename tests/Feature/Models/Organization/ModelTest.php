<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Crm\Models\Organization;

use Playground\Crm\Models\Organization;
use Playground\Models\User;
use Tests\Feature\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Crm\Models\Organization\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Organization::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => Organization::class,
        ],
    ];
}
