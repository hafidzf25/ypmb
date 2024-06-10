@extends('layouts.headfooter', ['title'=>$title])

@section('content')
<div class="container-fluid detail-radius" style="padding: 15vh 8vh 4vh 8vh;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <img src="{{ asset('images/img_pelatihan1.png') }}" alt="" style="max-width: 100%;">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 pt-3">
            <div class="col mb-3 mt-3">
                <span style="font-size: 5vh; line-height:6vh;">
                    {{$data->nama_pelatihan}}
                </span>
            </div>
            <div class="col mb-3 mt-3" style="line-height: 2.5vh; font-weight:500">
                <span style="font-size: 0.9rem; line-height:1vh;">
                    {{$data->deskripsi_singkat}}</span>
            </div>
            <div class="row align-items-center" style="font-size: smaller; font-weight:500; padding: 1vh 1vh 1vh 1vh;">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-5">
                    <span>
                        <i class="bi bi-calendar-week-fill" style="color: white; margin-right:0.5vh"></i>
                        {{$data->tanggal_awal}} s.d {{$data->tanggal_akhir}}
                    </span>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl text-end">
                    @if($status == 1)
                    <a class="btn btn-success text-white custom-width" style="border-radius:1vh; width:20vh">Terdaftar</a>
                    @else
                    @if(auth()->check())
                    <a href="{{ url('/pembayaran/' . $data->id_pelatihan) }}" class="btn btn-info text-white custom-width" style="background-color: #FEAD01; border-radius:1vh; width:20vh">Daftar</a>
                    @else
                    <a href="/login" class="btn btn-info text-white custom-width" style="background-color: #FEAD01; border-radius:1vh; width:20vh">Daftar</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" style="padding:2em; margin-top:1vh; margin-bottom:5vh; display: flex; align-items: flex-start;">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 p-3 m-3" style="box-shadow: 0 0 4px rgba(0,0,0,0.5); border-radius:20px">
            <span style="font-weight:bolder; font-size:3vh">
                Informasi Umum
            </span>
            <br><br>
            <p>{!! nl2br(e($data->deskripsi_lengkap)) !!}</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 m-3" style="padding-right:0; padding-left:0; box-shadow: 0 0 4px rgba(0, 0, 0, 0.5); border-radius: 20px; font-weight:bold;">
            <div class="col" style="background-color: #38B6FF; color:white; padding:2.5vh; border-radius: 20px 20px 0 0; ">
                Mengenai Pelatihan
            </div>
            <div class="col text-center mt-3">
                <button class="btn btn mt-3 mb-3 p-3 text-start" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample" style="background-color:#38B6FF; color:white; font-weight:bold; border-radius:20px; width:50vh">
                    <span>
                        Classroom Pelatihan
                        <i class="bi bi-caret-down-fill"></i>
                    </span>
                </button>
                <div class="collapse" id="collapseExample">
                    <div>
                        @if($status == 0)
                        <button type="button" class="btn btn-danger">Belum Terdaftar</button> <br> <br>
                        @else
                        @if($datapartisipan->konfirmasi == 1)
                        @if($data->link == '')
                        <button type="button" class="btn btn-danger">Menunggu</button> <br> <br>
                        @else
                        <a href="{{$data->link}}" class="btn btn-success" style="color: #FFFFFF;">Join Classroom</a>
                        @endif
                        @else
                        Pembayaran sedang diverifikasi terlebih dahulu.<br><br>
                        @endif
                        @endif
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
                        @if($status == 0)
                        <button type="button" class="btn btn-danger">Belum Terdaftar</button> <br> <br>
                        @else
                        @if($datapartisipan->konfirmasi == 1)
                        @if($sertifikat == 'null')
                        <button type="button" class="btn btn-danger">Menunggu</button> <br> <br>
                        @else
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Unduh </button>
                        @endif
                        @else
                        Pembayaran sedang diverifikasi terlebih dahulu.<br><br>
                        @endif
                        @endif
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="height: 100%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sertifikat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src="{{ asset('doc/' . $sertifikat) }}" type="application/pdf" width="100%" height="550px">
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('joinClassroomBtn').addEventListener('click', function() {
        window.open('https://classroom.google.com/c/Njc4NzE2NDU3MTAy?cjc=3manpkf', '_blank');
    });
</script>

@endsection