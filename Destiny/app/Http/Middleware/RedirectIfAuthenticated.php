<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
             if (Auth::guard($guard)->check()) {
            //     //  dd(Auth::user()->role);
                // if(Auth::user()->role==1){
                //     //return redirect(RouteServiceProvider::HOME);
                //     return redirect(RouteServiceProvider::HOME);
                // }else{
                //     return redirect(RouteServiceProvider::LIVREUR);
                // }
             }

        }

        // if($role=='1'){
        //     return view('MaDashBord.acceuildashbord');
        // }elseif($role=='2'){
        //     return view('Operateur.acceuildashbord');
        // }else{
        //     return view('LivreursDashBord.livAcceuilDashBord');
        // }

        return $next($request);
    }
}
