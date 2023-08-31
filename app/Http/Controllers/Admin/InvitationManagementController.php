<?php

namespace App\Http\Controllers\Admin;

use App\Exports\InvitationExport;
use App\Http\Controllers\Controller;
use App\Models\CardDetail;
use App\Models\Hire;
use App\Models\Invite;
use App\Models\Setting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class InvitationManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.invitation_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $r)
    {
        $card_detail = CardDetail::first();
        $invite_count = Invite::count();
        $hire_count = Hire::count();
        $invite = Invite::query();
        $hire = Hire::query();
        if($r->search_by_date_added && $r->search_by_date_ended){
            $invite = $invite->whereBetween('created_at',[$r->search_by_date_added,$r->search_by_date_ended]);
        }
        if($r->search_by_date_added && $r->search_by_date_ended){
            $hire = $hire->whereBetween('created_at',[$r->search_by_date_added,$r->search_by_date_ended]);
        }
        $invite = $invite->with(['inviteTo.user'])->with('inviteTo.position')->with(['inviteFrom.user'])->with('inviteFrom.position')->get();
        $hire = $hire->with(['hireTo.user'])->with('hireTo.position')->with(['hireFrom.user'])->with('hireFrom.position')->get();
        // return response()->json($invite);
        return view('admin.invitation_management.invitation')
        ->with('invite_count', $invite_count)
        ->with('hire_count', $hire_count)
        ->with('invite', $invite)
        ->with('hire', $hire)
        ->with('card_detail', $card_detail);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $invitation_fee = Setting::where('type', 'invitation_fee')->first();
        return view('admin.invitation_management.edit_invitation')
        ->with('invitation_fee', $invitation_fee);
    }

    public function update(Request $request)
    {
        Setting::where('type', 'invitation_fee')->update([
            'value' => $request->value
        ]);
        return redirect()->route('admin.invitation.management.dashboard');
    }

    public function viewPDFInvite()
    {
        $invite_data = Invite::with(['inviteTo.user'])->with('inviteTo.position')->with(['inviteFrom.user'])->with('inviteFrom.position')->get();
        return view('admin.invitation_management.pdf_view')
        ->with('invite_data', $invite_data);
    }

    public function viewExcelInvite()
    {
        $invite_data = Invite::with(['inviteTo.user'])->with('inviteTo.position')->with(['inviteFrom.user'])->with('inviteFrom.position')->get();
        return view('admin.invitation_management.excel')
        ->with('invite_data', $invite_data);
    }

    public function generatePDFInvite()
    {
        $invite_data = Invite::with(['inviteTo.user'])->with('inviteTo.position')->with(['inviteFrom.user'])->with('inviteFrom.position')->get();
        $pdf = PDF::loadView('admin.invitation_management.pdf_view', compact('invite_data'));
        return $pdf->download('Invitation.pdf');
    }

     public function generateDocxInvite()
    {
        $invite_data = Invite::with(['inviteTo.user'])->with('inviteTo.position')->with(['inviteFrom.user'])->with('inviteFrom.position')->get();
        $filename = 'invitation.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.invitation_management.pdf_view', compact('invite_data'));
        echo $htmlContent;
    }

    public function viewPDFInHire()
    {
        $hire_data = Hire::with(['hireTo.user'])->with('hireTo.position')->with(['hireFrom.user'])->with('hireFrom.position')->get();
        return view('admin.invitation_management.hire_pdf_view')
        ->with('hire_data', $hire_data);
    }

    public function generatePDFHire()
    {
        $hire_data = Hire::with(['hireTo.user'])->with('hireTo.position')->with(['hireFrom.user'])->with('hireFrom.position')->get();
        $pdf = PDF::loadView('admin.invitation_management.hire_pdf_view', compact('hire_data'));
        return $pdf->download('hire.pdf');
    }

     public function generateDocxHire()
    {
        $hire_data = Hire::with(['hireTo.user'])->with('hireTo.position')->with(['hireFrom.user'])->with('hireFrom.position')->get();
        $filename = 'hire.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.invitation_management.hire_pdf_view', compact('hire_data'));
        echo $htmlContent;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new InvitationExport, 'Invite.xlsx');
    }
}
