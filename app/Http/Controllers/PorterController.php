<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorterController extends Controller
{
    public function porter(){
        return view('porter/index');
    }
    public function userporter(){
        return view('porter/users-profile');
    }
}
