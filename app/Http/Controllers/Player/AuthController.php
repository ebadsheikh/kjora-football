<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Http\Requests\Player\Register\StoreRequest;
use App\Http\Services\Media;
use App\Models\Club;
use App\Models\Country;
use App\Models\PlayerManagement;
use App\Models\PlayerPosition;
use App\Models\Position;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function signup()
    {
        $player_position = PlayerPosition::all();
        $club = Club::orderBy('name')->get();
        $country = Country::orderBy('name')->get();
        return view('player.auth.signup')
        ->with('player_position', $player_position)
        ->with('club', $club)
        ->with('country', $country);
    }

    public function checkRegister(StoreRequest $request)
    {
        $request->validate([
            'phone_merge' => 'phone:AUTO,mobile',
            'date_of_birth' => 'required|before:18 years ago',
        ],
        [
            'phone_merge.phone' => 'You have to Enter Valid Number',
            'date_of_birth.before' => 'Your age must be above 18 year'
        ]);

        $media = new Media();
        $player = new PlayerManagement();
        $player->position_id = $request->position_id;
        $player->player_user_name = $request->player_user_name;
        $player->first_name = $request->first_name;
        $player->sur_name = $request->sur_name;
        $player->email = $request->email;
        $player->password = bcrypt($request->password);
        $player->country_id = $request->country_id;
        $player->club_id = $request->club_id;
        $player->date_of_birth = $request->date_of_birth;
        $player->phone_code = $request->phone_code;
        $player->phone = $request->phone;
        $player->gender = $request->gender;
        $player->profile_image = $media->upload($request);
        $player->save();
        return back()->with('message', 'Successfully Register');
    }

    /**
     * login form of admin
     * @return View
     */
    public function login(): View
    {
        return view('player.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        try {
            $player = PlayerManagement::where("email", $request->email)->first();
            if ($player) {
                if (Hash::check($request->password, $player->password)) {
                    session([
                        'player_id' => $player->id,
                        'name' => $player->player_user_name,
                        'first_name' => $player->first_name,
                        'sur_name' => $player->sur_name,
                        'image' => $player->profile_image,
                        'membership_type' => $player->membership_type,
                        'current_city' => $player->current_city,
                        'current_address' => $player->current_address
                    ]);
                    return redirect()->route('player.dashboard');
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
        return view('player.auth.forget_password.forgot-password');
    }

    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $user = PlayerManagement::where("email", $request->email)->first();
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

            return redirect()->route('player.email.verification', encrypt($user->email));

        } else {
            return back()->withError("This Email Is Not Exist In Database")->withInput();
        }
    }

    public function emailVerify($email)
    {
        $user = PlayerManagement::where('email', decrypt($email))->first();
        return view('player.auth.email_verification')
            ->with('user', $user);
    }

    public function checkVerificationCode(Request $request, $email)
    {
        try {
            $user = PlayerManagement::where('email', decrypt($email))->first();
            if ($user) {
                if ($user->email_verification_code == $request->email_verification_a . $request->email_verification_b . $request->email_verification_c . $request->email_verification_d) {
                    return redirect()->route('player.new.password', encrypt($user->email));
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
        $user = PlayerManagement::where('email', decrypt($email))->first();
        return view('player.auth.create_new_password')
            ->with('user', $user);
    }

    public function updatePassword(Request $request, $email)
    {
        $request->validate([
            'new_password' => ['required|required_with:confirm_password|same:confirm_password', Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
            ],
            'new_password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        try {
            $user = PlayerManagement::where('email', decrypt($email))->first();
            if ($user) {
                $user->password = bcrypt($request->new_password);
                $user->save();
            }

            return redirect()->route('player.return.login');

        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function returnLogin()
    {
        return view('player.auth.return_login');
    }

    public function about()
    {
        return view('player.auth.about');
    }

    public function contact()
    {
        return view('player.auth.contact');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
