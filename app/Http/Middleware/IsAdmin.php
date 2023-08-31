<?php

namespace App\Http\Middleware;

use App\Models\Profile;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->exists('user_id')) {
            // id value cannot be found in session
            return redirect()->route('admin.login');
        } else {
            $user = User::where('id', session('user_id'))->first();
            if ($user->role_type == 'admin') {
                $profile = Profile::where('user_id', $user->id)->first();
                foreach($profile->access as $access){
                    if(request()->routeIs($access)){
                        return $next($request);
                    }
                }
               abort(403);
            }
            return $next($request);
        }
    }
}
