@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Peserta dari {{ $pelatihan->nama_pelatihan }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.pelatihan') }}">Pelatihan</a></li>
                        <li class="breadcrumb-item active">Peserta</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Peserta {{ $pelatihan->nama_pelatihan }}</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Status Konfirmasi</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Konfirmasi Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participants as $index => $participant)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $participant->user->name }}</td>
                                        <td>{{ $participant->konfirmasi ? 'Confirmed' : 'Pending' }}</td>
                                        <td>
                                            @if($participant->bukti_pembayaran)
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal{{ $index }}">
                                                Lihat Bukti
                                            </button>
                                            <div class="modal fade" id="paymentModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ asset($participant->bukti_pembayaran) }}" class="img-fluid" alt="Bukti Pembayaran">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            Tidak ada bukti
                                            @endif
                                        </td>
                                        <td>{{ $participant->sertifikat }}</td>
                                        <td>
                                            <form action="{{ route('admin.pelatihan.upload-certificate') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_ppp" value="{{ $participant->id_ppp }}">
                                                <input type="file" name="sertifikat" required>
                                                <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.pembayaran.toggle', ['id_ppp' => $participant->id_ppp]) }}" class="btn btn-info">
                                                <i class="fas fa-edit"></i> Konfirmasi
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.pelatihan') }}" class="btn btn-default">Kembali ke Pelatihan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
