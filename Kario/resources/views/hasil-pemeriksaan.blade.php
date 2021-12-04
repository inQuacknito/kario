@extends('layouts.umum')

@section('judulUmum')
    <title> Kario | Hasil Pemeriksaan </title>
@endsection

@section('isiUmum')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cek Hasil</div>
                <div class="card-body">
                    <form method="get" action="{{ route('Pasien') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="resi" class="col-md-4 col-form-label text-md-right">Nama Pasien</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>

                            <div class="col-md-6">
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">No. Telepon / Handphone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-auto offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection