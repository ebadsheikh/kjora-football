<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\LikeVideoProfile;
use Illuminate\Http\Request;

class LikeVideoProfileController extends Controller
{
    public function storeProfileLikes(Request $request)
    {
        try {

            $is_exist = LikeVideoProfile::where('user_id', $request->user_id)
                ->where('profile_id', $request->profile_id)
                ->first();
            if ($is_exist) {
                if ($is_exist->delete()) {
                    session()->forget('profile_like');
                }
                $count = LikeVideoProfile::where('profile_id', $is_exist->profile_id)->count();
                return response()->json(['count' => $count]);
            } else {
                $like = new LikeVideoProfile();
                $like->user_id = $request->user_id;
                $like->profile_id = $request->profile_id;
                if($like->save()){
                    session([
                        'profile_like' => $like->profile_id
                    ]);
                }

                $count = LikeVideoProfile::where('profile_id', $like->profile_id)->count();
                return response()->json(['count' => $count]);
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong'], 200);
        }
    }
}
