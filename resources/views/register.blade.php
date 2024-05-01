@extends('layouts.headonly', ['title'=>'Login'])

@section('content')
<div class="container" style="padding: 7em 1em;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="Login_Form" style="background: white; box-shadow: 0px 0px 4px 3px rgba(0, 0, 0, 0.25); border-radius: 40px; padding: 2em;">
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="text-center mb-4">
                        <h1>DAFTAR</h1>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_user" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="konfirmasi_password_user" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="konfirmasi_password_user" name="konfirmasi_password_user" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">FOTO PROFIL</label><br>
                        <button class="addfiles btn btn-danger" style="color: white;">Unggah Foto</button>
                        <input id="fileupload" type="file" name="files[]" multiple style='display: none;'>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 10px; background-color:#38B6FF">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection