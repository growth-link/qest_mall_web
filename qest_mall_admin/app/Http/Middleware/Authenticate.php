<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected string $user_route  = 'login';
    protected string $mall_admin_route = 'admin.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Route::is('user.*')) {
                return route($this->user_route);
            } elseif (Route::is('admin.*')) {
                return route($this->mall_admin_route);
            }
        }
    }
}
