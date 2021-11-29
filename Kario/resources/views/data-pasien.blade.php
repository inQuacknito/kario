@extends('layouts.umum')

@section('judulUmum')
    <title> Kario | Data Pasien </title>
@endsection

@section('isiUmum')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <!-- /Breadcrumb -->
          
          @foreach($data as $pasien)
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                      <h4>Dokter: {{ $pasien->name }}</h4>
                      <p class="text-secondary mb-1">{{ $pasien->jabatan }}</p>
                      <p class="text-muted font-size-sm">{{ $pasien->email }}</p>
                      <p class="text-muted font-size-sm">{{ $pasien->No_Telpon }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Pasien</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $pasien->namaPasien }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No. Telfon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $pasien->No_Telpon }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $pasien->Alamat }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $pasien->tglLahir }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Skor Diagnosa</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      500
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prioritas</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $pasien->prioritas }}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          @endforeach
        </div>
       
    </div>
@endsection