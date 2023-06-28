<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class PairMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info("PairMiddleware handle");
        Log::info($request->getUri());
        Log::info($request->has("value"));
        if($request->has("value")){

            $value = $request->input("value");
            if($value % 2 ==0){
                Log::info("PairMiddleware has value : $value");
                return redirect("/pair");
            }
            else{
                return redirect("/impair");
            }
        }
        return $next($request);
    }
}
