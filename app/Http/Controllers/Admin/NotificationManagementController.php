<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NotificationManagement;
use Illuminate\Http\Request;

class NotificationManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function dashboard()
    {
        return view('admin.notification_management.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list()
    {
        $notification = NotificationManagement::all();
        return view('admin.notification_management.list')
        ->with('notification', $notification);
    }

    public function update(Request $request)
    {
        foreach($request->id as $notification_key => $notification){
            $check = NotificationManagement::where('id', $request->id[$notification_key])->update([
                'status' => $request->status[$notification_key]
            ]);

        }
        return redirect()->route('admin.notification.management.dashboard');
    }
}

