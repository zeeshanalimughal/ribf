<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if (!$request->session()->has('user')) {
            $request->session()->put("error", "Access Denied / Account dose not exists | Or Your Accoutn is no Activate");
            return redirect('/');
        }
        return $next($request);
    }
}
