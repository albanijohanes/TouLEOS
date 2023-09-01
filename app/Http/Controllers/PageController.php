<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function start(){
        return view('landingpage');
    }
    public function index(){
        return view('user/index');
    }
    public function edituser(){
        return view('user/edit_profil_user');
    }
    public function profiluser(){
        return view('user/profil_user');
    }
    public function services(){
        return view('user/services');
    }
    public function porter(){
        return view('porter/index');
    }
    public function userporter(){
        return view('porter/users-profile');
    }
    public function loginPorter(){
        return view('auth/login_porter');
    }
    public function loginUser(){
        return view('auth/login_user');
    }
    public function loginMerchant(){
        return view('auth/login_merchant');
    }
    public function berandaMerchant(){
        return view('merchant/beranda_merchant');
    }
    public function editMerchant(){
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
