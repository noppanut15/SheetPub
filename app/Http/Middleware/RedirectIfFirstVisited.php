<?php

namespace sheetpub\Http\Middleware;

use Closure;
use Cookie;
use Illuminate\Cookie\CookieJar;

class RedirectIfFirstVisited
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
        if(Cookie::has('visited'))
            return $next($request);
        else
            return response()->view('landing-page')->cookie(
                'visited', 'true', 1440);
    }
}
