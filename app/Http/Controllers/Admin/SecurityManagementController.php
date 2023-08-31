<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SecurityManagement\StoreRequest;
use App\Models\Policies;
use App\Models\PrevPolicies;
use Illuminate\Http\Request;

class SecurityManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.security_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function security()
    {
        $policy = Policies::where('type','privacy_policy')->first();
        return view('admin.security_management.security')
        ->with('policy', $policy);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $policies = Policies::where('type', $request->policy_type)->first();
        $prev_delete = PrevPolicies::where('type', $request->policy_type)->delete();
        $prev = new PrevPolicies();
        $prev->type = $policies->type;
        $prev->description = $policies->description;
        $prev->save();
        Policies::where('type', $request->policy_type)->update([
            'description' => $request->description
        ]);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy()
    {
        $prev_policy = PrevPolicies::where('type','privacy_policy')->first();
        $policy = Policies::where('type','privacy_policy')->first();
        return view('admin.security_management.privacy_policies')
        ->with('prev_policy', $prev_policy)
        ->with('policy', $policy);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function termOfService()
    {
        $prev_term = PrevPolicies::where('type','term_and_condition')->first();
        $term = Policies::where('type','term_and_condition')->first();
        return view('admin.security_management.terms_of_services')
        ->with('prev_term', $prev_term)
        ->with('term', $term);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cookies()
    {
        $prev_cookies = PrevPolicies::where('type','cookie_use')->first();
        $cookies = Policies::where('type','cookie_use')->first();
        return view('admin.security_management.cookies')
        ->with('prev_cookies', $prev_cookies)
        ->with('cookies', $cookies);
    }

}
