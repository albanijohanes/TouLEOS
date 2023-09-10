<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MerchantController extends Controller
{
    public function loginMerchant(){
        return view('auth/login_merchant');
    }
    public function berandaMerchant(){
        return view('merchant/beranda_merchant');
    }
    public function editMerchant(Request $request){
        Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'title' => 'required',
            'satuan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $dagang = Product::create([
            'tanggal' => $request->tanggal,
            'title' => $request->title,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return view('merchant/edit_dagang');
    }
    public function tambahDagang(){
        return view('merchant/tambah_dagang');
    }
    public function EditprofileMerchant(){
        return view('merchant/edit_profile');
    }
    public function ProfileMerchant(){
        return view('merchant/profile');
    }
}
