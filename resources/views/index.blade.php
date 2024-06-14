@extends('layouts.headfooter', ['title'=>'Home'])

@section('content')

<div class="container-fluid" style="padding-left: 3em; padding-right: 3em; padding-bottom: 1em; padding-top: 4em;">
  <div class="row justify-content-center">
    <div class="col carousel-container">
      <div id="carouselExample" class="carousel slide custom-carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/headline-1.png') }}" class="d-block w-100 carousel-img-radius" alt="..." style="width: 10rem; height: 18rem;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/headline-2.jpg') }}" class="d-block w-100 carousel-img-radius" alt="..." style="width: 10rem; height: 18rem;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/headline-3.png') }}" class="d-block w-100 carousel-img-radius" alt="..." style="width: 10rem; height: 18rem;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="" aria-hidden="true"></span>
          <img src="{{ asset('images/prev_page.png') }}" alt="Next" style="width: 50px; height: auto;">
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="" aria-hidden="true">
            <img src="{{ asset('images/next_page.png') }}" alt="Next" style="width: 50px; height: auto;">
          </span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="padding-top: 1em; padding-bottom: 1em" id="tentangpmb">
  <div class="row text-center align-items-center">
    <div class="col" style="font-weight: bolder; font-size: 2em;">
      Tentang PMB
    </div>
  </div>
</div>

<div class="container-fluid" style="padding: 1em;">
  <div class="row">
    <div class="col-sm-12 col-lg-6 p-3" style="font-weight: bolder; font-size: 28px;">
      <img src="{{ asset('images/about-cerdas.png') }}" alt="" style="max-width: 100%; height: auto;">
    </div>
    <div class="col p-4" style="font-size: 18px; text-align:justify;">
      PMB, singkatan dari Pengajar Madrasah Berbagi, adalah tonggak pendidikan yang menginspirasi dan membawa perubahan dalam kehidupan siswa-siswanya. Mereka bukan hanya pengajar, tetapi juga mentor, teman, dan pahlawan dalam perjalanan pendidikan. Dengan kebijaksanaan dan dedikasi mereka, PMB membimbing siswa-siswa menuju puncak kesuksesan, memberi mereka kepercayaan diri dan pengetahuan untuk menghadapi tantangan masa depan.
    </div>
  </div>
</div>

<div class="container-fluid" style="padding-left: 2em; padding-right: 2em; padding-top: 1em;">
  <div class="row align-items-center">
    <div class="col" style="font-weight: bolder; font-size: 2em;">
      Pelatihan Terbaru
    </div>
    <div class="col text-end" style="font-weight: bolder; font-size: 1.2em;">
      <a href="{{ url('pelatihan') }}" style="text-decoration: none; color: inherit;">
        Lihat Semua
      </a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" style="padding: 2em;">
    @foreach ($datapelatihan as $index)
    <div class="col">
      <div class="card">
        <img src="images/pelatihan/{{ $index->foto_sampul }}" class="card-img-top" alt="..." style="height: 10em; ">
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bolder;">{{ Illuminate\Support\Str::limit($index->nama_pelatihan, 30) }}</h5>
          <p class="card-text align-items-center" style="margin-bottom: 0.6em; margin-top: 1.5em;">
            <i class="bi bi-calendar-week-fill" style="color: #38B6FF"></i>
            <img src="kalender.png" alt=""> {{ $index->tanggal_awal }} - {{ $index->tanggal_akhir }}
          </p>
          <p class="card-text align-items-center" style="margin-bottom: 0.6em;">
            <i class="bi bi-people-fill" style="color: #38B6FF"></i>
            <img src="people.png" alt=""> Peserta {{$index->totalPendaftar}}
          </p>
          <p class="card-text align-items-center" style="margin-bottom: 1.8em;">
            <i class="bi bi-star-fill" style="color: #38B6FF"></i>
            <img src="star.png" alt=""> 4.8
          </p>
          <div style="text-align: center;">
            <a href="{{ url('/detailpelatihan/' . $index->id_pelatihan) }}" class="btn btn-info" style="text-decoration: none; color:white">
              Lihat Selengkapnya
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="container-fluid" style="padding-left: 2em; padding-right: 2em;">
  <div class="row align-items-center">
    <div class="col" style="font-weight: bolder; font-size: 2em;">
      Seminar Terbaru
    </div>
    <div class="col text-end" style="font-weight: bolder; font-size: 1.2em;">
      <a href="{{ url('seminar') }}" style="text-decoration: none; color: inherit;">
        Lihat Semua
      </a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" style="padding: 2em;">
    @foreach ($dataseminar as $index)
    <div class="col">
      <div class="card">
        <img src="images/pelatihan/{{ $index->foto_sampul }}" class="card-img-top" alt="..." style="height: 10em; ">
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bolder;">{{ Illuminate\Support\Str::limit($index->nama_seminar, 30) }}</h5>
          <p class="card-text align-items-center" style="margin-bottom: 0.6em; margin-top: 1.5em;">
            <i class="bi bi-calendar-week-fill" style="color: #38B6FF"></i>
            <img src="kalender.png" alt=""> {{ $index->tanggal_seminar }}
          </p>
          <p class="card-text align-items-center" style="margin-bottom: 0.6em;">
            <i class="bi bi-people-fill" style="color: #38B6FF"></i>
            <img src="people.png" alt=""> Peserta {{$index->totalPendaftar}}
          </p>
          <p class="card-text align-items-center" style="margin-bottom: 1.8em;">
            <i class="bi bi-star-fill" style="color: #38B6FF"></i>
            <img src="star.png" alt=""> 4.8
          </p>
          <div style="text-align: center;">
            <a href="{{ url('/detailseminar/' . $index->id_seminar) }}" class="btn btn-info" style="text-decoration: none; color:white">
              Lihat Selengkapnya
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection