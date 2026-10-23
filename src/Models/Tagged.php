<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Crm\Models;

use Database\Factories\Playground\Crm\Models\TaggedFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Playground\Models\User;
use Playground\Models\UuidModel;

/**
 * \Playground\Crm\Models\Tagged
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?string $tag_id
 * @property ?string $client_id
 * @property ?string $contact_id
 * @property ?string $location_id
 * @property ?string $organization_id
 * @property ?Carbon $created_at
 */
class Tagged extends UuidModel
{
    const UPDATED_AT = null;

    /** @use HasFactory<TaggedFactory> */
    use HasFactory;

    protected $table = 'crm_tagged';

    protected $attributes = [
        'created_by_id' => null,
        'tag_id' => null,
        'client_id' => null,
        'contact_id' => null,
        'location_id' => null,
        'organization_id' => null,
        'created_at' => null,
    ];

    protected $fillable = [
        'tag_id',
        'client_id',
        'contact_id',
        'location_id',
        'organization_id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    /**
     * The creator.
     *
     * @return HasOne<User, $this>
     */
    public function creator(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by_id'
        );
    }

    /**
     * The tag.
     *
     * @return HasOne<Tag, $this>
     */
    public function tag(): HasOne
    {
        return $this->hasOne(
            Tag::class,
            'id',
            'tag_id'
        );
    }

    /**
     * The tagged client.
     *
     * @return HasOne<Client, $this>
     */
    public function client(): HasOne
    {
        return $this->hasOne(
            Client::class,
            'id',
            'client_id'
        );
    }

    /**
     * The tagged contact.
     *
     * @return HasOne<Contact, $this>
     */
    public function contact(): HasOne
    {
        return $this->hasOne(
            Contact::class,
            'id',
            'contact_id'
        );
    }

    /**
     * The tagged location.
     *
     * @return HasOne<Location, $this>
     */
    public function location(): HasOne
    {
        return $this->hasOne(
            Location::class,
            'id',
            'location_id'
        );
    }

    /**
     * The tagged organization.
     *
     * @return HasOne<Organization, $this>
     */
    public function organization(): HasOne
    {
        return $this->hasOne(
            Organization::class,
            'id',
            'organization_id'
        );
    }
}
