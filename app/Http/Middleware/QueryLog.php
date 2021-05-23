<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryLog
{
    public function handle(Request $request, Closure $next)
    {
        DB::listen(function ($query) {
           info($query->sql);
        });

        return $next($request);
    }
}
