<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\PlayerManagement;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location(Request $request)
    {
       $data = PlayerManagement::where('id', session('player_id'))->first();
       $data->current_address = $request->address;
       $data->currrent_latitude = $request->latitude;
       $data->current_longitude = $request->longitude;
       $data->current_city = $request->city;
       $data->current_state = $request->state;
       $data->current_country = $request->country;
       $data->current_zipcode = $request->zipcode;
       if ($data->save()) {
        session([
            'player_id' => $data->id,
            'name' => $data->player_user_name,
            'image' => $data->profile_image,
            'membership_type' => $data->membership_type,
            'current_city' => $data->current_city,
            'current_address' => $data->current_address
        ]);
       }

       return $data;
    }
}
