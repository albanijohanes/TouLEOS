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
        //done
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role === 'porter') {
                $porter = $user->Porter;
                if ($porter && $porter->status === 'approved') {
                    return $next($request);
                }
            } elseif ($user->role === 'merchant') {
                $merchant = $user->Merchant;
                if ($merchant && $merchant->status === 'approved') {
                    return $next($request);
                }
            } else {
                // For other roles like 'customer' or 'admin', no status check is needed.
                return $next($request);
            }

            // If the user is not approved or doesn't have a 'porter' or 'merchant' record, redirect them.
            return redirect()->route('start')->with('alert', 'Daftar, silahkan tunggu proses verifikasi oleh admin. Jika dalam 3 hari Anda tidak dapat masuk ke akun, silahkan hubungi kami di 0895804049310');
        }

        return redirect()->route('start');
    }
}
