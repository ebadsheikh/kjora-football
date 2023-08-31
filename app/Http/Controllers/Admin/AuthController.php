<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    /**
     * login form of admin
     * @return View
     */
    public function login(): View
    {
        return view('admin.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        try {
            session([
                'access' => array()
            ]);
            $user = User::where("email", $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    if($user->role_type == 'admin'){
                        $profile = Profile::where('user_id', $user->id)->first();
                        session([
                            'access' => $profile->access
                        ]);
                    }
                    session([
                        'user_id' => $user->id,
                        'role_type' => $user->role_type,
                        'name' => $user->user_name
                    ]);
                    return redirect()->route('admin.dashboard');
                } else {
                    return back()->withError("email or password incorrect")->withInput();
                }
            } else {
                return back()->withError("email or password incorrect")->withInput();
            }
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot_password');
    }

    public function checkEmail(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if ($user) {
            $code = Str::random(4);
            $user->email_verification_code = $code;
            $user->save();

            $data = array(
                'code' => $user->email_verification_code,
                'user_name' => $user->player_user_name
            );

            Mail::send('admin.mail.email_verification_code', $data, function ($message) use ($request) {
                $message->to($request->email, 'Kjora')->subject('Kjora');
                $message->from('mwaqasiu@gmail.com', 'Kjora');
            });

            return redirect()->route('admin.email.verification', encrypt($user->email));

        } else {
            return back()->withError("This Email Is Not Exist In Database")->withInput();
        }
    }

    public function emailVerify($email)
    {
        $user = User::where('email', decrypt($email))->first();
        return view('admin.auth.email_verification')
            ->with('user', $user);
    }

    public function checkVerificationCode(Request $request, $email)
    {
        try {
            $user = User::where('email', decrypt($email))->first();
            if ($user) {
                if ($user->email_verification_code == $request->email_verification_a . $request->email_verification_b . $request->email_verification_c . $request->email_verification_d) {
                    return redirect()->route('admin.new.password', encrypt($user->email));
                }
            } else {
                return back()->withError("Invalid Code")->withInput();
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }

    }

    public function newPassword($email)
    {
        $user = User::where('email', decrypt($email))->first();
        return view('admin.auth.create_new_password')
            ->with('user', $user);
    }

    public function updatePassword(Request $request, $email)
    {
        $request->validate([
            'new_password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        try {
            $user = User::where('email', decrypt($email))->first();
            if ($user) {
                $user->password = bcrypt($request->new_password);
                $user->save();
            }

            return redirect()->route('admin.return.login');

        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function returnLogin()
    {
        return view('admin.auth.return_login');
    }

    public function forgotPasswordPhoneView()
    {
        $country = Country::all();
        return view('admin.auth.phone.forgot_password')
        ->with('country', $country);
    }

    public function getPhoneVerificationCode(Request $request)
    {
        $request->validate([
            'phone_number' => ['required', 'string'],
            'country_code' => 'required'
        ]);
        try{
            $phone = Profile::where('phone', $request->phone_number)->first();
            if ($phone) {
                $data['to_phone_number'] = $request->country_code.$request->phone_number;
                /* Get credentials from .env */
                $token = getenv("TWILIO_AUTH_TOKEN");
                $twilio_sid = getenv("TWILIO_SID");
                $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
                $twilio = new Client($twilio_sid, $token);
                $twilio->verify->v2->services($twilio_verify_sid)
                    ->verifications
                    ->create($data['to_phone_number'], "sms",[
                        'from' => getenv("TWILLIO_PHONE_NUMBER")
                    ]);

            return view('admin.auth.phone.verification')->with('data', $data)->with('phone', $phone);
            }else {
                return back()->withError("This Phone Is Not Exist In Database")->withInput();
            }

        }catch(Exception $ex){
            return back()->withError($ex->getMessage());
        }

    }

    protected function verifyPhone(Request $request, $phone)
    {
        try{
            $data['to_phone_number'] = $request->phone_number;
            $verification_code = $request->phone_verification_a . $request->phone_verification_b . $request->phone_verification_c . $request->phone_verification_d;
            /* Get credentials from .env */
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_sid = getenv("TWILIO_SID");
            $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
            $twilio = new Client($twilio_sid, $token);
            $verification = $twilio->verify->v2->services($twilio_verify_sid)
                ->verificationChecks
                ->create(array('to' => $data['to_phone_number'],
                'code' => $verification_code));

                // return redirect()->route('admin.phone.new.password',$phone );
            if ($verification->valid) {
                return redirect()->route('admin.phone.new.password');
            }
            return back()->with(['data' => $data, 'error' => 'Invalid verification code entered!']);
        }catch(Exception $ex){
            return back()->with(['data' => $data, 'error' => $ex->getMessage()]);
        }
    }

    public function phoneNewPassword($phone)
    {
        $profile = Profile::where('phone', decrypt($phone))->first();
        return view('admin.auth.phone.create_new_password')
        ->with('profile', $profile);
    }

    public function updatePasswordByPhoneVerification(Request $request, $phone, $id)
    {
        $request->validate([
            'new_password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        try {
            $phone = Profile::where('admin_profile.phone', decrypt($phone))->first();
            if($phone){

                User::where('id',$id)->update([
                    'password' => bcrypt($request->new_password)
                ]);
            }

            return redirect()->route('admin.return.login');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('admin.login');
    }
}
