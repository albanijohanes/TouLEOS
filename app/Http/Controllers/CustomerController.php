<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('user/index');
    }
    // public function edituser(Request $request, $id){
    //     $user = User::find($id);
    //     $user->update($request->all());
    //     return redirect()->route('userporter')->with('success', 'Informasi anda telah di update');
    // }
    public function edituser(){
        return view('user/edit_profil_user');
    }
    public function profiluser(){
        return view('user/profil_user');
    }
    public function services(){
        return view('user/services');
    }
}
