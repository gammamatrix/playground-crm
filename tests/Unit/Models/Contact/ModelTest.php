<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Crm\Models\Contact;

use Playground\Crm\Models\Contact;
use Tests\Unit\Playground\Crm\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Crm\Models\Contact\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Contact::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'client',
        'location',
        'organization',
        'people',
    ];
}
