<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function index()
    {
        return view('player.more.more');
    }
}
