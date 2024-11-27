<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class roleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->guard()->check()) {
            $user = auth()->guard()->user();
    
            // Check if user has the correct role
            if ($role === 'admin' && $user->role !== 'admin') {
                return redirect('/')->withErrors(['error' => 'You do not have admin access']);
            }
            
            //Check if daw ang user role is user tas ang gi hatag na account is not user then ma redirect siya sa default
            if ($role === 'user' && $user->role !== 'user') {
                Log::warning('User does not have user role.');
                return redirect('/')->withErrors(['error' => 'You do not have user access']);
            }
        }
    
        // If the role matches, continue with the request
        return $next($request);
    }

    
}
