<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpgradeAccountController extends Controller
{
    public function upgradeAccount()
    {
        return view('player.upgrade-account.account');
    }
}
