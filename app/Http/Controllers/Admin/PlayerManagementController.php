<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PlayerExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlayerManagement\UpdateRequest;
use App\Models\CardDetail;
use App\Models\Club;
use App\Models\Country;
use App\Models\PlayerManagement;
use App\Models\PlayerPhoto;
use App\Models\PlayerVideo;
use App\Models\Position;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use mikehaertl\wkhtmlto\Pdf;

class PlayerManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.player_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function list():View
    {
        $player = PlayerManagement::with('user')
        ->with('position')
        ->get();
        $card_detail = CardDetail::first();
        return view('admin.player_management.list')
        ->with('player', $player)
        ->with('card_detail', $card_detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function defaultAccount($id)
    {
        $card_detail = CardDetail::first();
        $player_photo = PlayerPhoto::where('player_id', $id)->get();
        $player_video = PlayerVideo::where('player_id', $id)->get();
        $default_account = PlayerManagement::where('id', $id)->first();
        return view('admin.player_management.default_account')
        ->with('default_account', $default_account)
        ->with('player_photo', $player_photo)
        ->with('player_video', $player_video)
        ->with('card_detail', $card_detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function goldenMember($id)
    {
        $card_detail = CardDetail::first();
        $player_photo = PlayerPhoto::where('player_id', $id)->get();
        $player_video = PlayerVideo::where('player_id', $id)->get();
        $golden_account = PlayerManagement::where('id', $id)->first();
        return view('admin.player_management.golden_member')
        ->with('golden_account', $golden_account)
        ->with('player_photo', $player_photo)
        ->with('player_video', $player_video)
        ->with('card_detail', $card_detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function playerPhoto()
    {
        return view('admin.player_management.player_photo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function playerVideo()
    {
        return view('admin.player_management.player_video');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function normalProfile($id)
    {
        $country = Country::all();
        $club = Club::all();
        $position = Position::all();
        $normal_account = PlayerManagement::with('user')->with('position')->where('id', $id)->first();
        return view('admin.player_management.normal_profile')
        ->with('country', $country)
        ->with('club', $club)
        ->with('position', $position)
        ->with('normal_account', $normal_account);
    }

    public function updateAccount(UpdateRequest $request, $id)
    {
        PlayerManagement::where('id', $id)->update([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone
        ]);

        return redirect()->route('admin.player.management.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cardDetail()
    {$card = CardDetail::where('id', 1)->first();
        return view('admin.player_management.card_detail')
        ->with('card', $card);
    }

    public function updateCard(Request $request)
    {
            $data['first_name'] = $request->first_name;
            $data['sur_name'] = $request->sur_name;
            $data['rating'] = $request->rating;
            $data['price'] = $request->price;
            $data['age'] = $request->age;
            $data['played'] = $request->played;
            $data['missed'] = $request->missed;
            $data['position'] = $request->position;
            $data['favourite_club'] = $request->favourite_club;
            $data['location'] = $request->location;
            $card_detail = CardDetail::first();
            CardDetail::updateOrCreate(
                ['id' => $card_detail->id],
                $data
            );
            return redirect()->route('admin.player.management.dashboard');
    }

    public function viewPDF()
    {
        $player_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.player_management.pdf_view')
        ->with('player_data', $player_data);
    }

    public function viewExcel()
    {
        $player_data = PlayerManagement::with('user')->with('position')->get();
        return view('admin.player_management.excel')
        ->with('player_data', $player_data);
    }

    public function generatePDF()
    {
        // $player_data =  PlayerManagement::with('user')->with('position')->get();
        // $pdf = Dompdf::loadView('admin.player_management.pdf_view', compact('player_data'));

        // return $pdf->download('Player.pdf');
    }

     public function generateDocx()
    {
        $player_data =  PlayerManagement::with('user')->with('position')->get();
        $filename = 'player.doc';
        header("Content-Type: application/force-download");
        header( "Content-Disposition: attachment; filename=".basename($filename));
        header( "Content-Description: File Transfer");
        @readfile($filename);
        $htmlContent = view('admin.player_management.pdf_view', compact('player_data'));
        echo $htmlContent;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new PlayerExport, 'player.xlsx');
    }

    public function download()
    {
        $render = view('admin.player_management.chart')->render();

        $pdf = new pdf;
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000]);
        $pdf->saveAs(public_path('report.pdf'));

        return response()->download(public_path('report.pdf'));
    }

}
