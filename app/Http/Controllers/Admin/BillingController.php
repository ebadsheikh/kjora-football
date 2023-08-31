<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Billing\StoreRequest;
use App\Http\Requests\Admin\Billing\UpdateRequest;
use App\Models\Billing;
use App\Models\Country;
use App\Repositories\BillingRepository;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BillingController extends Controller
{
    /** @var  BillingRepository */
    private $BillingRepository;

    public function __construct(BillingRepository $BillingRepo)
    {
        parent::__construct();
        $this->BillingRepository = $BillingRepo;
    }

    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $billing = Billing::all();
        return view('admin.billing.index')
        ->with('billing', $billing);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        return view('admin.billing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $billing['name'] = $request->name;
        try {
            $this->BillingRepository->create($billing);
        } catch(Exception $th){
            return back()->withError($th->getMessage())->withInput();
        }
        return redirect()->route('admin.billing.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  Country $country
     * @return View
     */
    public function show(Country $country): View
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Country $country
     * @return View
     */
    public function edit($billing): View
    {
        $billings = Billing::where('id', $billing)->first();
        return view('admin.billing.edit')
        ->with('billings', $billings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Country $country
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $billing):RedirectResponse
    {
        Billing::where('id', $billing)->update([
            'name' => $request->name
        ]);
        return redirect()->route('admin.billing.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country $country
     * @return RedirectResponse
     */
    public function destroy(Country $country):RedirectResponse
    {

    }
}
