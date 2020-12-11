<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Session;

class HandleInertiaRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        $toastSuccess = Session::get('toastSuccess');
        $toastFail = Session::get('toastFail');

        // dd($toastSuccess);
        
        Inertia::share([
            'toastSuccess' => $toastSuccess,
            'toastFail' => $toastFail,
        ]);

        return $next($request);
    }  
    
}
