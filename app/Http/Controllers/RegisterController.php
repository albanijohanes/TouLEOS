<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Porter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RegisterController extends Controller
{
    public function registeruser(Request $request){
        $role = $request->query('role');
        return view('auth/regis_u', compact('role'));
    }

    public function registerporter(Request $request){
        $role = $request->query('role');
        return view('auth/regis_p', compact('role'));
    }

    public function registermerchant(Request $request){
        $role = $request->query('role');
        return view('auth/regis_m', compact('role'));
    }

    public function registerPost(Request $request){

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            if ($request->role === 'porter' || $request->role === 'merchant'){
                $skkb = $request->skkb->store('user_pdfs');
                $ktp = $request->ktp->store('user_pdfs');
                $siup = $request->siup->store('user_pdfs');

                if($request->role === 'porter'){
                    Porter::create([
                        'user_id' => $request->user->id,
                        'skkb' => $skkb,
                        'ktp' => $ktp
                    ]);
                } elseif ($request->role === 'merchant') {
                    Merchant::create([
                        'user_id' => $request->user->id,
                        'siup' => $siup,
                        'ktp' => $ktp
                    ]);
                }
            }
        }

        session()->flash('success', 'Register Berhasil');
        return redirect()->route('login');
    }
}
