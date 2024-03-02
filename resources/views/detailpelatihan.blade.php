@extends('layouts.headfooter')

@section('content')
    <div class="container-fluid detail-radius" style="padding: 8vh 8vh 4vh 8vh;">
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
                <div class="col mb-2 mt-2">
                    <span style="font-size: 5vh; line-height:6vh;">
                        Pelatihan Media Penyuluhan Agama berbasis TIK
                    </span>
                </div>
                <div class="col" style="line-height: 2.5vh; font-weight:500">
                    <span style="font-size: 1.9vh; line-height:1vh;">
                        Pelatihan pengembangan media penyuluhan agama berbasis Teknologi Informasi dan Komunikasi (TIK) merupakan langkah penting dalam memanfaatkan perkembangan teknologi untuk menyebarkan pesan-pesan agama secara efektif.
                    </span>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-5 custom-rounded pb-2 pt-2 mt-3" style="background-color: #FFFFFF; line-height:2.5vh; padding-left:2vh; padding-right:2vh">
                    <span style="color: black; font-size:small;">
                        Loka Pendidikan dan Pelatihan Keagamaan Bandung
                    </span>
                </div>
                <div class="row align-items-center" style="font-size: smaller; font-weight:500; padding: 1vh 1vh 1vh 1vh;">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-5">
                        <span>
                            <i class="bi bi-calendar-week-fill" style="color: white; margin-right:0.5vh"></i>
                               25 Februari 2024 s.d 29 Februari 2024
                        </span>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl text-end">
                        <a href="{{ url('login') }}" class="btn btn-info text-white custom-width" style="background-color: #FEAD01; border-radius:1vh; width:20vh">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="padding:2em; margin-top:1vh; margin-bottom:5vh;">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 p-3 m-3" style="box-shadow: 0 0 4px rgba(0,0,0,0.5); border-radius:20px">
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
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 m-3" style="padding-right:0; padding-left:0; height: 300px; box-shadow: 0 0 4px rgba(0, 0, 0, 0.5); border-radius: 20px; font-weight:bold">
                <div class="col" style="background-color: #38B6FF; color:white; padding:2.5vh; border-radius: 20px 20px 0 0; ">
                    Modul Pelatihan
                </div>
                <div class="col text-center">
                    <button class="btn btn mt-3 mb-3 p-3 text-start" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background-color:#38B6FF; color:white; font-weight:bold; border-radius:20px; width:50vh">
                        <span>
                            Section 1 : Pendahuluan           
                            <i class="bi bi-caret-down-fill"></i>
                        </span>
                    </button>

                    <div class="collapse" id="collapseExample">
                        <div>
                            <!-- Buttons -->
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary">Button 1</button>
                                <button type="button" class="btn btn-secondary">Button 2</button>
                                <button type="button" class="btn btn-secondary">Button 3</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>  
    </div>
@endsection