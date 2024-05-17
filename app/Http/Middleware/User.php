<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user() && !$request->user()->hasVerifiedEmail()){
            return redirect()->route('verification.notice');
        }else if(Auth::user()->usertype == 'admin '){//jika bukan admin(maka user) hrs ke dashboard
            return redirect('/admin/dashboard');
        }
        return $next($request);
    }
}
