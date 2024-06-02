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
                    <a href="{{ url('pembayaran') }}" class="btn btn-info text-white custom-width" style="background-color: #FEAD01; border-radius:1vh; width:20vh">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" style="padding:2em; margin-top:1vh; margin-bottom:5vh; display: flex; align-items: flex-start;">
        <!-- <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 p-3 m-3" style="box-shadow: 0 0 4px rgba(0,0,0,0.5); border-radius:20px">
            <span style="font-weight:bolder; font-size:3vh">
                Informasi Umum
            </span>
            <p class="pt-2">Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</p>
            <p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.</p>
            <p>Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>
            <p style="font-weight: bolder;">NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)</p>
            <p>Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama</p>
            <p>Sasaran Pelatihan : Penyuluh Agama</p>
            <p>Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK</p>
            <p>Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. </p>
            <p>Mengapa harus ikuti pelatihan ini : Pelatihan ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.</p>
            <ol>
                <li>Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.</li>
                <li>Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.</li>
                <li>Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.</li>
                <li>Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.</li>
            </ol>
        </div> -->
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
                        Pembayaran sedang diverifikasi terlebih dahulu.<br><br>
                        <button type="button" class="btn btn-danger">Menunggu</button> <br> <br>
                        <button id="joinClassroomBtn" class="btn btn-info" style="color: white;">Join Classroom!</button>
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

<script>
    document.getElementById('joinClassroomBtn').addEventListener('click', function() {
        window.open('https://classroom.google.com/c/Njc4NzE2NDU3MTAy?cjc=3manpkf', '_blank');
    });
</script>

@endsection