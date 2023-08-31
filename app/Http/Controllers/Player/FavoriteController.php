<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\AdManagement;
use App\Models\CardDetail;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $card_detail = CardDetail::first();
        $ad = AdManagement::all();
        $favorite = favorite::join('player_management', 'favorite.player_id', 'player_management.id')
            ->join('player_position', 'favorite.player_position_id', 'player_position.id')
            ->select('player_management.*', 'favorite.*', 'player_position.name')->paginate(9);
        // return response()->json($favorite);
        return view('player.favourite.favourite')->with('favorite', $favorite)
            ->with('ad', $ad)
            ->with('card_detail', $card_detail);
    }

    public function favorite(Request $request)
    {
        try {

            $is_exist = Favorite::where('user_id', $request->user_id)
                ->where('player_id', $request->player_id)
                ->first();
            if ($is_exist) {
                $is_exist->delete();
            } else {
                $favorite = new Favorite();
                $favorite->user_id = $request->user_id;
                $favorite->player_id = $request->player_id;
                $favorite->player_position_id = $request->player_position_id;
                $favorite->save();
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong'], 200);
        }
    }

    public function unfavorite(Request $request)
    {
        $unfavorite = Favorite::where('user_id', $request->user_id)->where('id', $request->fav_id)->delete();
        if ($unfavorite) {
            return 1;
        } else {
            return 0;
        }
    }
}
