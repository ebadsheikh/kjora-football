<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PlayerManagement extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'player_management';
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
        'user_id',
        'position_id',
        'membership_type',
        'first_name',
        'sur_name',
        'email',
        'password',
        'country_id',
        'club_id',
        'date_of_birth',
        'phone_code',
        'phone',
        'gender',
        'status',
        'is_identity_verified',
        'issued_country',
        'identity_type',
        'identity_front_image',
        'identity_back_image',
        'identity_selfie',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the user associated with the PlayerManagement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function club(): HasOne
    {
        return $this->hasOne(Club::class, 'id', 'club_id');
    }

    /**
     * Get the user associated with the PlayerManagement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function position(): HasOne
    {
        return $this->hasOne(PlayerPosition::class, 'id', 'position_id');
    }

    /**
     * Get the user associated with the VideoCommentReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function replier(): HasOne
    {
        return $this->hasOne(VideoCommentReply::class, 'replier_id', 'id');
    }

    /**
     * Get the user associated with the VideoCommentReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function replierPhoto(): HasOne
    {
        return $this->hasOne(PhotoCommentReply::class, 'replier_id', 'id');
    }
}
