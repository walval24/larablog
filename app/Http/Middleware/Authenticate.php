<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;



class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    

    protected function redirectTo( $request)
    {
        if (! $request->expectsJson()) {
            if ($request->routeIs('author.*')) {
                session()->flash('fail', 'You must sign in first');
                return route('author.login');
            }
        }
    }
}
