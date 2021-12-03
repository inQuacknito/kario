@if( auth()->user()->jabatan != "Administrator")
    <h1>You Shouldn't be here!</h1>
@else
    @extends('layouts.umum')

    @section('judulUmum')
        <title>Kario | Verivikasi</title>
    @endsection


    @section('isiUmum')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="event-schedule-area-two bg-color pad100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="title-text">
                            <h2>List Pengajuan Akun</h2>
                        </div>
                        <p>
                            In ludus latine mea, eos paulo quaestio an. Meis possit ea sit. Vidisse molestie<br />
                            cum te, sea lorem instructior at.
                        </p>
                    </div>
                </div>
                <!-- /.col end-->
            </div>
            <!-- row end-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">Tanggal Lahir</th>
                                            <th scope="col">Pengguna</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Verivikasi</th>
                                        </tr>
                                    </thead>
                                    @foreach($pengguna as $verifikasi)
                                    <tbody>
                                        <tr class="inner-box">
                                            <th scope="row">
                                                <div class="event-date">
                                                    {{ $verifikasi->tglLahir }}
                                                </div>
                                            </th>
                                            <td>
                                                <div class="event-wrap">
                                                    <h3>{{ $verifikasi->name }}</h3>
                                                    <div class="meta">
                                                        <div class="organizers">
                                                            {{ $verifikasi->jabatan }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>{{ $verifikasi->email }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <form action="/verivicate">
                                                @csrf
                                                <div class="primary-btn">
                                                    <input type="hidden" id="verivied" name="verivied" value=1>
                                                    <input type="hidden" id="id" name="id" value={{ $verifikasi->id }}>   
                                                    <button type="submit" class="btn btn-primary">Verivicate</button>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /row end-->
        </div>
    </div>
    @endsection
@endif