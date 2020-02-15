<?php

namespace App\Http\Middleware;

use Closure;

class ceo
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
      if(auth()->user()->status == 2){
        return $next($request);
      }
        return redirect('employee.employeeindex')->with('error','You have not admin access');
    }

  }