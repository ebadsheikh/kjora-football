<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Http\Requests\Player\Profile\UpdateEmailRequest;
use App\Http\Requests\Player\Profile\UpdatePasswordRequest;
use App\Http\Requests\Player\Profile\UpdatePhoneRequest;
use App\Models\Country;
use App\Models\PlayerManagement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function email(){
        $player_email = PlayerManagement::where('id', session('player_id'))->first();
        return view('player.more.update-email')
        ->with('player_email', $player_email);
    }

    public function updateEmail(UpdateEmailRequest $request)
    {
        try {
            PlayerManagement::where('id', session('player_id'))->update([
                'email' => $request->email
            ]);
            return redirect()->route('player.more');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function phone(){
        $country = Country::all();
        $phone = PlayerManagement::where('id', session('player_id'))->first();
        return view('player.more.update-phone')
        ->with('phone', $phone)
        ->with('country', $country);
    }

    public function updatePhone(UpdatePhoneRequest $request)
    {
        // return 1;
        try {
            PlayerManagement::where('id', session('player_id'))->update([
                'country_id' => $request->phone_code,
                'phone' => $request->phone
            ]);
            return redirect()->route('player.more');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function playerPassword(){
        return view('player.more.update-password');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        try {
           $is_exists =  PlayerManagement::where('id',session('player_id'))->first();

           if ($is_exists) {

                if (Hash::check($request->current_password, $is_exists->password)) {
                        $is_exists->update([
                            'password' => bcrypt($request->input('new_password'))
                        ]);
                        return  redirect()->route('player.more');
                } else {
                     return back()->withError('Current Password Does not match')->withInput();
                }
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function help(){
        return view('player.more.help');
    }
}
