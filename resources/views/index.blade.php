@extends('layouts.headfooter', ['title'=>'Home'])

@section('content')
    <div class="container-fluid" style="padding-left: 3em; padding-right: 3em; padding-bottom: 1em; padding-top: 4em;">
        <div class="row justify-content-center">
            <div class="col carousel-container">
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/headline-1.png') }}" class="d-block w-100 carousel-img-radius" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/headline-2.png') }}" class="d-block w-100 carousel-img-radius" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/headline-1.png') }}" class="d-block w-100 carousel-img-radius" alt="...">
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

      <div class="container-fluid" style="padding-top: 3em;">
        <div class="row text-center align-items-center">
          <div class="col" style="font-weight: bolder; font-size: 2em;">
            Tentang Cerdas
          </div>
        </div>
      </div>
      
      <div class="container-fluid" style="padding: 1vh;">
        <div class="row">
          <div class="col-6" style="font-weight: bolder; font-size: 28px;">
            <img src="{{ asset('images/about-cerdas.png') }}" alt="" style="max-width: 100%; height: auto;">
          </div>
          <div class="col-6" style="font-size: 18px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Eu nisl nunc mi ipsum. Dignissim sodales ut eu sem integer vitae justo eget magna. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Suspendisse interdum consectetur libero id faucibus nisl. Commodo elit at imperdiet dui. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Aliquet nibh praesent tristique magna sit amet. Porttitor lacus luctus accumsan tortor. Mauris pharetra et ultrices neque ornare aenean euismod. Gravida quis blandit turpis cursus in hac. Ut pharetra sit amet aliquam. 
          </div>
        </div>
      </div>

      <div class="container-fluid" style="padding-left: 2em; padding-right: 2em;">
        <div class="row align-items-center">
          <div class="col" style="font-weight: bolder; font-size: 2em;">
            Pelatihan Populer
          </div>
          <div class="col text-end" style="font-weight: bolder; font-size: 1.2em;">
            <a href="{{ url('pelatihan') }}" style="text-decoration: none; color: inherit;">
              Lihat Semua
            </a>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 2em;">
        @foreach ($data as $index)
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
                    <img src="people.png" alt=""> Peserta 4077
                </p>
                <p class="card-text align-items-center" style="margin-bottom: 1.8em;">
                    <i class="bi bi-star-fill" style="color: #38B6FF"></i>
                    <img src="star.png" alt=""> 4.8
                </p>
                <div style="text-align: center;">
                    <button class="btn btn-info text-white custom-rounded card-width" type="submit">
                        <a href="{{ url('detailpelatihan') }}" style="text-decoration: none; color:white">
                            Lihat Selengkapnya
                        </a>
                    </button>
                </div>  
            </div>
        </div>
        </div>
        @endforeach
        </div>
      </div>
@endsection