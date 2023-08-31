<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Position\StoreRequest;
use App\Http\Requests\Admin\Position\UpdateRequest;
use App\Models\Position;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(Request $r): View
    {
        $count_position = Position::count();
        $count_activate = Position::where('status', 'Activate')->count();
        $count_deactivate = Position::where('status', 'Deactivate')->count();
        $positions = Position::query();
        if($r->search_by_name){
            $positions = $positions->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $positions = $positions->where('status',$r->search_by_status);
        }
        $positions = $positions->get();
        return view('admin.position.index')
        ->with('count_position', $count_position)
        ->with('count_activate', $count_activate)
        ->with('count_deactivate', $count_deactivate)
        ->with('positions', $positions);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        $count_position = Position::count();
        $count_activate = Position::where('status', 'Activate')->count();
        $count_deactivate = Position::where('status', 'Deactivate')->count();
        return view('admin.position.create')
        ->with('count_position', $count_position)
        ->with('count_activate', $count_activate)
        ->with('count_deactivate', $count_deactivate);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        Position::create($request->validated());
        return redirect()->route('admin.position.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Position $Position
     * @return View
     */
    public function edit($position): View
    {
        $count_position = Position::count();
        $count_activate = Position::where('status', 'Activate')->count();
        $count_deactivate = Position::where('status', 'Deactivate')->count();
        $positions = Position::where('id', $position)->first();
        return view('admin.position.edit')
        ->with('count_position', $count_position)
        ->with('count_activate', $count_activate)
        ->with('count_deactivate', $count_deactivate)
        ->with('positions', $positions);
    }


    public function update(UpdateRequest $request, Position $position)
    {
        $position->update($request->validated());
        return redirect()->route('admin.position.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Position $Position
     */
    public function destroy()
    {
    }
}
