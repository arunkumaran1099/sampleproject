<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$role)
    {
        //check the num is 1,2,3 are not return to month one january

        // if($request -> num > 3){
        //     return redirect('month/1');
        // }
//-----------------------------------------------------------------------------
    //check the user is admin are not if admin return success are redirect to dashbord
        // if ($request->name !== 'admin') {

        //     return redirect('dashboard');

        // }

        // dd($request->all());

        //-----------------------------------------------------------------------------------
            //check the user is admin are not if admin return success are redirect to dashbord
        // if ($request->name !== 'admin') {

        //     return redirect('dashboard');

        // }
//---------------------------------------------------------------------------------------------
        return $next($request);
    }
}
