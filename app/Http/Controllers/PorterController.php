<?php

namespace App\Http\Controllers;

use App\Servicerequest;
use Illuminate\Http\Request;

class PorterController extends Controller
{
    public function porter(){
        return view('porter/index');
    }
    public function userporter(){
        return view('porter/users-profile');
    }
    public function requestService(Request $request){
        $request->validate([
            'porter_id' => 'required|exists:porters,id',
            'date' => 'required|date',
            'no' => 'required|integer'
        ]);

        Servicerequest::create([
            'customer_id' => auth()->user()->id,
            'porter_id' => $request->input('porter_id'),
            'data'=> $request->input('date'),
            'no' => $request->input('no'),
            'status' => 'pending',
        ]);
    }
}
