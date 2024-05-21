<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::check())
        {
            if(Auth::user()->isadmin == '1')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status','Access Denied! as you are not as admin');
            }
        }
        else
        {
            return redirect('/')->with('status','Please Login First');
        }


    }
}
