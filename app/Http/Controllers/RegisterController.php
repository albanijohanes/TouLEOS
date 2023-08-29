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

        // $validator = FacadesValidator::make($request->all(), [
        //     'nama' => 'required|string|max:255',
        //     'username' => 'required|string|max:255',
        //     'no_hp' => 'required|string|max:15',
        //     'jk' => 'required|string|max:50',
        //     'role' => 'required|string|max:15',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'alamat' => 'required|string|max:255',
        //     'password' => 'required|string|min:8',
        //     'skkb' => 'required_if:role, porter|file|mimes:pdf',
        //     'ktp' => 'required|file|mimes:pdf',
        //     'siup' => 'required_if:role, merchant|file|mimes:pdf',
        // ]);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $role = $request->role;

        if ($role === 'porter') {
            $porter = Porter::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'jk' => $request->jk,
                'role' => $request->role,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'skkb' => $request->file('skkb')->store('skkb'),
                'ktp' => $request->file('ktp')->store('ktp'),
            ]);
            if ($porter) {
                session()->flash('success', 'Berhasil membuat akun');
                return redirect()->route('loginporter');
            }else{
                session()->flash('error', 'Gagal membuat akun');
                return back();
            }
        }elseif ($role === 'merchant') {
            $merchant = Merchant::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'jk' => $request->jk,
                'role' => $request->role,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'ktp' => $request->file('ktp')->store('ktp'),
                'siup' => $request->file('siup')->store('siup'),
            ]);
            if ($merchant) {
                session()->flash('success', 'Berhasil membuat akun');
                return redirect()->route('loginmerchant');
            }else{
                session()->flash('error', 'Gagal membuat akun');
                return back();
            }
        }else{
            $user = User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'no_hp' => $request->no_hp,
                'jk' => $request->jk,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                session()->flash('success', 'Berhasil membuat akun');
                return redirect()->route('loginuser');
            }else{
                session()->flash('error', 'Gagal membuat akun');
                return back();
            }
        }

    }
}
