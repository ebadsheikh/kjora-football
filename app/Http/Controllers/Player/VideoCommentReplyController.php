<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\VideoCommentReply;
use Exception;
use Illuminate\Http\Request;

class VideoCommentReplyController extends Controller
{
    public function storeReply(Request $request)
    {
        try {
            $reply = new VideoCommentReply();
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
