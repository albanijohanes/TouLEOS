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
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'jk' => $request->jk,
            'role' => $request->role
        ]);

        if ($user) {
            if ($request->role === 'porter') {
                if ($request->hasFile('ktp') && $request->hasFile('skkb')) {
                    $ktp = $request->file('ktp')->store('ktp');
                    $skkb = $request->file('skkb')->store('skkb');
                    Porter::create([
                        'user_id' => $user->id,
                        'alamat' => $request->alamat,
                        'email' => $request->email,
                        'skkb' => $skkb,
                        'ktp' => $ktp,
                    ]);
                } else {
                    // Handle the case where required files are not present
                    if (!$request->hasFile('ktp')) {
                        return redirect()->back()->withErrors(['ktp' => 'KTP file is required'])->withInput();
                    }
                    if (!$request->hasFile('skkb')) {
                        return redirect()->back()->withErrors(['skkb' => 'SKKB file is required'])->withInput();
                    }
                }
            } elseif ($request->role === 'merchant') {
                if ($request->hasFile('ktp') && $request->hasFile('siup')) {
                    $ktp = $request->file('ktp')->store('ktp');
                    $siup = $request->file('siup')->store('siup');
                    Merchant::create([
                        'user_id' => $user->id,
                        'alamat' => $request->alamat,
                        'email' => $request->email,
                        'siup' => $siup,
                        'ktp' => $ktp,
                    ]);
                } else {
                    // Handle the case where required files are not present
                    if (!$request->hasFile('ktp')) {
                        return redirect()->back()->withErrors(['ktp' => 'KTP file is required'])->withInput();
                    }
                    if (!$request->hasFile('siup')) {
                        return redirect()->back()->withErrors(['siup' => 'SIUP file is required'])->withInput();
                    }
                }
            }
        }

        session()->flash('success', 'Registrasi Berhasil');
        return redirect()->route('start');
    }
}
