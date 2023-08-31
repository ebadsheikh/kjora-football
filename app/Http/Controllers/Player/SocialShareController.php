<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialShareController extends Controller
{

    public function index()
    {
        $shareButtons = \Share::page(
            'https://www.itsolutionstuff.com',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        // ->telegram()
        ->whatsapp();
        // ->reddit();

        return view('socialshare', compact('shareButtons'));
    }
}
