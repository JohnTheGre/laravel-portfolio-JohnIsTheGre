<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $condition
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $condition)
    {
        // Check custom condition
        if (!$this->checkCondition($condition)) {
            return redirect('/home')->with('error', 'You do not have access to this page.');
        }

        return $next($request);
    }

    /**
     * Check the custom condition.
     *
     * @param  string  $condition
     * @return bool
     */
    private function checkCondition($condition)
    {
        // Implement your custom condition logic here
        // Example: Check if the user is authenticated
        if ($condition === 'auth' && !Auth::check()) {
            return false;
        }

        // Add more conditions as needed
        return true;
    }
}
