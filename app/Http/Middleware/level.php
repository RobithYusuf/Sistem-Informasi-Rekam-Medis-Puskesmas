<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check() || !in_array($request->user()->role, $roles)) {
            // redirect ke halaman error atau halaman lainnya jika user tidak memiliki role yang diperlukan
            return redirect('error');
        }

        return $next($request);
    }
}
