@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Seminar</h1>
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
        <form action="{{ route('admin.seminar.update', ['id_seminar' => $seminars->id_seminar])}}" method="POST" enctype="multipart/form-data">
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
                    <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Seminar</label>
                            <input type="text" class="form-control" id="nama_seminar" name="nama_seminar" placeholder="Nama Seminar" value="{{ $seminars->nama_seminar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal_seminar" name="tanggal_seminar" placeholder="Tanggal" value="{{ $seminars->tanggal_seminar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi Singkat</label>
                            <textarea class="form-control" name="deskripsi_singkat" rows="3" placeholder="Enter ...">{{ $seminars->deskripsi_singkat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskpripsi Lengkap</label>
                            <textarea class="form-control" name="deskripsi_lengkap" rows="3" placeholder="Enter ...">{{ $seminars->deskripsi_lengkap }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" id="link" class="form-control" value="{{ old('link', $seminars->link) }}">
                        </div>
                        <div class="form-group">
                            <label for="foto_sampul">Foto Sampul</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="foto_sampul" class="custom-file-input" id="foto_sampul" onchange="previewImage(event)">
                                    <label class="custom-file-label" for="exampleInputFile" id="exampleInputFileLabel">{{ $seminars->foto_sampul ?? 'Choose file' }}</label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <img id="imagePreview" src="{{ $seminars->foto_sampul ? asset('images/seminar/' . $seminars->foto_sampul) : '#' }}" alt="Image Preview" style="display: {{ $seminars->foto_sampul ? 'block' : 'none' }}; width: 150px; height: 150px; object-fit: cover;" />
                            </div>
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
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

  <script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imagePreview');
      output.src = reader.result;
      output.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
    
    // Update the label with the selected file name
    var fileName = event.target.files[0].name;
    var label = document.getElementById('exampleInputFileLabel');
    label.textContent = fileName;
  }
</script>
@endsection
