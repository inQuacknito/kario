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
                            <h2>Daftar Pasien</h2>
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
                                            <th class="text-center" scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Tanggal Dicatat</th>
                                            <th scope="col">Dokter</th>
                                            <th scope="col">Status Resiko</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    @foreach($data as $pasien)
                                    <tbody>
                                        <tr class="inner-box">
                                            <th scope="row">
                                                <div class="event-date">
                                                    {{ $pasien->namaPasien }}
                                                </div>
                                            </th>
                                            <td>
                                                <div class="meta">
                                                    <div class="organizers">
                                                        {{ $pasien->Alamat }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>{{ $pasien->tglLahir }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>{{ $pasien->updated_at }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>{{ $pasien->name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="r-no">
                                                    <span>{{ $pasien->prioritas }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <form action="/verivicate">
                                                @csrf
                                                <div class="primary-btn">
                                                    <input type="hidden" id="verivied" name="verivied" value=1>
                                                    <input type="hidden" id="id" name="id" value={{ $pasien->id }}>   
                                                    <button type="submit" class="btn btn-primary">View</button>
                                                </div>
                                                </form>
                                                <form action="/verivicate">
                                                    @csrf
                                                    <div class="primary-btn">
                                                        <input type="hidden" id="verivied" name="verivied" value=1>
                                                        <input type="hidden" id="id" name="id" value={{ $pasien->id }}>   
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                </form>
                                                <form action="/verivicate">
                                                    @csrf
                                                    <div class="primary-btn">
                                                        <input type="hidden" id="verivied" name="verivied" value=1>
                                                        <input type="hidden" id="id" name="id" value={{ $pasien->id }}>   
                                                        <button type="submit" class="btn btn-primary">Delete</button>
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