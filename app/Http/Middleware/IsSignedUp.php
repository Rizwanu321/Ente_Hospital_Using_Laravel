<?php

namespace App\Http\Middleware;

use Closure;

class IsSignedUp
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
         if($request->session()->get('userrole')=='Requestor'){ // if userid is not set in session
            return redirect()->to('Requestor/home');
           
        }
        else if($request->session()->get('userrole')=='Admin'){ // if userid is not set in session
            return redirect()->to('Admin/home');
           
        }
         else if($request->session()->get('userrole')=='Donor'){ // if userid is not set in session
            return redirect()->to('Donor/home');
           
        }
        
        return $next($request);
    }
}
