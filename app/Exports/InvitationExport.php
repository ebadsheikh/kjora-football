<?php

namespace App\Exports;

use App\Models\Invite;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvitationExport implements FromView

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.invitation_management.excel', [
            'invite_data' => Invite::with(['inviteTo.user'])->with('inviteTo.position')->with(['inviteFrom.user'])->with('inviteFrom.position')->get()
        ]);
    }
}
