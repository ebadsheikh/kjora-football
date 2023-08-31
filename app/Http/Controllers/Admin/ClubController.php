<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Club\StoreRequest;
use App\Http\Requests\Admin\Club\UpdateRequest;
use App\Http\Services\Media;
use App\Models\Club;
use App\Models\Country;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClubController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(Request $r): View
    {
        $count_club = Club::count();
        $count_published = Club::where('status', 'published')->count();
        $count_unpublished = Club::where('status', 'unpublished')->count();
        $club = Club::query();
        if($r->search_by_name){
            $club = $club->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $club = $club->where('status',$r->search_by_status);
        }
        $club = $club->get();
        return view('admin.club.index')
        ->with('count_club', $count_club)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished)
        ->with('club', $club);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        $country = Country::all();
        return view('admin.club.create')
        ->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $media = new Media();
        $img = $media->upload($request);
        Club::create($request->validated()+[
            'image' => $img,
        ]);

        return redirect()->route('admin.club.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Country $country
     * @return View
     */
    public function edit($club): View
    {
        $country = Country::all();
        $club = Club::where('id', $club)->first();
        return view('admin.club.edit')
        ->with('club', $club)
        ->with('country', $country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Country $country
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Club $club):RedirectResponse
    {
        $media = new Media();
        $img = $media->upload($request);
        $club->update($request->validated()+[
            'image' => $img,
        ]);

        return redirect()->route('admin.club.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country $country
     */
    public function destroy(Country $country)
    {
    }
}
