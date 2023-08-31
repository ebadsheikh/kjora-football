<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AppManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.app_management.dashboard');
    }

}
