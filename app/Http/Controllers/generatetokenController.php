<?php

namespace App\Http\Controllers;

use App\Porter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class generatetokenController extends Controller
{
    public function generateToken(Request $request){
        $porter = Porter::find(auth()->user()->porter_id);

        if($porter){
            $token = Str::random(32);

            $porter->permanent_token = $token;
            $porter->save();

            session()->flash("success", "Token Berhasil di Buat");
        }else{
            session()->flash("Fail", "Anda bukan Uber");
        }

        return redirect()->back();
    }
}
