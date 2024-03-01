@extends ('layouts.headfooter')

@section('content')
    <div class="container-fluid">
        <div class="row custom-rounded" style="padding:2em; border: 1px black solid; margin-left:25em; margin-right:25em; margin-top:5em; margin-bottom:5em; box-shadow: 0 0 5px rgba(0,0,0,0.5);">
            <div class="col text-center" style="padding-top: 2em;">
                <h1>DAFTAR</h1>
            </div>
            <div class="mb-3" style="padding-top: 2em;">
                <label for="formGroupExampleInput" class="form-label">NIK</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan NIK" style="padding: 1em; border-radius: 20px;">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">NAMA LENGKAP</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama" style="padding: 1em; border-radius: 20px;">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Masukan Email" style="padding: 1em; border-radius: 20px;">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">PASSWORD</label>
                <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Masukan Password" style="padding: 1em; border-radius: 20px;">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">KONFIRMASI PASSWORD</label>
                <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Konfirmasi Password" style="padding: 1em; border-radius: 20px;">
            </div>
            <div class="mb-5">
                <label for="formGroupExampleInput2" class="form-label">FOTO PROFIL</label><br>
                <button class="addfiles btn btn-danger" style="color: white;">Unggah Foto</button>
                <input id="fileupload" type="file" name="files[]" multiple style='display: none;'>
            </div>
            <div style="text-align: center;">
                <button class="btn btn-info text-white" type="submit" style="border-radius: 10px; padding:15px 140px 15px 140px; font-size:1.2em">DAFTAR</button>
            </div>  
        </div>
    </div>
@endsection