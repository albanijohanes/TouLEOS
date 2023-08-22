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
    public function register(Request $request){
        $role = $request->query('role');
        return view('auth/register', compact('role'));
    }

    public function registerPost(Request $request){

        $validator = FacadesValidator::make($request->all(), [
            'nama' => 'required|string|max: 255',
            'username' => 'required|string|max:255|unique:users',
            'no_hp' => 'required|string|max:255',
            'jk' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'pdf1' => 'required_if:role,porter,merchant|file|mimes:pdf',
            'pdf2' => 'required_if:role,porter,merchant|file|mimes:pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
