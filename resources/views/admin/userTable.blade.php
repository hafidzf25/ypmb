@extends('layouts.admin')
@section('content')
<style>
    .rounded-square {
        border-radius: 10%; /* Adjust this value to control the roundness */
    }
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
            <h1 class="m-0">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel User</h3>

                <div class="card-tools">
                  <form action="{{ route('admin.user.search') }}" method="get">
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
                      <th>User</th>
                      <th>Email</th>
                      <th>Instansi</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->instansi }}</td>
                        <td>
                          <span class="tag {{ $user->active ? 'tag-success' : 'tag-danger' }}">
                            {{ $user->active ? 'Active' : 'inActive' }}
                          </span>
                        </td>
                        <td><img src="{{ asset($user->foto) }}" class="rounded-square" alt="" style="width: 3em; height: 3em;"></td>
                        <td>
                          <a data-toggle="modal" data-target="#modal-hapus{{ $user->id }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Hapus
                          </a>
                          <a href="{{ route('admin.user.toggle', ['id' => $user->id]) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit
                          </a>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal-hapus{{ $user->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah kamu yakin ingin menghapus data user <b>{{ $user->name }}</b>?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('admin.user.delete', ['id' => $user->id]) }}" method="POST">
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
