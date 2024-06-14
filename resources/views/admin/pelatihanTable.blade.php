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
            <h1 class="m-0">Data Pelatihan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Pelatihan</li>
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
            <a href="{{ route('admin.pelatihan.create') }}" class="btn btn-success mb-3">
                <i class="fas fa-plus"></i> Tambah Pelatihan
            </a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pelatihan</h3>

                <div class="card-tools">
                  <form action="{{ route('admin.pelatihan.search') }}" method="get">
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
                      <th>Tanggal Awal</th>
                      <th>Tanggal Akhir</th>
                      <th>Harga</th>
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
                    @foreach ($pelatihans as $pelatihan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pelatihan->nama_pelatihan }}</td>
                        <td>
                          <a href="{{ route('admin.pelatihan.participants', ['id_pelatihan' => $pelatihan->id_pelatihan]) }}" class="btn btn-secondary">
                            <i class="fas fa-users"></i> Peserta
                          </a>
                        </td>
                        <td>{{ $pelatihan->tanggal_awal }}</td>
                        <td>{{ $pelatihan->tanggal_akhir }}</td>
                        <td>Rp.{{ number_format($pelatihan->harga_pelatihan, 0, ',', '.') }}</td>
                        <td>{{ Str::limit($pelatihan->deskripsi_singkat, 20) }}</td>
                        <td>{!! Str::limit($pelatihan->deskripsi_lengkap, 20) !!}</td>
                        <td>
                            <form action="{{ route('admin.pelatihan.upload-surat') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_pelatihan" value="{{ $pelatihan->id_pelatihan }}">
                                <input type="file" name="surat_undangan" required>
                                <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                            </form>
                        </td>
                        <td>
                          <span class="tag {{ $pelatihan->status ? 'tag-success' : 'tag-danger' }}">
                            {{ $pelatihan->status ? 'OnGoing' : 'END' }}
                          </span>
                        </td>
                        <td>
                          <a data-toggle="modal" data-target="#modal-hapus{{ $pelatihan->id_pelatihan }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Hapus
                          </a>
                          <a href="{{ route('admin.pelatihan.edit', ['id_pelatihan' => $pelatihan->id_pelatihan]) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                          <a href="{{ route('admin.pelatihan.toggle', ['id_pelatihan' => $pelatihan->id_pelatihan]) }}" class="btn btn-info">
                            <i class="fas fa-edit"></i> Status
                          </a>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal-hapus{{ $pelatihan->id_pelatihan }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah kamu yakin ingin menghapus data pelatihan <b>{{ $pelatihan->nama_pelatihan }}</b>?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('admin.pelatihan.delete', ['id_pelatihan' => $pelatihan->id_pelatihan]) }}" method="POST">
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
