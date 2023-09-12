<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MerchantController extends Controller
{
    public function loginMerchant(){
        return view('auth/login_merchant');
    }
    public function berandaMerchant(){
        return view('merchant/beranda_merchant');
    }
    public function editMerchant(){
        return view('merchant/edit_dagang');
    }
    public function tambahDagang(Request $request){
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'title' => 'required',
            'satuan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['auth' => 'Tolong di isi dengan lengkap']);
        }
            Product::create([
                'tanggal' => $request->input('tanggal'),
                'title' => $request->input('title'),
                'satuan' => $request->input('satuan'),
                'deskripsi' => $request->input('deskripsi'),
                'harga' => $request->input('harga'),
                'status' => 'aktif'
        ]);
        return redirect()->back()->with('success', 'Anda telah berhasil menambah promosi');
    }
    public function EditprofileMerchant(){
        return view('merchant/edit_profile');
    }
    public function ProfileMerchant(){
        return view('merchant/profile');
    }
}
