<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\Stadium;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function invitation()
    {
        return view('player.invitation.invitation');
    }

    public function sendInvitation()
    {
        $stadium = Stadium::all();
        return view('player.invitation.send_invitation')
        ->with('stadium', $stadium);
    }
}
