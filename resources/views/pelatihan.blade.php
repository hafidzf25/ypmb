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
    

@endsection