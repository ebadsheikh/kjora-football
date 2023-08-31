<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VideoComment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_comments';
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
    protected $fillable = ['player_id', 'video_id', 'comment'];


    /**
     * Get all of the comments for the VideoComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reply(): HasMany
    {
        return $this->hasMany(VideoCommentReply::class, 'comment_id', 'id');
    }


    /**
     * Get the user that owns the VideoComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function replyLike(): BelongsTo
    {
        return $this->belongsTo(LikeCommentReply::class);
    }

    public function commentLike()
    {
        return $this->hasMany(LikeVideoComment::class, 'comment_id', 'id');
    }

}
