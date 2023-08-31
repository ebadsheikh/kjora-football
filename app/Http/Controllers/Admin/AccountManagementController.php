<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AccountManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.account_management.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function help()
    {
        return view('admin.account_management.help');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list()
    {
        return view('admin.account_management.list');
    }

}
