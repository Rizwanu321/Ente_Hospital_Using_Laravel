<?php

namespace App\Http\Middleware;

use Closure;

class IsBloodCenter
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
        // if($request->session()->get('userrole')=='Requestor'){ // if userid is not set in session
        //     return redirect()->to('Requestor/home');
           
        // }
        //  else 
        if($request->session()->get('userrole')=='bloodcenter'){ // if userid is not set in session
            return redirect()->to('bloodcenterlogins/{id}');
           
        }
        return $next($request);
    }
}