<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles-->
    <link href="{{asset('yavin/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('yavin/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @yield('judulUmum')
  </head>
  
  <body>  
    @auth
        @if( auth()->user()->jabatan == "Administrator")
        <body id="page-top border">
            <div id="wrapper">
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon">
                            <i class="fas fa-tooth"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Kario</div>
                    </a>
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/kariogram">
                            <i class="fas fa-fw fa-stethoscope"></i>
                            <span>Kariogram</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/daftarpasien">
                            <i class="fas fa-fw fa-list-ul"></i>
                            <span>Data Pasien</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/verifikasi">
                            <i class="fas fa-fw fa-list-ul"></i>
                            <span>Verifikasi</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/logout">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit">Keluar</button>
                                </form>
                        </a>
                    </li>
                </ul>
        
        @else
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <a class="navbar-brand" href="/index">Cario</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/hasil-pemeriksaan">Hasil Pemeriksaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu Dokter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/daftarpasien">Daftar Pasien</a></li>
                                <li><a class="dropdown-item" href="/diagnose">Diagnosa Pasien</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Keluar</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif
    @else
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="navbar-brand-icon">
                    <i class="fas fa-tooth"></i>
                </div>
                <div class="navbar-brand-text mx-3">Cario</div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/kariogram">Kariogram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/hasil-pemeriksaan">Cek Hasil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Untuk Dokter
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/login">Masuk</a></li>
                            <li><a class="dropdown-item" href="/signup">Daftar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
    @endauth
              
    @yield('isiUmum')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadmin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/chart-pie-demo.js')}}"></script>

    <script src="{{asset('yavin/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('yavin/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{asset('yavin/js/scripts.js')}}"></script> <!-- Custom scripts -->
    
  </body>
</html>