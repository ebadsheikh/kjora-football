<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\PhotoCommentReply;
use Exception;
use Illuminate\Http\Request;

class PhotoCommentReplyController extends Controller
{
    public function storePhotoReply(Request $request)
    {
        try {
            $reply = new PhotoCommentReply();
            $reply->replier_id = session('player_id');
            $reply->comment_id = $request->comment_id;
            $reply->reply = $request->reply;
            $reply->save();
            return back();
        }catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }
}
