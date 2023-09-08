<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
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
