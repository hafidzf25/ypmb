@extends('layouts.headfooter', ['title'=>'Pembayaran Pelatihan'])

@section('content')
<div class="container-fluid mt-5 mb-5" style="padding-top: 1em;">
    <div class="row justify-content-center">
        <div class="col-10 d-flex align-items-center">
            <div class="container-fluid" style="border: 2px solid #000000; border-radius: 10px;">
                <div class="row" style="background-color: #38B6FF;">
                    <div class="col pt-2 pb-2 d-flex align-items-center" style="border-bottom: 2px solid #000000;">
                        <span style="font-size: larger; font-weight:900">{{ $data->nama_pelatihan }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-4 pb-4" style="background-color: white;">
                        @if(session('error'))
                            <div class="alert alert-danger" id="errorAlert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row mb-3">
                            <label for="inputNamaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col">
                                <input type="text" class="form-control" id="inputNamaLengkap" value="{{ auth()->user()->name }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col">
                                <input type="email" class="form-control" id="inputEmail" value="{{ auth()->user()->email }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputInstansi" class="col-sm-4 col-form-label">Instansi</label>
                            <div class="col">
                                <input type="text" class="form-control" id="inputInstansi" value="{{ auth()->user()->instansi }}" readonly>
                            </div>
                        </div>
                        <hr>
                        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-12 mb-3">
                                    <span>Biaya pendaftaran untuk pelatihan ini adalah Rp.{{ number_format($data->harga_pelatihan, 0, ',', '.') }}</span>
                                </div>
                                <div class="col-12">
                                    <span>BNI : 192810293123</span>
                                </div>
                                <div class="col-12">
                                    <span>BCA : 9928127239</span>
                                </div>
                                <div class="col-12">
                                    <span>Dana : 08129878888</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="inputFoto">Upload Bukti Pembayaran</label>
                                <div class="col">
                                    <input type="file" class="form-control" id="inputFoto" name="bukti_pembayaran">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 40%; border-radius: 10px; background-color:#38B6FF">Submit Pembayaran</button>
                                </div>
                            </div>
                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="id_pelatihan" value="{{ $data->id_pelatihan }}">
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @if(session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif --}}

@endsection
