<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Crm\Models\Client;

use Playground\Crm\Models\Client;
use Playground\Crm\Models\Contact;
use Playground\Crm\Models\Location;
use Playground\Crm\Models\Organization;
use Playground\Crm\Models\People;
use Playground\Models\User;
use Tests\Feature\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Crm\Models\Client\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Client::class;

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
            'modelClass' => Client::class,
        ],
        'contact' => [
            'key' => 'contact_id',
            'rule' => 'create',
            'modelClass' => Contact::class,
        ],
        'location' => [
            'key' => 'location_id',
            'rule' => 'create',
            'modelClass' => Location::class,
        ],
        'organization' => [
            'key' => 'organization_id',
            'rule' => 'create',
            'modelClass' => Organization::class,
        ],
        'people' => [
            'key' => 'people_id',
            'rule' => 'create',
            'modelClass' => People::class,
        ],
    ];
}
