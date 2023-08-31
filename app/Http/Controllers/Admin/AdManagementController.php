<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdManagement\StoreRequest;
use App\Http\Requests\Admin\AdManagement\UpdateRequest;
use App\Http\Services\Media;
use App\Models\AdManagement;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;

class AdManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $count_management = AdManagement::count();
        $count_published = AdManagement::where('status', 'Published')->count();
        $count_unpublished = AdManagement::where('status', 'Unpublished')->count();
        $count_deleted = AdManagement::where('deleted_at', '!=', null )->count();
        return view('admin.ad_management.dashboard')
        ->with('count_management', $count_management)
        ->with('count_published', $count_published)
        ->with('count_unpublished', $count_unpublished)
        ->with('count_deleted', $count_deleted);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('admin.ad_management.add')
        ->with('country', $country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try{
            $media = new Media();
            $img = $media->upload($request);
            AdManagement::create($request->validated()+[
                'image' => $img,
            ]);
            return redirect()->route('admin.ad.management.list');
        }  catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $r)
    {
        $ad_count = AdManagement::count();
        $ad = AdManagement::query();
        if($r->search_by_name){
            $ad = $ad->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $ad = $ad->where('status',$r->search_by_status);
        }
        if($r->search_by_visibility){
            $ad = $ad->where('visibility',$r->search_by_visibility);
        }
        if ($r->search_by_date_added) {
            $ad = $ad->where('date_added','LIKE',"%".$r->search_by_date_added."%");
        }
        if ($r->search_by_date_ended) {
            $ad = $ad->where('date_ended','LIKE',"%".$r->search_by_date_ended."%");
        }
         $ad = $ad->orderBy('updated_at', 'desc')->get();

        return view('admin.ad_management.list')
        ->with('ad_count', $ad_count)
        ->with('ad', $ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::all();
        $ad = AdManagement::where('id', $id)->first();
        return view('admin.ad_management.edit')
        ->with('country', $country)
        ->with('ad', $ad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, AdManagement $ad)
    {
        try {
            $media = new Media();
            $img = $media->upload($request);
            $ad->update($request->validated()+[
                'image' => $img,
            ]);
            return redirect()->route('admin.ad.management.list');
        }  catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }
}
