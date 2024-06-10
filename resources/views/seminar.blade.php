@extends('layouts.headfooter', ['title'=>'Seminar'])

@section('content')
<style>
    .responsive-text {
        font-size: 4.2em;
    }

    @media (max-width: 1200px) {
        .responsive-text {
            font-size: 4.2em;
        }
    }

    @media (max-width: 992px) {
        .responsive-text {
            font-size: 3.8em;
        }
    }

    @media (max-width: 768px) {
        .responsive-text {
            font-size: 3.5rem;
        }
    }

    @media (max-width: 576px) {
        .responsive-text {
            font-size: 3.0em;
        }
    }
</style>

<div class="container-fluid judul-radius" style="padding-top: 15vh;">
    <div class="row align-items-center">
        <div class="col">
            <p class="responsive-text">Temukan Seminar Untuk Tingkatkan Kompetensi Anda</p>
        </div>
        <div class="col-auto">
            <form action="{{ route('seminar') }}" method="GET" class="input-group" style="margin-top: 50px;">
                <input type="text" name="search" class="form-control custom-rounded search-custom-width" placeholder="Cari Seminar" aria-label="Search" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                <button type="submit" class="btn custom-rounded" style="background-color: #FEAD01; border-top-left-radius: 0; border-bottom-left-radius: 0;">Cari</button>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid" style="padding: 3.5em;">
    <h1 style="font-weight: 900;">Seminar Terbaru</h1>
    <select class="form-select" aria-label="Default select example" style="width: 15em;">
        <option value="Semua">Semua Seminar</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
    </select>
</div>
<div class="container-fluid">
    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" style="padding-top: 0em; padding-left: 2em; padding-right: 2em; padding-bottom: 2em;">
        @foreach ($data as $seminar)
        <div class="col">
            <div class="card">
                <img src="images/seminar/{{ $seminar->foto_sampul }}" class="card-img-top" alt="..." style="height: 10em; ">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bolder;">{{ Illuminate\Support\Str::limit($seminar->nama_seminar, 30) }}</h5>
                    <p class="card-text align-items-center" style="margin-bottom: 0.6em; margin-top: 1.5em;">
                        <i class="bi bi-calendar-week-fill" style="color: #38B6FF"></i>
                        <img style="max-width: 100%;" src="kalender.png" alt=""> {{ $seminar->tanggal_seminar }}
                    </p>
                    <p class="card-text align-items-center" style="margin-bottom: 0.6em;">
                        <i class="bi bi-people-fill" style="color: #38B6FF"></i>
                        <img src="people.png" alt=""> Peserta {{$seminar->totalPendaftar}}
                    </p>
                    <div style="text-align: center;">
                        <a href="{{ url('/detailseminar/' . $seminar->id_seminar) }}" class="btn btn-info" style="text-decoration: none; color:white">
                            Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item {{ ($data->currentPage() == 1) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $data->url(1) }}">Sebelumnya</a>
            </li>
            @for ($i = 1; $i <= $data->lastPage(); $i++)
                <li class="page-item {{ ($data->currentPage() == $i) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                </li>
                @endfor
                <li class="page-item {{ ($data->currentPage() == $data->lastPage()) ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $data->url($data->currentPage()+1) }}">Selanjutnya</a>
                </li>
        </ul>
    </nav>
</div>

@endsection