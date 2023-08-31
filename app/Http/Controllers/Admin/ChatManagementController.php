<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ChatManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.chat_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('admin.chat_management.chat_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        return view('admin.chat_management.chat');
    }
}
