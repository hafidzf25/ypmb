@extends('layouts.headonly', ['title'=>'Login'])

@section('content')
<div class="container" style="padding: 7em 1em;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="Login_Form" style="background: white; box-shadow: 0px 0px 4px 3px rgba(0, 0, 0, 0.25); border-radius: 40px; padding: 2em;">
                <form method="POST" action="{{ url('actionlogin') }}">
                    @csrf
                    <div class="text-center mb-4">
                        <h1>MASUK</h1>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_user" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3 text-center">
                        <p class="small mb-3"><a class="text-black-50" href="{{ url('/') }}">Lupa Password?</a></p>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 10px; background-color:#38B6FF">Masuk</button>
                    </div>
                </form>
                <div class="text-center">
                    <p>Belum memiliki akun?</p>
                    <p style="color:#38B6FF; font-weight:900">
                        <a href="{{ url('register') }}" style="text-decoration: none;">
                            Buat Akun
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
