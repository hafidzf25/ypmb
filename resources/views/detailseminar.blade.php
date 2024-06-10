@extends('layouts.headfooter', ['title'=>$title])

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
                    @if($status == 1)
                    <a class="btn btn-success text-white custom-width" style="border-radius:1vh; width:20vh">Terdaftar</a>
                    @else
                    @if(auth()->check())
                    <a href="#" class="btn btn-info text-white custom-width" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #FEAD01; border-radius:1vh; width:20vh">Daftar</a>
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
                        @if($status == 0)
                        <button type="button" class="btn btn-danger">Belum Terdaftar</button> <br> <br>
                        @elseif($data['link'] == '')
                        <button type="button" class="btn btn-danger">Belum Dibuka</button> <br> <br>
                        @else
                        <a href="{{$data->link}}" class="btn btn-success" style="color: #FFFFFF;">Join Zoom Meeting</a>
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
                        @elseif($sertifikat == 'null')
                        <button type="button" class="btn btn-danger">Belum Ada</button> <br> <br>
                        @else
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Unduh </button>
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
                @if(auth()->check())
                <form action="{{ route('daftarseminar') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_seminar" value="{{$data->id_seminar}}">
                    <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
                    <input type="hidden" name="sertifikat" value="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button class="btn btn-primary" type="submit">Ya</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection