<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('umur');
        
        // jika $umur >= 18 tahun maka diizinkan ke route berikutnya.

        if($umur >= 18){
            // lanjutkan ke route yang akan dituju
            return $next($request);
        }
        // respon ketika umurnya dibawah 18 tahun
        return back()->with('gagal', 'Umur kamu tidak mencukupi');

    }
}
