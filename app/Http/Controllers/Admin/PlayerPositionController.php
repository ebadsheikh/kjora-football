<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlayerPosition\StoreRequest;
use App\Http\Requests\Admin\PlayerPosition\UpdateRequest;
use App\Models\PlayerPosition;
use App\Models\Position;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PlayerPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(Request $r): View
    {
        $count_player_position = PlayerPosition::count();
        $count_published = PlayerPosition::where('status', 'published')->count();
        $count_unpublished = PlayerPosition::where('status', 'unpublished')->count();
        $player_positions = PlayerPosition::query();

        if($r->search_by_name){
            $player_positions = $player_positions->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $player_positions = $player_positions->where('status',$r->search_by_status);
        }

         $player_positions = $player_positions->get();

        return view('admin.player_position.index')
        ->with('count_player_position', $count_player_position)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished)
        ->with('player_positions', $player_positions);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        $count_player_position = PlayerPosition::count();
        $count_published = PlayerPosition::where('status', 'published')->count();
        $count_unpublished = PlayerPosition::where('status', 'unpublished')->count();
        return view('admin.player_position.create')
        ->with('count_player_position', $count_player_position)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $player_position = new PlayerPosition();
        $player_position->name = $request->name;
        $player_position->status = $request->status;
        if ($player_position->save()) {
            return redirect()->route('admin.player.position.view');
        } else {
            return back()->withError("Something went wrong")->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Position $Position
     * @return View
     */
    public function show(): View
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Position $Position
     * @return View
     */
    public function edit($playerPosition): View
    {
        $count_player_position = PlayerPosition::count();
        $count_published = PlayerPosition::where('status', 'published')->count();
        $count_unpublished = PlayerPosition::where('status', 'unpublished')->count();
        $player_positions = PlayerPosition::where('id', $playerPosition)->first();
        return view('admin.player_position.edit')
        ->with('count_player_position', $count_player_position)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished)
        ->with('player_positions', $player_positions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Position $Position
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $playerPosition):RedirectResponse
    {
        Position::where('id', $playerPosition)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        return redirect()->route('admin.player.position.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Position $Position
     * @return RedirectResponse
     */
    public function destroy():RedirectResponse
    {
        return redirect()->route();
    }
}
