@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Peserta Seminar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.seminar') }}">Seminar</a></li>
                        <li class="breadcrumb-item active">Peserta</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- <div class="row mb-2">
                <div class="col-12">
                    <a href="{{ route('admin.seminar.export-participants', $seminar->id_seminar) }}" class="btn btn-success mb-3">Export to Excel</a>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Email Peserta</th>
                                        <th>Sertifikat</th>
                                        <th>Upload Sertifikat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participants as $index => $participant)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $participant->user->name }}</td>
                                        <td>{{ $participant->user->email }}</td>
                                        <td>{{ $participant->sertifikat }}</td>
                                        <td>
                                            <form action="{{ route('admin.seminar.upload-certificate') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_partisipan_seminar" value="{{ $participant->id_partisipan_seminar }}">
                                                <input type="file" name="sertifikat" required>
                                                <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.seminar') }}" class="btn btn-default">Kembali ke Seminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
