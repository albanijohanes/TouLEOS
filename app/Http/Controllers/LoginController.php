<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginuser(){
        if(Auth::check()){
            if(Auth::user()->role == 'Porter'){
                return redirect()->route('porter');
            }elseif(Auth::user()->role == 'Merchant'){
                return redirect()->route(('merchant'));
            }else{
                return redirect()->route('index');
            }
        }
        return view('auth/login_user');
    }

    public function loginporter(){
        if(Auth::check()){
            if(Auth::user()->role == 'Porter'){
                return redirect()->route('porter');
            }elseif(Auth::user()->role == 'Merchant'){
                return redirect()->route(('merchant'));
            }else{
                return redirect()->route('index');
            }
        }
        return view('auth/login_porter');
    }

    public function loginmerchant(){
        if(Auth::check()){
            if(Auth::user()->role == 'Porter'){
                return redirect()->route('porter');
            }elseif(Auth::user()->role == 'Merchant'){
                return redirect()->route(('merchant'));
            }else{
                return redirect()->route('index');
            }
        }
        return view('auth/login_merchant');
    }

    public function loginPost(Request $request){
        $validator = Validator::make($request->all(), [
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('start')->withErrors($validator)->withInput();
        }

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->route('login');
        }
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
