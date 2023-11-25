<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->isAdmin()) {

            return $next($request);
        } else {
            $urlIndex = route('home');
            return redirect($urlIndex);
        }
    }

    private function isAdmin() {
        return true;
    }
}
