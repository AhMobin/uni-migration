<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class AdmitCard
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
//        $check = DB::table('admissions')->where('status',1)->first();
//        if($check != true){
//            return redirect()->route('apply.admission');
//        }
        return $next($request);
    }


}
