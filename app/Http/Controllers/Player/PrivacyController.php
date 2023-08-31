<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Http\Services\Media;
use App\Models\Country;
use App\Models\PlayerManagement;
use App\Models\Policies;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function terms()
    {
        $term = Policies::where('type','term_and_condition')->first();
        return view('player.account.terms-and-services')
        ->with('term', $term);
    }

    public function PrivacyPolicy(){
        $policy = Policies::where('type','privacy_policy')->first();
        return view('player.account.privacy-policy')
        ->with('policy', $policy);
    }

    public function Cookies(){
        $cookies = Policies::where('type','cookie_use')->first();
        return view('player.account.cookie-use')
        ->with('cookies', $cookies);
    }

    public function verifyIdentity(){
        $country = Country::all();
        return view('player.more.verify-identity')
        ->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function storePlayerVerification(Request $request)
    {
        // $media = new Media();
        // $player_verification = PlayerManagement::where('id', session('player_id'))->first();
        // $player_verification->identity_type = $request->identity_type;
        // $player_verification->issued_country = $request->issued_country;
        // $player_verification->identity_front_image = $media->uploadFront($request);
        // $player_verification->identity_back_image = $media->upload($request);
        // $player_verification->save();
        // return redirect()->route('player.more');
    }

    public function moreTerms(){
        $term = Policies::where('type','term_and_condition')->first();
        return view('player.after_login_account.terms-and-service')
        ->with('term', $term);
    }

    public function morePrivacyPolicy(){
        $policy = Policies::where('type','privacy_policy')->first();
        return view('player.after_login_account.privacy-policy')
        ->with('policy', $policy);
    }

    public function moreCookies(){
        $cookies = Policies::where('type','cookie_use')->first();
        return view('player.after_login_account.cookie-use')
        ->with('cookies', $cookies);
    }

}
