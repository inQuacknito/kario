<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        if(auth()->user()->jabatan == "Administrator")
            return view('Admin.index');
        else
            return view('Dokter.index');

    }
}
