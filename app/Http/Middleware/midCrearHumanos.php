<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class midCrearHumanos
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
        if($user->tokenCan("dios")) {
            return $next($request);
        }
        else{
            return response()->json(["success"=>false, "message" => "No eres un dios, ¡OSAS atreverte a crear humanos cuando ni siquiera tienes poderes divinos!"], 401);
        }
    }
}
