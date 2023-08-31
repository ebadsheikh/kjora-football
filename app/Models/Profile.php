<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_profile';
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
        'first_name',
        'sur_name',
        'phone',
        'date_of_birth',
        'gender',
        'country_id',
        'favourite_club_id',
        'profile_image',
        'qualification',
        'institution',
        'experience',
        'skills',
        'date_of_employment',
        'end_of_employment',
        'salary',
        'billing_id',
        'position_id',
        'role',
        'remarks',
        'deadline',
        'incomplete_work',
        'public_holiday_applicability',
        'public_holiday_extras',
        'leave_entitlements',
        'sick_leave_entitlements',
        'is_identity_verified',
        'identity_type',
        'identity_front_image',
        'identity_back_image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'access' => 'array',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
