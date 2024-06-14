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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $totalUser }}</h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('admin.user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{ $totalSeminar }}</h3>

                <p>Seminar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.seminar')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $totalPelatihan }}</h3>

                <p>Pelatihan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.pelatihan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{ $totalPengurus }}</h3>

                <p>Pengurus</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ route('admin.create')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <br>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row-lg-3">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h4 class="card-title d-inline-block mb-0">Seminar Terbaru</h4>
              <a href="{{ route('admin.seminar')}}" class="btn btn-primary ml-auto">View all</a>
            </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Waktu Pelaksanaan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      use Illuminate\Support\Str;
                      $no = 1;
                    @endphp
                    @foreach ($seminar_terbaru as $seminar)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $seminar->nama_seminar }}</td>
                        <td>{{ $seminar->tanggal_seminar }}</td>
                        <td>{{ date('H:i', strtotime($seminar->waktu_seminar)) }} WIB</td>
                        <td>
                          <span class="tag {{ $seminar->status ? 'tag-success' : 'tag-danger' }}">
                            {{ $seminar->status ? 'OnGoing' : 'END' }}
                          </span>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
              <h4 class="card-title d-inline-block mb-0">Pelatihan Terbaru</h4>
              <a href="{{ route('admin.pelatihan')}}" class="btn btn-primary ml-auto">View all</a>
            </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal Awal</th>
                      <th>Tanggal Akhir</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($pelatihan_terbaru as $pelatihan)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pelatihan->nama_pelatihan }}</td>
                        <td>{{ $pelatihan->tanggal_awal }}</td>
                        <td>{{ $pelatihan->tanggal_akhir }}</td>
                        <td>
                          <span class="tag {{ $pelatihan->status ? 'tag-success' : 'tag-danger' }}">
                            {{ $pelatihan->status ? 'OnGoing' : 'END' }}
                          </span>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 
@endsection
