@if( auth()->user()->jabatan != "Administrator")
    <h1>You Shouldn't be here!</h1>
@else
    @extends('layouts.umum')

    @section('judulUmum')
        <title>Kario | Home</title>
    @endsection


    @section('isiUmum')
        <h1> Welcome Master Admin!, {{ auth()->user()->name }}</h1>
    @endsection
@endif

