<?php

namespace App\Http\Controllers;

use App\Product;
use App\Servicerequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PorterController extends Controller
{
    public function porter(){
        $porter = Servicerequest::where('porter_id', Auth::user()->id)->get();
        $count = $porter->where('status','pending')->count();
        return view('porter/index', compact('porter', 'count'));
    }
    public function userporter(){
        $porter = Servicerequest::where('porter_id', Auth::user()->id)->get();
        $count = $porter->where('status','pending')->count();
        return view('porter/users-profile', compact('porter', 'count'));
    }
    public function userpromot(){
        $porter = Servicerequest::where('porter_id', Auth::user()->id)->get();
        $count = $porter->where('status','pending')->count();
        $produk = Product::with('merchant')->get();
        return view('porter/promotion', compact('porter', 'count', 'produk'));
    }
    public function acceptServiceRequest($id){
        $serviceRequest = Servicerequest::find($id);
        if ($serviceRequest && $serviceRequest->status === 'pending') {
            $serviceRequest->update([
                'status' => 'accepted',
                'waktu_mulai' => now()
            ]);
            return redirect()->back()->with('success', 'You have accepted the service request.');
        } else {
            return redirect()->back()->with('error', 'The service request is not available for acceptance.');
        }
    }
    public function completeService($id){
        $serviceRequest = Servicerequest::find($id);
        if($serviceRequest && $serviceRequest->status === 'accepted'){
            $waktuMulai = strtotime($serviceRequest->waktu_mulai);
            $waktuSelesai = strtotime(now());
            $durasiMenit = round(($waktuSelesai - $waktuMulai) / 60,2);
            $total = ceil($durasiMenit / 60) * $serviceRequest->harga;

            $serviceRequest->update([
                'status' => 'completed',
                'waktu_selesai' => now(),
                'total' => $total,
            ]);
            return redirect()->back()->with('success', 'Anda telah menyelesaikan permintaan layanan');
        }else{
            return redirect()->back()->with('error', 'Anda tidak punya akses untuk menyelesaikan permintaan');
        }
    }
    public function cancelService($id){
        $serviceRequest = Servicerequest::find($id);
        if($serviceRequest && $serviceRequest->status === 'accepted'){
            $serviceRequest->update([
                'status' => 'canceled',
                'waktu_selesai' => now(),
            ]);
            return redirect()->back()->with('success', 'Anda telah membatalkan permintaan layanan');
        }else{
            return redirect()->back()->with('error', 'Anda tidak punya akses untuk membatalkan permintaan');
        }
    }
}
