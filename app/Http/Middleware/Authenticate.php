<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        if (!$request->expectsJson()) {
            if (Auth::check() && Auth::user()->isAdmin()){
                return route('staff.users');
            }
            else{
                Alert::error('Unauthorized Access','Login as an admin');
                return route('user.login');
            }
        }
    }
}
