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

        // mengambil nilai umur yang dibawa dari controller
        $umur = $request->session()->get('umur');

        if($umur < 18) {
            return redirect()
            ->route('umur.form')
            ->with('gagal', 'Umur kamu belum cukup');
        }

        return $next($request);
    }
}
