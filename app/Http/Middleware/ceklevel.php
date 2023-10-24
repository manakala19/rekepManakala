<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ceklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$levels): Response
    {

        if(in_array($request->user()->level,$levels)){
            return $next($request);
        } if($request->user()->level != 'admin'){
            return redirect('laporan-kegiatan');
        } else{
            return redirect('admin');
        }


    }
}
