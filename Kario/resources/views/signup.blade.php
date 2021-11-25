@extends('layouts.umum')

@section('judulUmum')
    <title>Kario | Daftar</title>
@endsection

@section('isiUmum')
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
  
                  <form class="mx-1 mx-md-4" action="/signup" method="post">
                    
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required/>
                        <label class="form-label" for="form3Example1c">Nama Lengkap</label>
                        @error('nama')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required/>
                        <label class="form-label" for="form3Example3c">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required/>
                        <label class="form-label" for="form3Example4c">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="repassword" name="repassword" class="form-control @error('repassword') is-invalid @enderror" required/>
                        <label class="form-label" for="form3Example4cd">Ulangi Password</label>
                        @error('repassword')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="date" id="tgllahir" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror" value="{{ old('tgllahir') }}" required/>
                          <label class="form-label" for="form3Example4cd">Tanggal Lahir</label>
                          @error('tgllahir')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" required/>
                          <label class="form-label" for="form3Example4cd">Alamat</label>
                          @error('alamat')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" id="alamat" name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror" value="{{ old('no_telpon') }}" required/>
                          <label class="form-label" for="form3Example4cd">Nomor Telefon</label>
                          @error('no_telpon')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" id="jabatan" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" required/>
                          <label class="form-label" for="form3Example4cd">Jabatan</label>
                          @error('jabatan')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
  
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value=""
                        id="form2Example3c"
                        required
                        />
                      <label class="form-check-label" for="form2Example3">
                        Saya sudah membaca dan menyetujui <a href="#!">persyaratan yang berlaku!</a>
                      </label>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://www.pngarts.com/files/11/Vector-Tooth-PNG-Pic.png" class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection