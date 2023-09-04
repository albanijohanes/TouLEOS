<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function start(){
        return view('landingpage');
    }
    
    public function loginuser(){
        if(Auth::check()){
            if(Auth::user()->role == 'customer'){
                return redirect()->route('index');
            }
        }
        return view('auth/login_user');
    }

    public function loginporter(){
        if(Auth::check()){
            if(Auth::user()->role == 'porter'){
                return redirect()->route('porter');
            }
        }
        return view('auth/login_porter');
    }

    public function loginmerchant(){
        if(Auth::check()){
            if(Auth::user()->role == 'merchant'){
                return redirect()->route('beranda_merchant');
            }
        }
        return view('auth/login_merchant');
    }

    public function loginadmin(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('berandaAdmin');
            }
        }
        return view('landingpage');
    }

    public function loginPost(Request $request){
        $validator = Validator::make($request->all(), [
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('start')->withErrors($validator)->withInput();
        }

        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
            ])
            ){
            $user = Auth::user();
            if($user->role == 'customer'){
                return redirect()->route('index');
            }elseif($user->role == 'admin'){
                return redirect()->route('berandaAdmin');
            }elseif($user->status === 'approved'){
                return $this->redirectToRoleDashboard($user->role);
            }elseif($user->status === 'pending'){
                return redirect()->route('start')->withErrors(['auth' => 'Your account is pending approval.']);
            }
        }
        return redirect()->route('start')->withErrors(['auth' => 'password atau username salah']);
    }

    public function redirectToRoleDashboard($role){
        switch ($role) {
            case 'porter':
                return redirect()->route('porter');
            case 'merchant':
                return redirect()->route('beranda_merchant');
            default:
                return redirect()->route('start')->withErrors(['auth' => 'Invalid user role.']);
        }
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('start');
    }
}
