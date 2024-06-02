@extends('layouts.headfooter', ['title' => 'Edit Profil'])

@section('content')

<div class="container-fluid mt-5 mb-5" style="padding-top: 1em;">
    <div class="row justify-content-center">
        <div class="col-10 d-flex align-items-center">
            <div class="container-fluid" style="border: 2px solid #000000; border-radius: 10px;">
                <div class="row" style="background-color: #38B6FF;">
                    <div class="col pt-2 pb-2 d-flex align-items-center" style="border-bottom: 2px solid #000000;">
                        <span style="font-size: larger; font-weight:900">Edit Profil</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-sm-12 d-flex align-items-center justify-content-center">
                        <img src="{{ asset($user->foto) }}" alt="" style="width:380px; height: 380px; border: 5px solid white; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="col pt-4 pb-4" style="background-color: white;">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('updateprofil', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="staticEmail" class="col-sm-4 col-form-label">ID Akun</label>
                                <div class="col">
                                    <input type="text" readonly class="form-control" id="staticEmail" value="{{ $user->id }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNamaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="inputNamaLengkap" name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col">
                                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputInstansi" class="col-sm-4 col-form-label">Instansi</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="inputInstansi" name="instansi" value="{{ $user->instansi }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="inputFoto">Upload Foto</label>
                                <div class="col">
                                    <input type="file" class="form-control" id="inputFoto" name="foto">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" style="width: 40%; border-radius: 10px; background-color:#38B6FF">Update Profil</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
