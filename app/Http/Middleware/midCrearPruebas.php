<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class midCrearPruebas
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
        $user = $request->user();
        if ($user->tokenCan("dios")) {
            return $next($request);
        } else {
            return response()->json(["success"=>false, "message" => "Unauthorised"],202);
        }
    }
}
