<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovalChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role === 'porter') {
                $porter = $user->Porter;
                if ($porter && $porter->status === 'approved') {
                    return $next($request);
                }
            }

            if ($user->role === 'merchant') {
                $merchant = $user->Merchant;
                if ($merchant && $merchant->status === 'approved') {
                    return $next($request);
                }
            }

            // If the user is not approved or not in 'porter' or 'merchant' role,
            // log them out and redirect to the start page with a message.
            Auth::logout();
            return redirect()->route('start')->with('alert', 'Silahkan tunggu proses verifikasi oleh admin. Jika dalam 3 hari Anda tidak dapat masuk ke akun, silahkan hubungi kami di 0895804049310');
        }

        // If the user is not authenticated, redirect to the start page.
        return redirect()->route('start');
    }
}
