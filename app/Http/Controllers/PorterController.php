<?php

namespace App\Http\Controllers;

use App\Servicerequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PorterController extends Controller
{
    public function porter(){
        $porter = Auth::user();
        $notifications = $porter->notifications;
        $unreadNotificationsCount = $porter->unreadNotifications->count();
        return view('porter/index', compact('notifications', 'unreadNotificationsCount'));
    }
    public function userporter(){
        $porter = Auth::user();
        $notifications = $porter->notifications;
        $unreadNotificationsCount = $porter->unreadNotifications->count();
        return view('porter/users-profile', compact('notifications', 'unreadNotificationsCount'));
    }
    public function userpromot(){
        $porter = Auth::user();
        $notifications = $porter->notifications;
        $unreadNotificationsCount = $porter->unreadNotifications->count();
        return view('porter/promotion', compact('notifications', 'unreadNotificationsCount'));
    }
    public function acceptServiceRequest(Request $request, $id){
        $serviceRequest = Servicerequest::find($id);

        if ($serviceRequest->porter_id !== Auth::user()->id){
            $validate = $request->validate([
                'harga' => 'required|numeric|min:100|max:1000'
            ]);
            $serviceRequest->update([
                'status' => 'accepted',
                'waktu_mulai' => now(),
                'harga' => $validate['harga']
            ]);
            $serviceRequest->unreadNotifications->markAsRead();
            return redirect()->back()->with('success', 'Anda telah menerima permintaan layanan');
        }else{
            return redirect()->back()->with('error', 'Anda tidak punya akses untuk menerima permintaan');
        }
    }
    public function completeService(Request $request, $id){
        $serviceRequest = Servicerequest::find($id);
        if($serviceRequest->porter_id === Auth::user()->id && $serviceRequest->status === 'accepted'){
            $waktuMulai = strtotime($serviceRequest->waktu_mulai);
            $waktuSelesai = now();
            $durasiMenit = round(($waktuSelesai - $waktuMulai) / 60,2);
            $total = $durasiMenit * $serviceRequest->price;

            $serviceRequest->update([
                'status' => 'completed',
                'waktu_selesai' => $waktuSelesai,
                'total' => $total,
            ]);
            return redirect()->back()->with('success', 'Anda telah menyelesaikan permintaan layanan');
        }else{
            return redirect()->back()->with('error', 'Anda tidak punya akses untuk menyelesaikan permintaan');
        }
    }
    public function cancelService(Request $request, $id){
        $serviceRequest = Servicerequest::find($id);
        if($serviceRequest->porter_id === Auth::user()->id && $serviceRequest->status === 'accepted'){
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
