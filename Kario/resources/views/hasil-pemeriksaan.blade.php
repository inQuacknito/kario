@extends('layouts.umum')

@section('judulUmum')
    <title> Kario | Hasil Pemeriksaan </title>
@endsection

@section('isiUmum')
<form method="get" action="{{ route('Pasien') }}">
    <div class="mb-3">
      <label for="name" class="form-label">Nama Pasien</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="birthdate" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="birthdate" name="birthdate">
      </div>
    <div class="mb-3">
      <label for="phone" class="form-label">No. Telefon / Handphone</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection