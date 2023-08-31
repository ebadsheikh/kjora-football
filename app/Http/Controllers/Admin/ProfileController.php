<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Account\StoreRequest;
use App\Http\Requests\Admin\Contract\StoreRequest as ContractStoreRequest;
use App\Http\Requests\Admin\Verification\StoreRequest as VerificationStoreRequest;
use App\Http\Services\Media;
use App\Models\Billing;
use App\Models\Club;
use App\Models\Country;
use App\Models\Position;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Policies;

class ProfileController extends Controller
{
    public function accountDashboard()
    {
        return view('admin.account.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function createAccount(): View
    {
        $club = Club::all();
        $country = Country::all();
        return view('admin.account.create_account')
            ->with('club', $club)
            ->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function storeAccount(StoreRequest $request)
    {
        $user = new User();
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_type = 'admin';
        $user->status = 'pending';
        if ($user->save()) {
            session([
                'temp_user_id' => $user->id,
                'temp_email' => $request->email,
                'temp_password' => $request->password,
            ]);
            $media = new Media();
            $account = new Profile();
            $account->user_id = $user->id;
            $account->first_name = $request->first_name;
            $account->sur_name = $request->sur_name;
            $account->phone = $request->phone;
            $account->date_of_birth = $request->date_of_birth;
            $account->gender = $request->gender;
            $account->country_id = $request->country_id;
            $account->favourite_club_id = $request->favourite_club_id;
            $account->qualification = $request->qualification;
            $account->institution = $request->institution;
            $account->experience = $request->experience;
            $account->skills = $request->skills;
            $account->profile_image = $media->upload($request);
            $account->save();

            return redirect()->route('admin.create.contract');
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function createContract(): View
    {
        $position = Position::all();
        $billing = Billing::all();
        return view('admin.account.create_contract')
            ->with('billing', $billing)
            ->with('position', $position);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function storeContract(ContractStoreRequest $request)
    {
        $contract = Profile::where('user_id', session('temp_user_id'))->first();
        $contract->date_of_employment = $request->date_of_employment;
        $contract->end_of_employment = $request->end_of_employment;
        $contract->salary = $request->salary;
        $contract->billing_id = $request->billing_id;
        $contract->deadline = $request->deadline;
        $contract->incomplete_work = $request->incomplete_work;
        $contract->public_holiday_applicability = $request->public_holiday_applicability;
        $contract->public_holiday_extras = $request->public_holiday_extras;
        $contract->leave_entitlements = $request->leave_entitlements;
        $contract->sick_leave_entitlements = $request->sick_leave_entitlements;
        $contract->position_id = $request->position_id;
        $contract->access = $request->access;
        $contract->role = $request->role;
        $contract->remarks = $request->remarks;
        $contract->save();
        return redirect()->route('admin.create.verify');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function createVerification(): View
    {
        $country = Country::all();
        return view('admin.account.verify_identity')
            ->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function storeVerification(VerificationStoreRequest $request)
    {
        $media = new Media();
        $verification = Profile::where('user_id', session('temp_user_id'))->first();
        $verification->identity_type = $request->identity_type;
        $verification->issued_country = $request->issued_country;
        $verification->identity_front_image = $media->uploadFront($request);
        $verification->identity_back_image = $media->upload($request);
        $verification->save();
        return redirect()->route('admin.create.privacy_policy');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function createPrivacyPolicy(): View
    {
        $policy = Policies::where('type','privacy_policy')->first();
        return view('admin.account.privacy_policy')
        ->with('policy', $policy);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function createTerms(): View
    {
        $term = Policies::where('type','term_and_condition')->first();
        return view('admin.account.terms')
        ->with('term', $term);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function createCookies(): View
    {
        $cookies = Policies::where('type','cookie_use')->first();
        return view('admin.account.cookies')
        ->with('cookies', $cookies);
    }


    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function viewPrivacyPolicy(): View
    {
        $policy = Policies::where('type','privacy_policy')->first();
        return view('admin.policies.privacy_policy')
        ->with('policy', $policy);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function viewTerms(): View
    {
        $term = Policies::where('type','term_and_condition')->first();
        return view('admin.policies.terms')
        ->with('term', $term);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function viewCookies(): View
    {
        $cookies = Policies::where('type','cookie_use')->first();
        return view('admin.policies.cookies')
        ->with('cookies', $cookies);
    }
}
