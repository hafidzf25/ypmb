@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Pelatihan</h1>
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
      <form action="{{ route('admin.pelatihan.update', ['id_pelatihan' => $pelatihans->id_pelatihan])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Pelatihan</label>
                  <input type="text" class="form-control" id="id_pelatihan" name="id_pelatihan" placeholder="Nama pelatihan" value="{{ $pelatihans->id_pelatihan }}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pelatihan</label>
                  <input type="text" class="form-control" id="nama_pelatihan" name="nama_pelatihan" placeholder="Nama pelatihan" value="{{ $pelatihans->nama_pelatihan }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Awal</label>
                  <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" placeholder="Tanggal Mulai" value="{{ $pelatihans->tanggal_awal }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Akhir</label>
                  <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" placeholder="Tanggal Selesai" value="{{ $pelatihans->tanggal_akhir }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi Singkat</label>
                  <textarea class="form-control" name="deskripsi_singkat" id="deskripsi_singkat" rows="3" placeholder="Enter ...">{{ $pelatihans->deskripsi_singkat }}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi Lengkap</label>
                  <textarea class="form-control" name="deskripsi_lengkap" id="deskripsi_lengkap" rows="3" placeholder="Enter ...">{{ $pelatihans->deskripsi_lengkap }}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga</label>
                  <input class="form-control" name="harga_pelatihan" placeholder="Masukan Harga" value="{{ $pelatihans->harga_pelatihan }}"></input>
                </div>
                <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $pelatihans->link) }}">
                </div>
                <div class="form-group">
                  <label for="foto_sampul">Foto Sampul</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="foto_sampul" class="custom-file-input" id="foto_sampul" onchange="previewImage(event)">
                      <label class="custom-file-label" for="exampleInputFile" id="exampleInputFileLabel">{{ $pelatihans->foto_sampul ?? 'Choose file' }}</label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <img id="imagePreview" src="{{ $pelatihans->foto_sampul ? asset('images/pelatihan/' . $pelatihans->foto_sampul) : '#' }}" alt="Image Preview" style="display: {{ $pelatihans->foto_sampul ? 'block' : 'none' }}; width: 150px; height: 150px; object-fit: cover;" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="foto_sampul">Upload Sertifikat Peserta</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="files[]" class="custom-file-input" id="files" multiple>
                      <label class="custom-file-label" for="exampleInputFile" id="exampleInputFileLabel">Choose File</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
      </form>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('deskripsi_lengkap');

  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('imagePreview');
      output.src = reader.result;
      output.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);

    var fileName = event.target.files[0].name;
    var label = document.getElementById('exampleInputFileLabel');
    label.textContent = fileName;
  }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Menangkap event saat file dipilih
    $('#files').on('change', function() {
      // Mendapatkan nama file yang dipilih
      var fileName = $(this).val().split('\\').pop();
      // Mengganti teks label dengan nama file
      $('#exampleInputFileLabel').text(fileName);
    });
  });
</script>
@endsection