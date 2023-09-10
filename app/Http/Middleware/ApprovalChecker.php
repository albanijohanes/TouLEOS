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

            if($user->role === 'porter'){
                $porter = $user->Porter;
                if($porter && $porter->status === 'approved'){
                    return $next($request);
                }
            }elseif ($user->role === 'merchant') {
                $merchant = $user->Merchant;
                if($merchant && $merchant->status === 'approved'){
                    return $next($request);
                }
            }else {
                return $next($request);
            }
            Auth::logout();
            return redirect()->route('start')->with('alert', 'Silahkan tunggu proses verifikasi oleh admin. Jika dalam 3 hari Anda tidak dapat masuk ke akun, silahkan hubungi kami di 0895804049310');
        }

        return redirect()->route('start');
    }
}


