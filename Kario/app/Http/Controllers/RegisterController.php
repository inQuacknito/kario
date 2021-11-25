<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nama' => 'required',
            'email'=> 'required|unique:users|email:rfc,dns',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'tgllahir' => 'required|date',
            'alamat' => 'required',
            'no_telpon' => 'required|numeric',
            'jabatan' => 'required'
        ]);

        $data['name'] = $validate['nama'];
        $data['tglLahir'] = $validate['tgllahir'];
        $data['alamat'] = $validate['alamat'];
        $data['no_telpon'] = $validate['no_telpon'];
        $data['email'] = $validate['email'];
        $data['jabatan'] = $validate['jabatan'];
        $data['password'] = bcrypt($validate['password']);

        User::create($data);

        return redirect('/login')->with('Success', 'Pendaftaran Berhasil! Silahkan Login Setelah Akun Terverivikasi!');
    }
}
