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
        return view('Admin/merchant_p');
    }

    public function AdminPorterPermohonan(){
        return view('Admin/porter_p');
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
        $merchant->status = 'approved';
        $merchant->save();

        return redirect()->route('admin.merchant');
    }

    public function approvePorter($id){
        $porter = Porter::find($id);
        $porter->status = 'approved';
        $porter->save();

        return redirect()->route('admin.porter');
    }

    public function rejectPorter($id){
        $porter = Porter::find($id);
        $porter->status = 'rejected';
        $porter->save();

        return redirect()->route('admin.porter');
    }

    public function rejectMerchant($id){
        $merchant = Merchant::find($id);
        $merchant->status = 'rejected';
        $merchant->save();

        return redirect()->route('admin.merchant');
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
