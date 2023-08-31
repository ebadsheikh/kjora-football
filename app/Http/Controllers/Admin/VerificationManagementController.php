<?php

namespace App\Http\Controllers\Admin;

use App\Exports\VerificationExport;
use App\Http\Controllers\Controller;
use App\Models\CardDetail;
use App\Models\Club;
use App\Models\Country;
use App\Models\PlayerManagement;
use App\Models\Position;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class VerificationManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.verification_management.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list(Request $r)
    {
        $card_detail = CardDetail::first();
        $verify = PlayerManagement::query();
        if($r->search_by_name){
            $verify = $verify->where('first_name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $verify = $verify->where('status',$r->search_by_status);
        }
        if($r->search_by_date_added && $r->search_by_date_ended){
            $verify = $verify->whereBetween('created_at',[$r->search_by_date_added,$r->search_by_date_ended]);
        }
         $verify = $verify->with('user')
         ->with('position')->get();
        return view('admin.verification_management.list')
        ->with('verify', $verify)
        ->with('card_detail', $card_detail);
    }
     /**
     * Display a listing of the resource.
     *
     */
    public function manageAccount($id)
    {
        $country = Country::all();
        $club = Club::all();
        $position = Position::all();
        $player_verify_account = PlayerManagement::with('user')->with('position')->where('id', $id)->first();
        return view('admin.verification_management.manage_account')
        ->with('country', $country)
        ->with('club', $club)
        ->with('position', $position)
        ->with('player_verify_account', $player_verify_account);
    }

    public function updateAccount(Request $request, $id)
    {
        PlayerManagement::where('id', $id)->update([
            'status' => $request->status
        ]);

        return redirect()->route('admin.verification.management.list');
    }

    public function viewPDF()
    {
        $verify_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.verification_management.pdf_view')
        ->with('verify_data', $verify_data);
    }

    public function viewExcel()
    {
        $verify_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.verification_management.excel')
        ->with('verify_data', $verify_data);
    }

    public function generatePDF()
    {
        $verify_data =  PlayerManagement::with('user')->with('position')->get();
        $pdf = PDF::loadView('admin.verification_management.pdf_view', compact('verify_data'));
        return $pdf->download('verify.pdf');
    }

     public function generateDocx()
    {
        $verify_data =  PlayerManagement::with('user')->with('position')->get();
        $filename = 'verify.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.verification_management.pdf_view', compact('verify_data'));
        echo $htmlContent;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new VerificationExport, 'verification.xlsx');
    }
}
