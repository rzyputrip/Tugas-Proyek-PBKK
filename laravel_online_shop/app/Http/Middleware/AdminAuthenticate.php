<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AdminAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('admin.login');
    }

    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('admin')->check()) {
            // Jika pengguna "admin" sudah terotentikasi, maka kita akan mengatur guard otentikasi untuk menggunakan "admin".
            return $this->auth->shouldUse('admin');
        }
        
        // Jika pengguna "admin" belum terotentikasi, maka kita akan mengeksekusi metode 'unauthenticated' dengan menyertakan array ['admin'] sebagai parameter.
        $this->unauthenticated($request, ['admin']);
        
    }
}
