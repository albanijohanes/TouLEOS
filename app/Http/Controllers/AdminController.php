<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Porter;
use App\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function indexUser(){
        $user = User::where('role', 'customer')->get();
        return view('Admin/pengunjung', compact('user'));
    }

    public function AdminMerchantPermohonan(){
        $merchant = Merchant::with('user')->get();
        return view('Admin/merchant_p', compact('merchant'));
    }

    public function AdminPorterPermohonan(){
        $porter = Porter::with('user')->get();
        return view('Admin/porter_p', compact('porter'));
    }

    public function indexMerchantAktif(){
        $merchant = Merchant::with('user')->get();
        return view('Admin/merchant_a', compact('merchant'));
    }
    public function indexPorterAktif(){
        $porter = Porter::with('user')->get();
        return view('Admin/porter_a', compact('porter'));
    }

    public function approveMerchant($id){
        $merchant = Merchant::find($id);
        $merchant->update(['status' => 'approved']);

        return redirect()->back();
    }

    public function approvePorter($id){
        $porter = Porter::find($id);
        $porter->updated(['status' => 'approved']);

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

    public function viewPdf($type, $id){
        $disk = '';

        if ($type === 'ktp') {
            $disk = 'ktp';
        }elseif ($type === 'skkb') {
            $disk = 'skkb';
        }elseif ($type === 'siup') {
            $disk = 'siup';
        }

        if(Storage::disk($disk)->exists("{$id}.pdf")){
            $pdfPath = "/storage/app/{$disk}/{$id}.pdf";
            $pdfUrl = asset($pdfPath);

            return redirect($pdfUrl);
        }
        return abort(404);
    }
}
