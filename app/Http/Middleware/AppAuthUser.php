<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AppAuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
				
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
			return $next($request);
        }
		
        return response()->json(["error", ["Usuario nao autenticado!"]], 401);
    }
}
