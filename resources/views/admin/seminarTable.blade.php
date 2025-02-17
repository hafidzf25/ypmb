@extends('layouts.admin')
@section('content')
<style>
    .tag-success {
        background-color: green;
        color: white;
        padding: 0.2em 0.5em;
        border-radius: 0.25em;
    }
    .tag-danger {
        background-color: red;
        color: white;
        padding: 0.2em 0.5em;
        border-radius: 0.25em;
    }
    .table td {
        vertical-align: middle;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Seminar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Seminar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <a href="{{ route('admin.seminar.create') }}" class="btn btn-success mb-3">
              <i class="fas fa-plus"></i> Tambah Seminar
            </a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Seminar</h3>
                <div class="card-tools">
                  <form action="{{ route('admin.seminar.search') }}" method="get">
                      <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                  <i class="fas fa-search"></i>
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Daftar Peserta</th>
                      <th>Tanggal</th>
                      <th>Waktu Pelaksanaan</th>
                      <th>Deskripsi Singkat</th>
                      <th>Deskripsi Lengkap</th>
                      <th>Upload Surat Undangan</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      use Illuminate\Support\Str;
                      $no = 1;
                    @endphp
                    @foreach ($seminars as $seminar)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $seminar->nama_seminar }}</td>
                        <td>
                          <a href="{{ route('admin.seminar.participants', ['id_seminar' => $seminar->id_seminar]) }}" class="btn btn-secondary">
                            <i class="fas fa-users"></i> Peserta
                          </a>
                        </td>
                        <td>{{ $seminar->tanggal_seminar }}</td>
                        <td>{{ date('H:i', strtotime($seminar->waktu_seminar)) }} WIB</td>
                        <td>{{ Str::limit($seminar->deskripsi_singkat, 20) }}</td>
                        <td>{!! Str::limit($seminar->deskripsi_lengkap, 20) !!}</td>
                        <td>
                          <form action="{{ route('admin.seminar.upload-surat') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id_seminar" value="{{ $seminar->id_seminar }}">
                              <input type="file" name="surat_undangan" required>
                              <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                          </form>
                      </td>
                        <td>
                          <span class="tag {{ $seminar->status ? 'tag-success' : 'tag-danger' }}">
                            {{ $seminar->status ? 'OnGoing' : 'END' }}
                          </span>
                        </td>
                        <td>
                          <a data-toggle="modal" data-target="#modal-hapus{{ $seminar->id_seminar }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Hapus
                          </a>
                          <a href="{{ route('admin.seminar.edit', ['id_seminar' => $seminar->id_seminar]) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="{{ route('admin.seminar.toggle', ['id_seminar' => $seminar->id_seminar]) }}" class="btn btn-info">
                            <i class="fas fa-edit"></i> Status
                          </a>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal-hapus{{ $seminar->id_seminar }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah kamu yakin ingin menghapus data seminar <b>{{ $seminar->nama_seminar }}</b>?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('admin.seminar.delete', ['id_seminar' => $seminar->id_seminar]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 
@endsection
