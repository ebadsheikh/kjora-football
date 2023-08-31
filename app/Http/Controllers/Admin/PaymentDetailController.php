<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentDetail\StoreRequest;
use App\Models\PaymentDetail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PaymentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.account.payment_detail');
    }

    public function store(StoreRequest $request)
    {
        $payment = new PaymentDetail();
        $payment->user_id = session('temp_user_id');
        $payment->name = $request->name;
        $payment->address = $request->address;
        $payment->account_number = $request->account_number;
        $payment->payment_method = $request->payment_method;
        $payment->sort_code = $request->sort_code;
        $payment->swift_code = $request->swift_code;
        $payment->payment_date = $request->payment_date;
        if ($request->confirm_payment_detail == 'on') {
            $payment->confirm_payment_detail = 1;
        } else {
            $payment->confirm_payment_detail = 0;
        }
        if ($payment->save()) {

            $email = Session::get('temp_email');
            $password = Session::get('temp_password');

            $data = array(
                'email' => $email,
                'password' => $password,
            );

            Mail::send('admin.mail.code', $data , function($message) use ($request , $email){
                $message->to($email, 'Kjora')->subject('Kjora');
                $message->from('mwaqasiu@gmail.com','Kjora');
            });
        }


        return redirect()->route('admin.dashboard');
    }
}
