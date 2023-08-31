<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\LikeComment;
use App\Models\LikeCommentReply;
use App\Models\LikePhotoReply;
use App\Models\LikeVideoComment;
use Illuminate\Http\Request;

class LikeCommentsController extends Controller
{
    public function storeLikes(Request $request)
    {
        try {

            $is_exist = LikeComment::where('user_id', $request->user_id)
                ->where('comment_id', $request->comment_id)
                ->first();
            if ($is_exist) {
                $is_exist->delete();
                $count = LikeComment::where('profile_id', $is_exist->profile_id)->count();
                $comment_like = LikeComment::where('comment_id', $is_exist->comment_id)->count();
                return response()->json(['count' => $count, 'comment_like' => $comment_like]);
            } else {
                $like = new LikeComment();
                $like->user_id = $request->user_id;
                $like->comment_id = $request->comment_id;
                $like->profile_id = $request->photo_id;
                $like->save();
                $count = LikeComment::where('profile_id', $like->profile_id)->count();
                $comment_like = LikeComment::where('comment_id', $like->comment_id)->count();
                return response()->json(['count' => $count, 'comment_like' => $comment_like]);
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong'], 200);
        }
    }

    public function storeVideoLikes(Request $request)
    {
        try {
            $is_exist = LikeVideoComment::where('user_id', $request->user_id)
                ->where('comment_id', $request->comment_id)
                ->first();
            if ($is_exist) {
                $is_exist->delete();
                $count = LikeVideoComment::where('profile_id', $is_exist->profile_id)->count();
                $comment_like = LikeVideoComment::where('comment_id', $is_exist->comment_id)->count();
                return response()->json(['count' => $count, 'comment_like' => $comment_like]);
            } else {
                $like = new LikeVideoComment();
                $like->user_id = $request->user_id;
                $like->comment_id = $request->comment_id;
                $like->profile_id = $request->video_id;
                $like->save();
                $count = LikeVideoComment::where('profile_id', $like->profile_id)->count();
                $comment_like = LikeVideoComment::where('comment_id', $like->comment_id)->count();
                return response()->json(['count' => $count, 'comment_like' => $comment_like]);
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong'], 200);
        }
    }

    public function storeReplyLikes(Request $request)
    {
        try {
            $is_exist = LikeCommentReply::where('user_id', $request->user_id)
                ->where('reply_id', $request->reply_id)
                ->first();
            if ($is_exist) {
                $is_exist->delete();
                $reply_like = LikeCommentReply::where('reply_id', $is_exist->reply_id)->count();
                return response()->json(['unlike' => $is_exist, 'reply_like' => $reply_like]);
            } else {
                $like = new LikeCommentReply();
                $like->user_id = $request->user_id;
                $like->reply_id = $request->reply_id;
                $like->save();
                $reply_like = LikeCommentReply::where('reply_id', $like->reply_id)->count();
                return response()->json(['like' => $like, 'reply_like' => $reply_like]);
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong'], 200);
        }
    }

    public function storePhotoLikes(Request $request)
    {
        try {
            $is_exist = LikePhotoReply::where('user_id', $request->user_id)
                ->where('reply_id', $request->reply_id)
                ->first();
            if ($is_exist) {
                $is_exist->delete();
                $reply_like = LikePhotoReply::where('reply_id', $is_exist->reply_id)->count();
                return response()->json(['unlike' => $is_exist, 'reply_like' => $reply_like]);
            } else {
                $like = new LikePhotoReply();
                $like->user_id = $request->user_id;
                $like->reply_id = $request->reply_id;
                $like->save();
                $reply_like = LikePhotoReply::where('reply_id', $like->reply_id)->count();
                return response()->json(['like' => $like, 'reply_like' => $reply_like]);
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong'], 200);
        }
    }
}
