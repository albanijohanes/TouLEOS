<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Porter;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function indexMerchant(){
        $merchants = Merchant::where('status', 'pending')->get();

        return view('Admin.merchant_p', compact('merchants'));
    }
    public function indexPorter(){
        $porters = Porter::where('status', 'pending')->get();

        return view('Admin.porter_p', compact('porters'));
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
