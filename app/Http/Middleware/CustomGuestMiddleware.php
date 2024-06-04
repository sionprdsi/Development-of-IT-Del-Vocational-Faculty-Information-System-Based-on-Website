<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomGuestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // If the user is authenticated, redirect them to the dashboard or wherever you prefer
            return redirect('admin/home');
        }

        // If the user is not authenticated, return a custom JSON response
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
