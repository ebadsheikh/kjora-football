<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\AdManagement;
use App\Models\CardDetail;
use App\Models\Favorite;
use App\Models\PlayerManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $card_detail = CardDetail::first();
        $ad = AdManagement::paginate(5);
        $player_id = Session::get('player_id');
        $player = PlayerManagement::with('user')
        ->with('position')
        ->select('player_management.*', DB::raw('(case when favorite.player_id is null then 0 else 1 end) as is_favorite'))
        ->leftJoin('favorite', function($query) use($player_id) {
            $query->on('favorite.player_id','=','player_management.id')
            ->where('favorite.user_id', '=', $player_id);
        })
        ->get();
        $goal_keeper = PlayerManagement::with('user')
        ->with('position')
        ->where('position_id', '=', 1)
        ->select('player_management.*', DB::raw('(case when favorite.player_id is null then 0 else 1 end) as is_favorite'))
        ->leftJoin('favorite', function($query) use($player_id) {
            $query->on('favorite.player_id','=','player_management.id')
            ->where('favorite.user_id', '=', $player_id);
        })
        ->get();
        $defender = PlayerManagement::with('user')
        ->with('position')
        ->where('position_id', '=', 2)
        ->select('player_management.*', DB::raw('(case when favorite.player_id is null then 0 else 1 end) as is_favorite'))
        ->leftJoin('favorite', function($query) use($player_id) {
            $query->on('favorite.player_id','=','player_management.id')
            ->where('favorite.user_id', '=', $player_id);
        })
        ->get();
        $mid_fielder = PlayerManagement::with('user')
        ->with('position')
        ->where('position_id', '=', 3)
        ->select('player_management.*', DB::raw('(case when favorite.player_id is null then 0 else 1 end) as is_favorite'))
        ->leftJoin('favorite', function($query) use($player_id) {
            $query->on('favorite.player_id','=','player_management.id')
            ->where('favorite.user_id', '=', $player_id);
        })
        ->get();
        $forward = PlayerManagement::with('user')
        ->with('position')
        ->where('position_id', '=', 4)
        ->select('player_management.*', DB::raw('(case when favorite.player_id is null then 0 else 1 end) as is_favorite'))
        ->leftJoin('favorite', function($query) use($player_id) {
            $query->on('favorite.player_id','=','player_management.id')
            ->where('favorite.user_id', '=', $player_id);
        })
        ->get();
        return view('player.dashboard.index')
        ->with('player', $player)
        ->with('goal_keeper', $goal_keeper)
        ->with('defender', $defender)
        ->with('mid_fielder', $mid_fielder)
        ->with('forward', $forward)
        ->with('ad', $ad)
        ->with('card_detail', $card_detail);
    }

    public function commonAd()
    {
        return view('player.dashboard.common_ad');
    }


}
