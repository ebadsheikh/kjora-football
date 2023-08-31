<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ReportExport;
use App\Http\Controllers\Controller;
use App\Models\PlayerManagement;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReportManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.report_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $report = PlayerManagement::with('user')
        ->with('position')
        ->get();
        return view('admin.report_management.list')
        ->with('report', $report);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportedProfile()
    {
        return view('admin.report_management.reported_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportProfileDetail()
    {
        return view('admin.report_management.report_profile_detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportedPlayerPhoto()
    {
        return view('admin.report_management.reported_player_photo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportChatList()
    {
        return view('admin.report_management.report_chat_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportChat()
    {
        return view('admin.report_management.report_chat');
    }

    public function viewPDF()
    {
        $report_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.report_management.pdf_view')
        ->with('report_data', $report_data);
    }

    public function viewExcel()
    {
        $report_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.report_management.excel')
        ->with('report_data', $report_data);
    }

    public function generatePDF()
    {
        $report_data = PlayerManagement::with('user')->with('position')->get();
        $pdf = PDF::loadView('admin.report_management.pdf_view', compact('report_data'));
        return $pdf->download('report.pdf');
    }

     public function generateDocx()
    {
        $report_data =  PlayerManagement::with('user')->with('position')->get();
        $filename = 'report.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.report_management.pdf_view', compact('report_data'));
        echo $htmlContent;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ReportExport, 'Report.xlsx');
    }

}
