<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Upgrade\StoreRequest;
use App\Models\Subscription;
use App\Models\SubscriptionInfo;
use Exception;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.upgrade_management.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $subscription = Subscription::first();
            if ($subscription === null) {
                $new_subscription = new Subscription();
                $new_subscription->one_month = $request->one_month;
                $new_subscription->two_month = $request->two_month;
                $new_subscription->three_month = $request->three_month;
                $new_subscription->save();
                $subscription_id = $new_subscription->id;
            } else {
                $subscription->one_month = $request->one_month;
                $subscription->two_month = $request->two_month;
                $subscription->three_month = $request->three_month;
                $subscription->save();
                $subscription_id = $subscription->id;
            }
            SubscriptionInfo::where('subscription_id', $subscription_id)->delete();
            foreach($request->description as $key){
                $description[] =  $key;
                $subscription_info = new SubscriptionInfo();
                $subscription_info->subscription_id = $subscription_id;
                $subscription_info->description = $key;
                $subscription_info->save();
            }

            return redirect()->route('admin.upgrade.management.list');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('admin.upgrade_management.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upgradeAccount()
    {
        $subscription = Subscription::with('subscriptionInfo')->first();
        return view('admin.upgrade_management.upgrade_account')
        ->with('subscription', $subscription);
    }

}
