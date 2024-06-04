@extends('layouts.headfooter', ['title'=>'Detail'])

@section('content')
<div class="container-fluid detail-radius" style="padding: 15vh 8vh 4vh 8vh;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <img src="{{ asset('images/img_pelatihan1.png') }}" alt="" style="max-width: 100%;">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 pt-3">
            <div class="col" style="font-weight: 400;">
                <span>
                    <i class="bi bi-star-fill" style="color: #EBFF00"></i>
                    4.8 (1234 reviews)
                </span>
            </div>
            <div class="col mb-3 mt-3">
                <span style="font-size: 5vh; line-height:6vh;">
                    {{$data->nama_seminar}}
                </span>
            </div>
            <div class="col mb-3 mt-3" style="line-height: 2.5vh; font-weight:500">
                <span style="font-size: 0.9rem;  line-height:1vh;">
                {{$data->deskripsi_singkat}} </span>
            </div>
            <div class="row align-items-center" style="font-size: smaller; font-weight:500; padding: 1vh 1vh 1vh 1vh;">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-5">
                    <span>
                        <i class="bi bi-calendar-week-fill" style="color: white; margin-right:0.5vh"></i>
                        {{$data->tanggal_awal}} s.d {{$data->tanggal_akhir}}
                    </span>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl text-end">
                    <a href="#" class="btn btn-info text-white custom-width" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #FEAD01; border-radius:1vh; width:20vh">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" style="padding:2em; margin-top:1vh; margin-bottom:0vh; display: flex; align-items: flex-start;">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 p-3 m-3" style="box-shadow: 0 0 4px rgba(0,0,0,0.5); border-radius:20px">
        <span style="font-weight:bolder; font-size:3vh">
                Informasi Umum
            </span>
            <br><br>
            <p>{!! nl2br(e($data->deskripsi_lengkap)) !!}</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 m-3" style="padding-right:0; padding-left:0; height: auto; box-shadow: 0 0 4px rgba(0, 0, 0, 0.5); border-radius: 20px; font-weight:bold">
            <div class="col" style="background-color: #38B6FF; color:white; padding:2.5vh; border-radius: 20px 20px 0 0; ">
                Mengenai Seminar
            </div>
            <div class="col text-center mt-3">
                <button class="btn btn mt-3 mb-3 p-3 text-start" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample" style="background-color:#38B6FF; color:white; font-weight:bold; border-radius:20px; width:50vh">
                    <span>
                        Meet Seminar
                        <i class="bi bi-caret-down-fill"></i>
                    </span>
                </button>
                <div class="collapse" id="collapseExample">
                    <div>
                        Meeting akan dilaksanakan pada:<br>Selasa, 17 Mei 2024. 19.00<br><br>
                        <button type="button" class="btn btn-danger">Belum Dibuka</button> <br> <br>
                        <button type="button" class="btn btn-info" style="color: #FFFFFF;">Join Zoom Meeting!</button>
                    </div>
                </div>
                <button class="btn btn mt-3 mb-3 p-3 text-start" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2  " style="background-color:#38B6FF; color:white; font-weight:bold; border-radius:20px; width:50vh">
                    <span>
                        Sertifikat
                        <i class="bi bi-caret-down-fill"></i>
                    </span>
                </button>
                <div class="collapse" id="collapseExample2">
                    <div>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Unduh </button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- <div class="row" style="padding:2em; margin-top:0vh; margin-bottom:5vh; display: flex; align-items: flex-start;">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 mx-3" style="padding-left:0; padding-right:0; box-shadow: 0 0 4px rgba(0, 0, 0, 0.5); border-radius: 20px; font-weight: bolder;">
            <div class="col" style="background-color: #38B6FF; color:white; padding:2.5vh; border-radius: 20px 20px 0 0; ">
                Umpan Balik
            </div>
            <div class="col text-start mt-1">
                <div class="row text-center justify-content-center">
                    <div class="col-3 bg-info m-4 p-4" style="border-radius: 20px 20px 20px 20px; color: white;">
                        <div class="row">
                            <div class="col-12" style="font-size: 50px; font-weight: bold;">
                                4.9
                            </div>
                            <div class="col-12" style="font-weight: lighter;">
                                3125 Reviews
                            </div>
                        </div>
                    </div>
                    <div class="col-6 bg-info m-4 d-flex align-items-center justify-content-center" style="border-radius: 20px 20px 20px 20px; color: white;">
                        <div class="row text-start">
                            <div class="col-12">
                                <span>Sangat Bagus</span>
                            </div>
                            <div class="col-12">
                                <span>Bagus</span>
                            </div>
                            <div class="col-12">
                                <span>Rata Rata</span>
                            </div>
                            <div class="col-12">
                                <span>Rendah</span>
                            </div>
                            <div class="col-12">
                                <span>Sangat Rendah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-start mt-1">

            </div>
        </div>
    </div> -->
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="height: 100%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sertifikat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src="{{ asset('images/Seminar/0023_0032.pdf') }}" type="application/pdf" width="100%" height="550px">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Seminar A</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin untuk mendaftarkan ke seminar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a href="{{ url('detailseminar') }}" class="btn btn-primary">Yakin</a>
            </div>
        </div>
    </div>
</div>
@endsection