<?php

namespace App\Http\Middleware;

use App\Models\Routelogger;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginUserRoute
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
        
        // if(Auth::user()->role !='1'){
        //     return redirect('/');
        // }
        // $path = $request->path();
        // $ip = $request->ip();
        // $agentip = $request->userAgent();
        // $user_id = Auth::id();

            $data=[
                'route' => $request->path(),
                'ip' => $request->ip(),
                'agent' => $request->userAgent(),
                'user_id' => Auth::id()
            ];
        Routelogger::create($data);


        // dd($data);
        return $next($request);
    }
}
