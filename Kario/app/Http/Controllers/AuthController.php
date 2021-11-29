<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        if(auth()->user()->jabatan == "Administrator")
            return view('Admin.index');
        else
            return view('Dokter.index');

    }

    public function listVerif(){
        $pengguna = User::where('verivied','LIKE', 0)->get();

        return view('Admin.verifikasi', compact('pengguna'));
    }
}
