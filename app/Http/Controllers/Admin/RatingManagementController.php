<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RatingExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RatingManagement\UpdateRequest;
use App\Models\Labels;
use App\Models\PlayerManagement;
use App\Models\Rating;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class RatingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.rating_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $rating = PlayerManagement::with('user')
        ->with('position')
        ->get();
        return view('admin.rating_management.list')
        ->with('rating', $rating);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function normalRating()
    {
        $first_price = Rating::where('rating', '4.1 to 5.0')->where('type', 'standard')->first();
        $second_price = Rating::where('rating', '3.1 to 4.0')->where('type', 'standard')->first();
        $third_price = Rating::where('rating', '2.1 to 3.0')->where('type', 'standard')->first();
        $fourth_price = Rating::where('rating', '1.1 to 2.0')->where('type', 'standard')->first();
        $fifth_price = Rating::where('rating', '0.0 to 1.0')->where('type', 'standard')->first();
        return view('admin.rating_management.normal_rating')
        ->with('first_price', $first_price)
        ->with('second_price', $second_price)
        ->with('third_price', $third_price)
        ->with('fourth_price', $fourth_price)
        ->with('fifth_price', $fifth_price);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function goldenRating()
    {
        $first_price = Rating::where('rating', '4.1 to 5.0')->where('type', 'golden')->first();
        $second_price = Rating::where('rating', '3.1 to 4.0')->where('type', 'golden')->first();
        $third_price = Rating::where('rating', '2.1 to 3.0')->where('type', 'golden')->first();
        $fourth_price = Rating::where('rating', '1.1 to 2.0')->where('type', 'golden')->first();
        $fifth_price = Rating::where('rating', '0.0 to 1.0')->where('type', 'golden')->first();
        return view('admin.rating_management.golden_rating')
        ->with('first_price', $first_price)
        ->with('second_price', $second_price)
        ->with('third_price', $third_price)
        ->with('fourth_price', $fourth_price)
        ->with('fifth_price', $fifth_price);
    }

    public function updateRating(UpdateRequest $request)
    {
        Rating::where('rating', '4.1 to 5.0')->where('type', 'golden')->update([
            'price' => $request->first_price
        ]);
        Rating::where('rating', '3.1 to 4.0')->where('type', 'golden')->update([
            'price' => $request->second_price
        ]);
        Rating::where('rating', '2.1 to 3.0')->where('type', 'golden')->update([
            'price' => $request->third_price
        ]);
        Rating::where('rating', '1.1 to 2.0')->where('type', 'golden')->update([
            'price' => $request->fourth_price
        ]);
        Rating::where('rating', '0.0 to 1.0')->where('type', 'golden')->update([
            'price' => $request->fifth_price
        ]);

        return redirect()->route('admin.rating.management.rating');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageRating()
    {
        return view('admin.rating_management.manage_rating');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rating()
    {
        $goalkeeper_labels = Labels::where('type', 'goalkeeper')->get();
        $standard_labels = Labels::where('type', 'standard')->get();
        return view('admin.rating_management.rating')
        ->with('standard_labels', $standard_labels)
        ->with('goalkeeper_labels', $goalkeeper_labels);
    }

    public function updateLabels(Request $request)
    {
        if($request->type == 'Standard'){

            foreach($request->standard_id as $standard_key => $standard){
                Labels::where('id', $request->standard_id[$standard_key])->update([
                    'name' => $request->standard_name[$standard_key],
                    'status' => $request->standard_status[$standard_key]
                ]);
            }
        }else{
            foreach($request->goalkeeper_id as $goalkeeper_key => $goalkeeper){
                Labels::where('id', $request->goalkeeper_id[$goalkeeper_key])->update([
                    'name' => $request->goalkeeper_name[$goalkeeper_key],
                    'status' => $request->goalkeeper_status[$goalkeeper_key]
                ]);
            }
        }
       return redirect()->route('admin.rating.management.dashboard');
    }

    public function viewPDF()
    {
        $rating_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.rating_management.pdf_view')
        ->with('rating_data', $rating_data);
    }

    public function viewExcel()
    {
        $rating_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.rating_management.excel')
        ->with('rating_data', $rating_data);
    }

    public function generatePDF()
    {
        $rating_data = PlayerManagement::with('user')->with('position')->get();
        $pdf = PDF::loadView('admin.rating_management.pdf_view', compact('rating_data'));
        return $pdf->download('rating.pdf');
    }

     public function generateDocx()
    {
        $rating_data =  PlayerManagement::with('user')->with('position')->get();
        $filename = 'rating.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.rating_management.pdf_view', compact('rating_data'));
        echo $htmlContent;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new RatingExport, 'Rating.xlsx');
    }
}
