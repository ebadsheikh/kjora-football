<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Invite extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invitation';

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
        'invite_to',
        'invite_from',
        'invitation_fee'
    ];


    public function inviteTo(): HasMany
    {
        return $this->hasMany(PlayerManagement::class, 'id', 'invite_to');
    }

    public function inviteFrom(): HasMany
    {
        return $this->hasMany(PlayerManagement::class, 'id', 'invite_from');
    }

    /**
     * Get all of the inviteTo for the Invite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function player(): HasManyThrough
    {
        return $this->hasManyThrough(User::class,PlayerManagement::class);
    }

    /**
     * Get all of the inviteTo for the Invite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function position(): HasManyThrough
    {
        return $this->hasManyThrough(PlayerPosition::class,PlayerManagement::class);
    }

}
