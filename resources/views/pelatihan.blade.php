@extends('layouts.headfooter')

@section('content')
    <div class="container-fluid judul-radius">
        <p style="font-size: 4.2em;">Temukan Pelatihan Untuk Tingkatkan Kompetensi Anda</p>
        <input style="outline: 2px solid #666666; width: 30em; height:2.5em; margin-top:50px; font-size:1.2em; padding-left:1.2em" class="form-control me-4 custom-rounded search-custom-width" type="search" placeholder="Cari Pelatihan" aria-label="Search">
    </div>

    <div class="container-fluid" style="padding: 3.5em;">
        <h1 style="font-weight: 900;">Pelatihan Terbaru</h1>
        <select class="form-select" aria-label="Default select example" style="width: 15em;">
            <option value="Semua">Semua Pelatihan</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
        </select>
    </div>
    @for ($i = 1; $i <= 2; $i++)
    <div class="container" style="align: center;">
        <div class="row justify-content-center row-cols-1 row-cols-md-4 g-4" style="padding-bottom: 2em">
            @for ($j = 1; $j <= 3; $j++)
                <div class="col" style="margin: 0em 3.43em 2em 3.43em">
                    <div class="card">
                        <img src="{{ asset('images/cards-2.png') }}" class="card-img-top" alt="..." style="height: 10em; ">
                        <div class="card-body">
                        <h5 class="card-title" style="font-weight: bolder;">Pelatihan Deteksi Dini: Analisa...</h5>
                        <p class="card-text align-items-center" style="margin-bottom: 0.6em; margin-top: 1.5em;">
                            <img src="kalender.png" alt=""> 16 Feb 2024 - 19 Feb 2024
                        </p>
                        <p class="card-text align-items-center" style="margin-bottom: 0.6em;">
                            <img src="people.png" alt=""> Peserta 4077
                        </p>
                        <p class="card-text align-items-center" style="margin-bottom: 1.8em;">
                            <img src="star.png" alt=""> 4.8
                        </p>
                        <div style="text-align: center;">
                            <button class="btn btn-info text-white custom-rounded card-width" type="submit">Lihat Selengkapnya</button>
                        </div>  
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    @endfor

    <div class="row" style="margin: 0em 10em 0em 1em;">
        <div class="col-md-12">
            <div class="float-end" style="margin: 0em 0.5em 2em 0.5em;">
                <button type="button" class="btn" style="background-color: white; color: black; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">Selanjutnya</button>
            </div>
            <div class="float-end" style="margin: 0em 0.5em 2em 0.5em;">
                <button type="button" class="btn" style="background-color: white; color: black; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">7</button>
            </div>
            <div class="float-end" style="margin: 0em 0.5em 2em 0.5em;">
                <button type="button" class="btn" style="background-color: white; color: black; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">6</button>
            </div>
            <div class="float-end" style="margin: 0em 0.5em 2em 0.5em;">
                <button type="button" class="btn" style="background-color: white; color: black; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">...</button>
            </div>
            <div class="float-end" style="margin: 0em 0.5em 2em 0.5em;">
                <button type="button" class="btn" style="background-color: white; color: black; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">2</button>
            </div>
            <div class="float-end" style="margin: 0em 0.5em 2em 0.5em;">
                <button type="button" class="btn" style="background-color: white; color: black; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">1</button>
            </div>
        </div>
    </div>
@endsection