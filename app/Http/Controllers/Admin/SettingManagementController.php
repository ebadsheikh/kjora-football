<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SettingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.setting_management.dashboard');
    }

}
