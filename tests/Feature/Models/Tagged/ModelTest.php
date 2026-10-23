<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Crm\Models\Tagged;

use Playground\Crm\Models\Client;
use Playground\Crm\Models\Contact;
use Playground\Crm\Models\Location;
use Playground\Crm\Models\Organization;
use Playground\Crm\Models\Tag;
use Playground\Crm\Models\Tagged;
use Playground\Models\User;
use Tests\Feature\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Crm\Models\Tagged\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tagged::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'tag' => [
            'key' => 'tag_id',
            'rule' => 'create',
            'modelClass' => Tag::class,
        ],
        'client' => [
            'key' => 'client_id',
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
    ];
}
