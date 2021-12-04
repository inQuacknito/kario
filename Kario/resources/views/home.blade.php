@extends('layouts.umum')

@section('judulUmum')
    <title>Kario | Home</title>
@endsection

@section('isiUmum')
<header id="header" class="header">
        <img class="decoration-star" src="{{asset('images/decoration-star.svg')}}" alt="alternative">
        <img class="decoration-star-2" src="{{asset('images/decoration-star.svg')}}" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large">Welcome to Cario</h1>
                        <p class="p-large">Lakukan diagnosis potensi penyakit karies dengan kariogram</p>
                        <a class="btn-solid-lg" href="/kariogram">Lakukan Diagnosis</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5 col-xl-7">
                    <div class="image-container">
                        <img style="width: 500px;  right: 0px;" class="img-fluid" src="{{asset('images/dental-check.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
</header> <!-- end of header -->
@endsection