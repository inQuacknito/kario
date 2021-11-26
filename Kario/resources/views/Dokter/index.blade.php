@extends('layouts.umum')

@section('judulUmum')
    <title>Kario | Home</title>
@endsection

@section('isiUmum')
    <h1> Welcome!, {{ auth()->user()->name }}</h1>
@endsection


