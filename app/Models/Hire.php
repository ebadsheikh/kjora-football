<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Hire extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hire';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hire_to',
        'hire_from',
        'hire_fee',
        'status'
    ];

    public function hireTo(): HasMany
    {
        return $this->hasMany(PlayerManagement::class, 'id', 'hire_to');
    }

    public function hireFrom(): HasMany
    {
        return $this->hasMany(PlayerManagement::class, 'id', 'hire_from');
    }

    /**
     * Get all of the inviteTo for the Invite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function playerHire(): HasManyThrough
    {
        return $this->hasManyThrough(User::class,PlayerManagement::class);
    }

    /**
     * Get all of the inviteTo for the Invite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function positionHire(): HasManyThrough
    {
        return $this->hasManyThrough(PlayerPosition::class,PlayerManagement::class);
    }

}
