<?php

namespace App\Http\Controllers;

use App\Notifications\OrderReceived;
use App\Porter;
use App\Servicerequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        $serviceRequests = Servicerequest::where('customer_id', Auth::user()->id)->get();
        return view('user/index', compact('serviceRequests'));
    }
    // public function edituser(Request $request, $id){
    //     $user = User::find($id);
    //     $user->update($request->all());
    //     return redirect()->route('userporter')->with('success', 'Informasi anda telah di update');
    // }
    public function profiluser(){
        return view('user/profil_user');
    }
    public function services(){
        return view('user/services');
    }
    public function sendServiceRequest(Request $request){
        $validate = $request->validate([
            'porter_id' => 'required|exists:porters,porter_id'
        ]);

        $porter = Porter::where('porter_id', $validate['porter_id'])->first();

        if (!$porter) {
            return redirect()->back()->with('error', 'Kode porter tidak ditemukan');
        }
        $serviceRequest = Servicerequest::create([
            'customer_id' => Auth::user()->id,
            'porter_id' => $porter->id,
            'tanggal' => today(),
            'status' => 'pending'
        ]);
        $porter->user->notify(new OrderReceived(
            'Anda mendapatkan request baru',
            'Anda mendapatkan request baru dari Customer ' . Auth::user()->name,
            $serviceRequest->id
        ));

        return redirect()->back()->with('success', 'Request sudah terbuat, mohon menunggu penerimaan dari porter');
    }
}
