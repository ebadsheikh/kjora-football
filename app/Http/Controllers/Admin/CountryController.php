<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Country\StoreRequest;
use App\Http\Requests\Admin\Country\UpdateRequest;
use App\Http\Services\Media;
use App\Models\Country;
use App\Models\Profile;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(Request $r): View
    {
        $count_country = Country::count();
        $count_published = Country::where('status', 'published')->count();
        $count_unpublished = Country::where('status', 'unpublished')->count();
        $country = Country::query();
        if($r->search_by_name){
            $country = $country->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $country = $country->where('status',$r->search_by_status);
        }
        $country = $country->get();
        return view('admin.country.index')
        ->with('count_country', $count_country)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished)
        ->with('country', $country);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     */
    public function store(StoreRequest $request)
    {
        $media = new Media();
        $img = $media->upload($request);
        Country::create($request->validated()+[
            'image' => $img,
        ]);

        return redirect()->route('admin.country.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Country $country
     * @return View
     */
    public function edit($country): View
    {
        $countries = Country::where('id', $country)->first();
        return view('admin.country.edit')
        ->with('countries', $countries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Country $country
     */
    public function update(UpdateRequest $request, Country $country)
    {
        $media = new Media();
        $img = $media->upload($request);
        $country->update($request->validated()+[
            'image' => $img,
        ]);

        return redirect()->route('admin.country.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country $country
     * @return RedirectResponse
     */
    public function destroy(Country $country)
    {

    }

    public function test()
    {
        return Route::currentRouteName();
        $profile = Profile::where('user_id', 11)->first();
        foreach($profile->access as $access){
            if(request()->isCurrentRoute('country.*')){
                echo $access;
            }
        }
    }
}
