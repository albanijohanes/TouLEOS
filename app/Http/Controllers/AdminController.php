<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Porter;
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

    public function storeDocument(Request $request, $type, $id){
        $disk = '';

        if ($type === 'merchant') {
            $disk = ($request->input('document_type') === 'ktp') ? 'ktp' : 'skkb';
        }elseif ($type === 'porter') {
            $disk = ($request->input('document_type') === 'ktp') ? 'ktp' : 'siup';
        }

        $document = $request->file('document');
        $document->storeAs("$type", "{$id}", $disk);

    }

    public function viewDocument($type, $id){
        $disk = '';

        if ($type === 'merchant') {
            $disk = (Storage::disk('ktp')->exists("$type/{$id}.pdf")) ? 'ktp' : 'siup';
        }elseif ($type === 'porter') {
            $disk = (Storage::disk('ktp')->exists("$type/{$id}.pdf")) ? 'ktp' : 'skkb';
        }

        if (Storage::disk($disk)->exists("$type/{$id}.pdf")) {
            $pdfPath = Storage::disk($disk)->path("$type/{$id}.pdf");
            return response()->file($pdfPath);
        }
    }
}
