<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ChartExport;
use App\Exports\StadiumExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Stadium\StoreRequest;
use App\Http\Requests\Admin\Stadium\UpdateRequest;
use App\Models\Country;
use App\Models\Stadium;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $count_stadium = Stadium::count();
        $count_published = Stadium::where('status', 'Published')->count();
        $count_unpublished = Stadium::where('status', 'Unpublished')->count();
        $count_deleted = Stadium::where('deleted_at', '!=', null )->count();
        return view('admin.stadium.dashboard')
        ->with('count_stadium', $count_stadium)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished)
        ->with('count_deleted', $count_deleted);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        $country = Country::all();
        return view('admin.stadium.add')
        ->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        try {
            Stadium::create($request->validated()+[
                'user_id' => session('user_id')
            ]);
            return redirect()->route('admin.stadium.list');

        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $r
     * @return View
     */
    public function list(Request $r): View
    {
        $stadium_count = Stadium::count();
        $stadium = Stadium::query();

        if($r->search_by_name){
            $stadium = $stadium->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $stadium = $stadium->where('status',$r->search_by_status);
        }
        if ($r->search_by_date) {
            $stadium = $stadium->where('date','LIKE',"%".$r->search_by_date."%");
        }
        if ($r->search_by_address) {
            $stadium = $stadium->where('address','LIKE',"%".$r->search_by_address."%");
        }
         $stadium = $stadium->orderBy('updated_at', 'desc')->get();

        return view('admin.stadium.list')
        ->with('stadium_count', $stadium_count)
        ->with('stadium', $stadium);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id):View
    {
        $stadium = Stadium::where('stadium.id', $id)->join('users', 'users.id', 'stadium.user_id')
        ->select('stadium.*','users.user_name')->first();
        $country = Country::all();
        return view('admin.stadium.edit')
        ->with('country', $country)
        ->with('stadium', $stadium);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Stadium  $stadium
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Stadium $stadium): RedirectResponse
    {
        try {
            $stadium->update($request->validated());
            return redirect()->route('admin.stadium.list');
        }  catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Stadium::where('id', $id)->delete();
        return redirect()->route('admin.stadium.list');
    }

    public function viewPDF()
    {
        $stadium_data = Stadium::all();
        return view('admin.stadium.pdf_view')
        ->with('stadium_data', $stadium_data);
    }

    public function viewExcel()
    {
        $stadium = Stadium::all();
        return view('admin.stadium.excel')
        ->with('stadium', $stadium);
    }

    public function generatePDF()
    {
        $stadium_data = Stadium::get();
        $pdf = PDF::loadView('admin.stadium.pdf_view', compact('stadium_data'));
        return $pdf->download('stadium.pdf');
    }

     public function generateDocx()
    {
        $stadium_data =  Stadium::get();
        $filename = 'stadium.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.stadium.pdf_view', compact('stadium_data'));
        echo $htmlContent;
    }
     /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new StadiumExport, 'stadium.xlsx');
    }
}
