@extends('layouts.headfooter')

@section('content')
    <div class="container-fluid" style="display: flex; justify-content: center; align-items: center; height: 120vh; padding: 3em 3em 1em;">
        <div class="row Login_Form align-self-center" style="width: 80%; max-width: 500px; height: 80%; max-height: 700px; position: relative; background: white; box-shadow: 0px 0px 4px 3px rgba(0, 0, 0, 0.25); border-radius: 40px">
            <form method="POST" action="{{ url('login') }}">
                @csrf
                <div class="col" style="display: flex; justify-content: center; align-items: center; padding-top: 3em;">
                    <h1>MASUK</h1>
                </div>
                <div style="width: 100%; padding: 2em 2em 0em 2em">
                        <label for="nik_user" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik_user" name="nik_user" placeholder="Masukan NIK" style="border-radius: 10px" required>
                </div>
                <div class="mb-3" style="width: 100%; padding: 2em 2em 0em 2em">
                        <label for="password_user" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Masukan Password" style="border-radius: 10px" required>
                </div>
                <div class="mb-3" style="width: 100%; text-align: center">
                    <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="{{ url('/') }}">Lupa Password?</a></p>
                </div>
                <div class="" style="width: 100%; padding: 2em 2em 0em 2em">
                        <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 10px; background-color:#38B6FF">Masuk</button>
                </div>
            </form>
            <div class="col text-center">
                <p>Belum memiliki akun?</p>
                <p style="color:#38B6FF; font-weight:900">
                    <a href="{{ url('register') }}" style="text-decoration: none;">
                        Buat Akun
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection