<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()) {
            abort(403);
        }

//        $today = Carbon::now();
//        $created = Carbon::parse($user->created_at);
//        if ($today->diffInDays($created)>3){
//            abort(404);
//        }

        return $next($request);
    }
}
