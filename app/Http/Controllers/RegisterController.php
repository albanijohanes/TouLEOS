<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Porter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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
            'role' => $request->role,
        ]);

        if ($user) {
            if ($request->role === 'porter') {
                if ($request->hasFile('ktp') && $request->hasFile('skkb')) {
                    $ktpName = $request->file('ktp')->getClientOriginalName();
                    $skkbName = $request->file('skkb')->getClientOriginalName();

                    $uniqueKtp = Str::slug(pathinfo($ktpName, PATHINFO_FILENAME));
                    $uniqueSkkb = Str::slug(pathinfo($skkbName, PATHINFO_FILENAME));

                    $ktpExtension = $request->file('ktp')->getClientOriginalExtension();
                    $skkbExtension = $request->file('skkb')->getClientOriginalExtension();

                    $uniqueKtpName = $uniqueKtp . '_' . Str::uuid() . '.' . $ktpExtension;
                    $uniqueSkkbName = $uniqueSkkb . '_' . Str::uuid() . '.' . $skkbExtension;

                    $ktp = $request->file('ktp')->storeAs('ktp', $uniqueKtpName);
                    $skkb = $request->file('skkb')->storeAs('skkb', $uniqueSkkbName);

                    $porter_id = $this->generatePorterCode();

                    Porter::create([
                        'user_id' => $user->id,
                        'alamat' => $request->alamat,
                        'email' => $request->email,
                        'skkb' => $skkb,
                        'ktp' => $ktp,
                        'porter_id' => $porter_id,
                        'status' => 'pending',
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
                    $ktpName = $request->file('ktp')->getClientOriginalName();
                    $siupName = $request->file('siup')->getClientOriginalName();

                    $uniqueKtp = Str::slug(pathinfo($ktpName, PATHINFO_FILENAME));
                    $uniqueSiup = Str::slug(pathinfo($siupName, PATHINFO_FILENAME));

                    $ktpExtension = $request->file('ktp')->getClientOriginalExtension();
                    $siupExtension = $request->file('siup')->getClientOriginalExtension();

                    $uniqueKtpName = $uniqueKtp . '_' . Str::uuid() . '.' . $ktpExtension;
                    $uniqueSiupName = $uniqueSiup . '_' . Str::uuid() . '.' . $siupExtension;

                    $ktp = $request->file('ktp')->storeAs('ktp', $uniqueKtpName);
                    $siup = $request->file('siup')->storeAs('siup', $uniqueSiupName);

                    Merchant::create([
                        'user_id' => $user->id,
                        'alamat' => $request->alamat,
                        'email' => $request->email,
                        'siup' => $siup,
                        'ktp' => $ktp,
                        'status' => 'pending',
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
    protected function generatePorterCode(){
        $porter_id = strtoupper(Str::random(3)) . str_pad(rand(10,99), 2, '0', STR_PAD_LEFT);

        while(Porter::where('porter_id', $porter_id)->exists()){
            $porter_id = strtoupper(Str::random(3)) . str_pad(rand(10,99), 2, '0', STR_PAD_LEFT);
        }

        return $porter_id;
    }
}
