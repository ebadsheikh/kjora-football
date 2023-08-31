<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminAccount\UpdateRequest;
use App\Models\Club;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $club = Club::all();
        $super_admin = Profile::with('user')->where('user_id' , session('user_id'))->first();
        return view('admin.superadmin.account')
        ->with('club', $club)
        ->with('super_admin', $super_admin);
    }

    public function updateAccount(UpdateRequest $request)
    {
        User::where('id' , session('user_id'))->update([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.dashboard');
    }

}
