<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\User;
use App\Http\Requests\StorepasienRequest;
use App\Http\Requests\UpdatepasienRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepasienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepasienRequest  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepasienRequest $request, pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        //
    }

    public function cariData (){
        $name = $_GET['name'];
        $birthdate = $_GET['birthdate'];
        $phone = $_GET['phone'];
        $data = pasien::join('users', 'pasiens.ID_Dokter', '=', 'users.ID')->
        where('pasiens.namaPasien','LIKE', $name)->
        Where('pasiens.tglLahir','LIKE',$birthdate)->
        Where('pasiens.No_Telpon','LIKE',$phone)->
        select('pasiens.*', 'users.name', 'users.tglLahir as notUsed', 
        'users.email', 'users.jabatan', 'users.email', 'users.alamat')->get();

        return view('data-pasien', compact('data'));
    }
}
