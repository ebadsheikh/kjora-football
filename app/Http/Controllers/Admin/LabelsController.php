<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\labels\StoreRequest;
use App\Http\Requests\Admin\labels\UpdateRequest;
use App\Models\Labels;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Str;

class LabelsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(Request $r): View
    {
        $count_labels = Labels::count();
        $count_activate = Labels::where('status', 'Activate')->count();
        $count_deactivate = Labels::where('status', 'Deactivate')->count();
        $labels = Labels::query();

        if($r->search_by_name){
            $labels = $labels->where('name','LIKE',"%".$r->search_by_name."%");
        }
        if($r->search_by_status){
            $labels = $labels->where('status',$r->search_by_status);
        }

         $labels = $labels->get();

        return view('admin.labels.index')
        ->with('count_labels', $count_labels)
        ->with('count_activate', $count_activate)
        ->with('count_deactivate', $count_deactivate)
        ->with('labels', $labels);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        $count_labels = Labels::count();
        $count_activate = Labels::where('status', 'Activate')->count();
        $count_deactivate = Labels::where('status', 'Deactivate')->count();
        return view('admin.labels.create')
        ->with('count_labels', $count_labels)
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
        $labels = new Labels();
        $labels->name = $request->name;
        $labels->status = $request->status;
        $labels->slug = Str::slug($request->name);
        if ($labels->save()) {
            return redirect()->route('admin.labels.view');
        } else {
            return back()->withError("Something went wrong")->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Labels $Labels
     * @return View
     */
    public function show(): View
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Labels $Labels
     * @return View
     */
    public function edit($labels): View
    {
        $count_labels = Labels::count();
        $count_activate = Labels::where('status', 'Activate')->count();
        $count_deactivate = Labels::where('status', 'Deactivate')->count();
        $labels = Labels::where('id', $labels)->first();
        return view('admin.labels.edit')
        ->with('count_labels', $count_labels)
        ->with('count_activate', $count_activate)
        ->with('count_deactivate', $count_deactivate)
        ->with('labels', $labels);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Labels $Labels
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $labels):RedirectResponse
    {
        Labels::where('id', $labels)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        return redirect()->route('admin.labels.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  labels $labels
     * @return RedirectResponse
     */
    public function destroy():RedirectResponse
    {
        return redirect()->route();
    }
}
