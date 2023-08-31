<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function merchantAccount(){
        return view('player.more.merchant-account');
    }

    public function paymentOverview(){
        return view('player.more.payment-overview');
    }
}
