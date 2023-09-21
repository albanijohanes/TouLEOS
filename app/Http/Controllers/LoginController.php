<?php

namespace App\Http\Controllers;

use App\User;
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
            return redirect()->back()->withErrors(['Tolong di isi untuk Username atau Password']);
        }

        // perubahan auth
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            $user = Auth::user();

            return $this->redirectToRoleDashboard($user->role);
        }
        $user = User::where('username', $request->username)->first();
        if ($user) {
            return redirect()->back()->withErrors([
                'auth' => 'Password yang anda masukkan salah'
            ]);
        } else {
            return redirect()->back()->withErrors([
                'auth' => 'Username tidak ditemukan, Lakukan Registerasi'
            ]);
        }

    }

    public function redirectToRoleDashboard($role){
        switch ($role) {
            case 'customer':
                return redirect()->route('index');
            case 'admin':
                return redirect()->route('berandaAdmin');
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
