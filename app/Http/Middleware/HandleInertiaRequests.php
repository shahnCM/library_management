<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleInertiaRequests extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'toast' => function () {
                return Session::get('toast');
            }
        ]);
    }

}
