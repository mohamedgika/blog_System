<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLanguageApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Query
        // if($request->query('lang') !==  NULL){
        //     app()->setlocale($request->query('lang'));
        //     // dd($request->query('lang'));
        // }

        //==========================================================================================================

        // Header
        // if we want to hide ar and en in url
        if($request->hasHeader('lang')){

            app()->setLocale($request->header('lang',config('app.locale')));
            // dd($request->header('lang'));
        }

        return $next($request);
    }
}
