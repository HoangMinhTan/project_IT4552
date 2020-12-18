<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class CheckRole
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
        $response = $next($request);
        echo $response;
        // $target = User::find($id);
        // $user = Auth::user();
        // if ($user->role < $target->role)
        //     return $next($request);
        // else 
        //     return redirect("dashboard");
    }
}
