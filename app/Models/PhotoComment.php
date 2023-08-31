<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PhotoComment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photo_comments';
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
    protected $fillable = ['player_id', 'photo_id', 'comment'];

    /**
     * Get all of the comments for the VideoComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reply(): HasMany
    {
        return $this->hasMany(PhotoCommentReply::class, 'comment_id', 'id');
    }

    /**
     * Get the user that owns the VideoComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function replyLike(): BelongsTo
    {
        return $this->belongsTo(LikePhotoReply::class);
    }

    public function commentLike()
    {
        return $this->hasMany(LikeComment::class, 'comment_id', 'id');
    }
}
