<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VideoCommentReply extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_comment_replies';

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
    protected $fillable = ['replier_id ', 'comment_id', 'reply'];


    /**
     * Get the user associated with the VideoCommentReply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function replier(): BelongsTo
    {
        return $this->belongsTo(PlayerManagement::class);
    }

    public function likes(){
        return $this->hasMany(LikeCommentReply::class, 'reply_id', 'id');
     }
    // public function isAuthUserLikedPost(){
    // return $this->likes()->where('user_id',  $this->id)->exists();
    // }

}
