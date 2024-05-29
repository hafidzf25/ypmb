@extends('layouts.headonly', ['title'=>'Login'])

@section('content')
<div class="container" style="padding: 7em 1em;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="Register_Form" style="background: white; box-shadow: 0px 0px 4px 3px rgba(0, 0, 0, 0.25); border-radius: 40px; padding: 2em;">
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form method="POST" action="{{ route('actionregister') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center mb-4">
                        <h1>DAFTAR</h1>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required minlength="8">
                            <button class="btn btn-outline-secondary" type="button" id="show_password">Lihat</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">FOTO PROFIL</label><br>
                        <div style="display: flex; align-items: center;">
                            <button type="button" class="addfiles btn btn-danger" onclick="document.getElementById('fileupload').click();" style="color: white; margin-right: 1em;">Unggah Foto</button>
                            <input id="fileupload" type="file" name="foto" style="display: none;" onchange="previewImage(event)">
                            <img id="imagePreview" src="" alt="Image Preview" style="display: none; width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin-left: 1em;">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 10px; background-color:#38B6FF">Daftar</button>
                    </div>
                </form>
                <div class="text-center" style="padding-top: 1em">
                    <p>Sudah memiliki akun?</p>
                    <p style="color:#38B6FF; font-weight:900">
                        <a href="{{ url('login') }}" style="text-decoration: none;">
                            Masuk
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("show_password").addEventListener("click", function() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
    
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();
        reader.onload = function(){
            const dataURL = reader.result;
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = dataURL;
            imagePreview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endsection
