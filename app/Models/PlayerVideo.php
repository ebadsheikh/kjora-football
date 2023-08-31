<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlayerVideo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'player_video';
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
    protected $fillable = ['player_id', 'caption', 'video'];

    /**
     * Get all of the comments for the PlayerVideo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function playerInfo(): HasMany
    // {
    //     return $this->hasMany(PlayerVideo::class, 'player_id', 'id');
    // }

}
