<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Porter;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function indexUser(){
        $merchant = Merchant::with('user')->get();
        $porter = Porter::with('user')->get();
        $countM = $merchant->where('status','pending')->count();
        $countP = $porter->where('status','pending')->count();
        $user = User::where('role', 'customer')->get();
        return view('Admin/pengunjung', compact('user', 'countM', 'countP'));
    }

    public function AdminMerchantPermohonan(){
        $merchant = Merchant::with('user')->get();
        $porter = Porter::with('user')->get();
        $countM = $merchant->where('status','pending')->count();
        $countP = $porter->where('status','pending')->count();
        return view('Admin/merchant_p', compact('merchant', 'countM', 'countP'));
    }

    public function AdminPorterPermohonan(){
        $porter = Porter::with('user')->get();
        $merchant = Merchant::with('user')->get();
        $countM = $merchant->where('status','pending')->count();
        $countP = $porter->where('status','pending')->count();
        return view('Admin/porter_p', compact('porter', 'countM', 'countP'));
    }

    public function indexMerchantAktif(){
        $merchant = Merchant::with('user')->get();
        $porter = Porter::with('user')->get();
        $countM = $merchant->where('status','pending')->count();
        $countP = $porter->where('status','pending')->count();
        return view('Admin/merchant_a', compact('merchant', 'countM', 'countP'));
    }
    public function indexPorterAktif(){
        $porter = Porter::with('user')->get();
        $merchant = Merchant::with('user')->get();
        $countM = $merchant->where('status','pending')->count();
        $countP = $porter->where('status','pending')->count();
        return view('Admin/porter_a', compact('porter', 'countM', 'countP'));
    }

    public function approveMerchant($id){
        $merchant = Merchant::find($id);
        $merchant->update(['status' => 'approved']);

        return redirect()->back();
    }

    public function approvePorter($id){
        $porter = Porter::find($id);
        $porter->update(['status' => 'approved']);

        return redirect()->back();
    }

    public function rejectPorter($id){
        $porter = Porter::find($id);
        $porter->status = 'rejected';
        $porter->save();

        return redirect()->back();
    }

    public function rejectMerchant($id){
        $merchant = Merchant::find($id);
        $merchant->status = 'rejected';
        $merchant->save();

        return redirect()->back();
    }

    public function viewImg($type, $filename){
        $disk = '';

        if ($type === 'ktp') {
            $disk = 'public/ktp';
        }elseif ($type === 'skkb') {
            $disk = 'public/skkb';
        }elseif ($type === 'siup') {
            $disk = 'public/siup';
        }
        $img = storage_path("app/{$disk}/{$filename}");
        if(File::exists($img)){
            return response()->file($img);
        }
        return abort(404);
    }
}
